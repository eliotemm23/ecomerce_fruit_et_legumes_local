<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\EcommerceBundle\Form\UtilisateursAdressesType;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Symfony\Component\HttpFoundation\RequestStack;
use Ecommerce\EcommerceBundle\Entity\Categories;
use Doctrine\ORM\EntityManager;


class PanierController extends Controller
{
   
    public function menuAction(Request $request)
    {
        $session = $request->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));
        
        return $this->render('EcommerceEcommerceBundle:Default:panier/modulesUsed/panier.html.twig', array('articles' => $articles));
    }
    
    
    public function supprimerAction(Request $request,$id)
    {
       
        $session = $request->getSession();
        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
        }
        
        return $this->redirect($this->generateUrl('panier')); 
        
    }
    
    public function ajouterAction(Request $request,$id)
    {
         //$session = $this->getRequest()->getSession();
         $session = $request->getSession();
        
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');
       // $request = $this->container->get('request_stack')->getCurrentRequest();
       
       
        if (array_key_exists($id, $panier)) {
//            if ($this->getRequest()->query->get('qte') != null) $panier[$id] = $this->getRequest()->query->get('qte');
                if ($request->query->get('qte') != null) $panier[$id] = $request->query->get('qte');
                $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else {
                   if ($request->query->get('qte') != null){
                   $panier[$id] = $request->query->get('qte');
                   }else{
                           $panier[$id] = 1;
            
                           $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
            }
        }
    
        
        $session->set('panier',$panier);
        
        
        return $this->redirect($this->generateUrl('panier'));
      
    }
    
   
    public function panierAction(Request $request)
    {
         
        $sessionAjout= $request->getSession();
        
        if (!$sessionAjout->has('panier')) $sessionAjout->set('panier', array());
        
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceEcommerceBundle:Produits')->findArray(array_keys($sessionAjout->get('panier')));
        
        return $this->render('EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig', array('produits' => $produits,
                                                                                             'panier' => $sessionAjout->get('panier')));
    }
    
    public function adresseSuppressionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EcommerceEcommerceBundle:UtilisateursAdresses')->find($id);
        
        if ($this->container->get('security.token_storage')->getToken()->getUser() != $entity->getUtilisateur() || !$entity)
            return $this->redirect ($this->generateUrl ('livraison'));
        
        $em->remove($entity);
        $em->flush();
        
        return $this->redirect ($this->generateUrl ('livraison'));
    }
    
    
   
    
    public function livraisonAction(Request $request)
    {
       // return $this->render('EcommerceEcommerceBundle:Default:panier/layout/livraison.html.twig');
        
        $utilisateur = $this->container->get('security.token_storage')->getToken()->getUser();
        
       
        $entity = new UtilisateursAdresses();
        //var_dump($entity);
        //$form = $this->createForm(new UtilisateursAdressesType(), $entity);
        $form = $this->createForm(UtilisateursAdressesType::class , $entity);
        
        //if ($form->isSubmitted() && $form->isValid())
       if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {    
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setUtilisateur($utilisateur);
                $em->persist($entity);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livraison'));
            }
        }
        
        return $this->render('EcommerceEcommerceBundle:Default:panier/layout/livraison.html.twig', array('utilisateur' => $utilisateur,
                                                                                                         'form' => $form->createView()));
    }
    
     public function setLivraisonOnSession(Request $request)
    {
        $session = $request->getSession();
        
        if (!$session->has('adresse')) $session->set('adresse',array());
        $adresse = $session->get('adresse');
        
        if ($request->request->get('livraison') != null && $request->request->get('facturation') != null)
        {
            $adresse['livraison'] = $request->request->get('livraison');          
            $adresse['facturation'] = $request->request->get('facturation');
        } else {
            return $this->redirect($this->generateUrl('validation'));
        }
        
        $session->set('adresse',$adresse);
        return $this->redirect($this->generateUrl('validation'));
    }
    
    
    
    
    public function validationAction(Request $request)
    {
        
       // $form->handleRequest($request);
      //if ($request->isMethod('POST'))
            
        if ($request->getMethod() == 'POST')
            $this->setLivraisonOnSession($request);
            
        $em = $this->getDoctrine()->getManager();
      
        $prepareCommande = $this->forward('EcommerceEcommerceBundle:Commandes:prepareCommande');
       
//        var_dump($prepareCommande);
//        die("lalalala");
        
        $commande = $em->getRepository('EcommerceEcommerceBundle:Commandes')->find($prepareCommande->getContent());
        
//        var_dump($commande);
//        die("why are you null ??? !!!");
//    
               
        return $this->render('EcommerceEcommerceBundle:Default:panier/layout/validation.html.twig', array('commande' => $commande));
    }
    
    
}
