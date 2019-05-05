<?php

namespace Utilisateurs\UtilisateursBundle\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateursController extends Controller
{
    
    public function facturesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('EcommerceEcommerceBundle:Commandes')->byFacture($this->getUser());
        
        return $this->render('UtilisateursUtilisateursBundle:Default:layout/facture.html.twig', array('factures' => $factures));
    }
    
    
    
    public function facturesPDFAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('EcommerceEcommerceBundle:Commandes')->findOneBy(array('utilisateur' => $this->getUser(),
                                                                                     'valider' => 1,
                                                                                     'id' => $id));
        
        if (!$facture) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('facutres'));
        }
        
        $this->container->get('setNewFacture')->facture($facture);
    }
    
}
