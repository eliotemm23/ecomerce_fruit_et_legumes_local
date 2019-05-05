<?php
namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\EcommerceBundle\Form\UtilisateursAdressesType;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Symfony\Component\HttpFoundation\RequestStack;
use Ecommerce\EcommerceBundle\Entity\Commandes;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Entity\Categories;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Util\SecureRandom;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class CommandesController extends Controller
{
   
     public function facture(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
       // $generator = $this->container->get('security.util.secure_random');
        $generator = random_int(1, 10);
        //$generator = random_bytes(5);
  
        $session = $request->getSession();
        //$session = $this->get('request_stack')->getCurrentRequest()->getSession();
        $adresse = $session->get('adresse');
        $panier = $session->get('panier');
        $commande = array();
        $totalHT = 0;
        $totalTVA = 0;
        
        $facturation = $em->getRepository('EcommerceEcommerceBundle:UtilisateursAdresses')->find($adresse['facturation']);
        $livraison = $em->getRepository('EcommerceEcommerceBundle:UtilisateursAdresses')->find($adresse['livraison']);
        $produits = $em->getRepository('EcommerceEcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));
        
        foreach($produits as $produit)
        {
            $prixHT = ($produit->getPrix() * $panier[$produit->getId()]);
            $prixTTC = ($produit->getPrix() * $panier[$produit->getId()] / $produit->getTva()->getMultiplicate());
            $totalHT += $prixHT;
            
                        if (!isset($commande['tva']['%'.$produit->getTva()->getValeur()]))
                $commande['tva']['%'.$produit->getTva()->getValeur()] = round($prixTTC - $prixHT,2);
            else
                $commande['tva']['%'.$produit->getTva()->getValeur()] += round($prixTTC - $prixHT,2);
            
            $totalTVA += round($prixTTC - $prixHT,2);
            
            $commande['produit'][$produit->getId()] = array('reference' => $produit->getNom(),
                                                            'quantite' => $panier[$produit->getId()],
                                                            'prixHT' => round($produit->getPrix(),2),
                                                            'prixTTC' => round($produit->getPrix() / $produit->getTva()->getMultiplicate(),2));
        }  
        
        $commande['livraison'] = array('prenom' => $livraison->getPrenom(),
                                        'nom' => $livraison->getNom(),
                                        'telephone' => $livraison->getTelephone(),
                                        'adresse' => $livraison->getAdresse(),
                                        'cp' => $livraison->getCp(),
                                        'ville' => $livraison->getVille(),
                                        'pays' => $livraison->getPays(),
                                        'complement' => $livraison->getComplement());
        $commande['facturation'] = array('prenom' => $facturation->getPrenom(),
                                        'nom' => $facturation->getNom(),
                                        'telephone' => $facturation->getTelephone(),
                                        'adresse' => $facturation->getAdresse(),
                                        'cp' => $facturation->getCp(),
                                        'ville' => $facturation->getVille(),
                                        'pays' => $facturation->getPays(),
                                        'complement' => $facturation->getComplement());
        $commande['prixHT'] = round($totalHT,2);
        $commande['prixTTC'] = round($totalHT + $totalTVA,2);
        // $commande['token'] = bin2hex($generator->nextBytes(20));
        $commande['token'] = $generator;
        // $commande['token'] = "tok_mastercard";
        return $commande;
        
    }
    
    
    public function prepareCommandeAction(Request $request)
    {
        
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        
        if (!$session->has('commande'))
            $commande = new Commandes();
        else
            $commande = $em->getRepository('EcommerceEcommerceBundle:Commandes')->find($session->get('commande'));
        
        $commande->setDate(new \DateTime());
        $commande->setUtilisateur($this->container->get('security.token_storage')->getToken()->getUser());
        //$commande->setUtilisateur($this->getUser());

        $commande->setValider(0);
        $commande->setReference(0);
        
        $commande->setCommande($this->facture($request));
       
        if (!$session->has('commande')) {
              
              $em->persist($commande);
              
              $session->set('commande',$commande);
           
        }
             $em->flush();
             
        return new Response($commande->getId());        
    }    
   
    
    public function validationCommandeAction($id,Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('EcommerceEcommerceBundle:Commandes')->find($id);
        $session = $request->getSession();
        
                 
//        var_dump($commande->getValider());
//         die("random 2");
           
            
          
//            var_dump($request->request->get('stripeToken'));
//            die("random");
            
        
              //$token=$commande->getCommande()['token'];
        
         if ($request->isMethod('POST')) {
             
             if ((!$commande || $commande->getValider() == 1)){
                throw $this->createNotFoundException('La commande n\'existe pas');
             }else{
             
               //Payement avec l'Api stripe 
             try {
                \Stripe\Stripe::setApiKey("sk_test_fG4n5ZA6Hw7HgIVDxLDc9IwX");
//                 $token = $_POST['token'];
                \Stripe\Charge::create(array(
                  "amount" => ($commande->getCommande()['prixTTC'])*100,
                  "currency" => "eur",
                  "source" => "tok_mastercard", // obtained with Stripe.js
                  "description" => "Charge for emmmaxime@yahoo.fr"
                ));
                
                $commande->setValider(1);
                $commande->setReference($this->container->get('setNewReference')->reference()); 
                
                $em->flush();
                        
                $session->remove('adresse');
                $session->remove('panier');
                $session->remove('commande');
                
              //Ici le mail de validation  
                $message = \Swift_Message::newInstance()
                ->setSubject('Validation de votre commande')
                ->setFrom(array('service@lafraicheurdes4saisons.fr' => "La Fraicheur des 4 Saisons"))
                ->setTo($commande->getUtilisateur()->getEmailCanonical())
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($this->renderView('EcommerceEcommerceBundle:Default:SwiftLayout/validationCommande.html.twig',array('utilisateur' => $commande->getUtilisateur())));
                                                                                                                                         
                $this->get('mailer')->send($message);
                
                
                
                $this->get('session')->getFlashBag()->add('success','Payement validé!!!');
             }catch(\Stripe\Error\Card $e) {
             
                 $this->addFlash("error","Erreur lors du payement!!!");
             }
                

               
        //        return $this->redirect($this->generateUrl('factures'));
                 // return $this->redirect($this->generateUrl('factures'));      
           }  
         }   
        return $this->render('EcommerceEcommerceBundle:Default:panier/layout/payement.html.twig', array('id' => $id));    
                                                                                                      
   }   
}