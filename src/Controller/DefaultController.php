<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    // /qui va lister nos articles
    #[Route('/', name: 'Liste_article', methods:["GET"])]
    public function ListeArticle():Response
    {
        return new Response(
            "<ul><li><a href='/1'>Article 1</li>
                <li><a href='/2'>Article 2</li>
                <li><a href='/3'>Article 3</li>
  </ul>");

    } 
    // /12 afficher un article
    #[Route('/{id}', name: 'vue_article', requirements:["id"=>"\d+"], methods:["GET"])]
    public function vueArticle($id){
        return new Response("<h1>Article".$id."</h1><p> Ceci est le contenu de l'article</p>");
    }
}

   

 