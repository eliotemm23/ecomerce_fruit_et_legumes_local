<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Ecommerce\EcommerceBundle\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Ecommerce\EcommerceBundle\Entity\Commandes;
use Ecommerce\EcommerceBundle\Entity\Produits;


class CommandesAdminController extends Controller
{
    public function commandesAction() 
    {
        $em = $this->getDoctrine()->getManager();
        $commandes = $em->getRepository('EcommerceEcommerceBundle:Commandes')->findAll();
        
        return $this->render('EcommerceEcommerceBundle:Administration:commandes/layout/index.html.twig', array('commandes' => $commandes));
    }
    
    
    public function showFactureAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('EcommerceEcommerceBundle:Commandes')->find($id);
        
        if (!$facture) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl(' adminProduits_index'));
        }
        
        $this->container->get('setNewFacture')->facture($facture);
    }
    
}
