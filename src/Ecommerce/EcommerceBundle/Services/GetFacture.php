<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Ecommerce\EcommerceBundle\Services;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
class GetFacture
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    
     public function facture($facture)
    {   
          $html = $this->container->get('templating')->render('UtilisateursUtilisateursBundle:Default:layout/facturePDF.html.twig', array('facture' => $facture));
//        var_dump($html);
//        die(ici);
//        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
//        $html2pdf->pdf->SetAuthor(' ');
//        $html2pdf->pdf->SetTitle('Facture '.$facture->getReference());
//        $html2pdf->pdf->SetSubject('Facture La Fraicheur Des 4 Saisons ');
//        $html2pdf->pdf->SetKeywords('facture,La Fraicheur Des 4 Saisons ');
//        $html2pdf->pdf->SetDisplayMode('real');
//        $html2pdf->writeHTML($html);
//        $html2pdf->Output('Facture.pdf');
//         
        
        
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
        $dompdf->set_option('isHtml5ParserEnabled', true);
        
        

        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $options->set('isRemoteEnabled', TRUE);
        $dompdf = new Dompdf($options);
        //return new Response ($dompdf->stream());
//        $response = new Response();
//        $response->headers->set('Content-type' , 'application/pdf');
//        
//        return $response; 
            
    }
}
