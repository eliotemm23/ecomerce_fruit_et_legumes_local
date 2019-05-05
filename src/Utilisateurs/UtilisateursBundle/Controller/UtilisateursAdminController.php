<?php
namespace Utilisateurs\UtilisateursBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UtilisateursAdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateurs = $em->getRepository('UtilisateursUtilisateursBundle:Utilisateurs')->findAll();
        
        return $this->render('UtilisateursUtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig', array('utilisateurs' => $utilisateurs));
    }
    
    public function utilisateurAction( Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('UtilisateursUtilisateursBundle:Utilisateurs')->find($id);
       // $route = $this->container->get('request')->get('_route');
        $route = $request->get('_route');
        if ($route == 'adminAdressesUtilisateurs')
            return $this->render('UtilisateursUtilisateursBundle:Administration:Utilisateurs/layout/adresses.html.twig', array('utilisateur' => $utilisateur));
        else if ($route == 'adminFacturesUtilisateurs')
            return $this->render('UtilisateursUtilisateursBundle:Administration:Utilisateurs/layout/factures.html.twig', array('utilisateur' => $utilisateur));
        else 
            throw $this->createNotFoundException('La vue n\'existe pas.');
    }
}