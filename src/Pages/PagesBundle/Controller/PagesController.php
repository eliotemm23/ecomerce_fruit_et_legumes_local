<?php

namespace Pages\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('PagesPagesBundle:Pages')->findAll();
        
        return $this->render('PagesPagesBundle:Default:pages/modulesUsed/menu.html.twig', array('pages' => $pages));
    }
    
    
    public function pageAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('PagesPagesBundle:Pages')->find($id);
        
        if (!$page) throw $this->createNotFoundException('La page n\'existe pas.');
        
        return $this->render('PagesPagesBundle:Default:pages/layout/pages.html.twig', array('page' => $page));
    }
}
