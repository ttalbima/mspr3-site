<?php

namespace App\Controller;

use App\Entity\Info;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InfoController extends AbstractController
{
    /**
     * @Route("/info", name="info")
     */
  
    public function index(): Response
    {
        return $this->render('info/index.html.twig', [
            'controller_name' => 'InfoController',
        ]);
    }
 
    /**
     * @Route("/infook", name="infook")
     */
  
    public function indexx(): Response
    {
        return $this->render('info/indexOK.html.twig', [
            'controller_name' => 'InfoController',
        ]);
    }
    
     /**
     * @Route("/uplaod", name="upload")
     */
   public function ConvertXmlToJson(Request $request){
    $url = 'http://localhost:8080/uploads/brochures/xmlfile.xml'; 
    $fileContents = file_get_contents($url);
    $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
    $fileContents = trim(str_replace('"', "'", $fileContents));
    $simpleXml = simplexml_load_string($fileContents);

    //dd($simpleXml); 
    if($form->isSubmitted() and $form->isValid()){
    //récuperation des valeurs du fichiers xml
    $idInfo =  $simpleXml->data->uniqueID;
    $nomInfo = $simpleXml->data->name;
    $valeurInfo = $simpleXml->data->value;


    // création des objects
     $info =  new Info($idInfo, $nomInfo, $valeurInfo);
     $info->setId( $idInfo);
     $info->setName($nomInfo);
     $info->setValue( $valeurInfo );
   

    //  envoie de la base donnée
     $entityManager = $this->getDoctrine()->getManager();
     $entityManager->persist($info);
     $entityManager->flush();
    }
    // // redirection

   }
  
}