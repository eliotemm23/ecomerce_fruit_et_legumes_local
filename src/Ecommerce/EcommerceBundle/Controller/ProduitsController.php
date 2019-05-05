<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\EcommerceBundle\Entity\Categories;
use Symfony\Component\HttpFoundation\RequestStack;

class ProduitsController extends Controller
{
   
//    public function categorieAction($categorie)
//    {
//        $em = $this->getDoctrine()->getManager();
//        //$produits = $em->getRepository('EcommerceEcommerceBundle:Produits')->findBy(array('disponible' => 1));
//        $produits = $em->getRepository('EcommerceEcommerceBundle:Produits')->byCategorie($categorie);
//        
//         $categorie = $em->getRepository('EcommerceEcommerceBundle:Categories')->find($categorie);
//         if (!$categorie) throw $this->createNotFoundException('La page n\'existe pas.');
//        
//        return $this->render('EcommerceEcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
//        
//    } 
    
    
    public function produitsAction(Request $request,Categories $categorie = null)
    {
        $session = $request->getSession();
        
        $em = $this->getDoctrine()->getManager();
        if ($categorie != null)
               $findProduits = $em->getRepository('EcommerceEcommerceBundle:Produits')->byCategorie($categorie);
        //$produits = $em->getRepository('EcommerceEcommerceBundle:Produits')->findAll();
        else
               $findProduits = $em->getRepository('EcommerceEcommerceBundle:Produits')->findBy(array('disponible' => 1));
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        
        $produits  = $this->get('knp_paginator')->paginate($findProduits,$request->query->get('page', 1),12);
        return $this->render('EcommerceEcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits,
                                                                                                         'panier' => $panier));     
    }
    
    

    
    public function presentationAction($id,Request $request)
    {
        $session = $request->getSession();   
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceEcommerceBundle:Produits')->find($id);
        
        
        if (!$produit) throw $this->createNotFoundException('La page n\'existe pas.');
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;    
        
        return $this->render('EcommerceEcommerceBundle:Default:produits/layout/presentation.html.twig', array('produit' => $produit,
                                                                                                              'panier' => $panier)); 
        
    }
    
    
    public function origineproduitAction($id,Request $request)
    {
        $session = $request->getSession();   
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceEcommerceBundle:Produits')->find($id);
        
        
        if (!$produit) throw $this->createNotFoundException('La page n\'existe pas.');
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;    
        
        return $this->render('EcommerceEcommerceBundle:Default:produits/layout/origineproduit.html.twig', array('produit' => $produit));
                                                                                                               
        
    }
    
    
    public function rechercheAction()         
    {
              
              $form = $this->createFormBuilder()->add('recherche')->getForm();       
              return $this->render('EcommerceEcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));

    }
    
     public function acceuilAction()         
    {
                           
             
         return $this->render('EcommerceEcommerceBundle:Default:produits/layout/layoutAcceuil.html.twig');
    }

    
       
    public function rechercheTraitementAction(Request $request)
    {
       
        $form = $this->createFormBuilder()->add('recherche')->getForm();
           
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
            $task = $form->get('recherche')->getData();
            $em = $this->getDoctrine()->getManager();
           
            //$produits = $em->getRepository('EcommerceEcommerceBundle:Produits')->recherche($task);
            $findProduits = $em->getRepository('EcommerceEcommerceBundle:Produits')->recherche($task);
            $produits = $this->get('knp_paginator')->paginate($findProduits, $request->query->get('page', 1),9);
        } 
        else {
           throw $this->createNotFoundException('La page n\'existe pas.');
        }
        return $this->render('EcommerceEcommerceBundle:Default:produits/layout/produits.html.twig', array('produits' => $produits));
    }
    
    
    
}

