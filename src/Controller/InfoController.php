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
     * @Route("/home", name="home")
     */
    public function ConvertXmlToJson(Request $request){
        $url = 'http://localhost:8000/xmlfile.xml';  // le chemin de ton fichier xml dans le repertoire public
        $fileContents = file_get_contents($url);
        dd($fileContents);
        //$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
       // $fileContents = trim(str_replace('"', "'", $fileContents));
       // $simpleXml = simplexml_load_string($fileContents);
    
        // data
        //$id =  $simpleXml->data->uniqueID;
        //$nom = $simpleXml->data->name;
        //$value = $simpleXml->data->value;
    
        // tu créés tes objects
     /*    $infos =  new Info();
        //$infos->setName($nom);
        $infos->setValue($value); */
       
        
        // tu fais la suite de logique ici. c'est à dire envoie de la base donnée
      /*   $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($infos);
        $entityManager->flush();
        */
        // redirection
    }
}
