<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class ContenedoresController extends AbstractController{
/**
 * @Route ("/")
 */

    public function homepage(){
        return new Response('mi primera symf');
    }



/**
 * @Route ("/listar/{slug}")
 */
    public function show($slug){
        $cosas = ["ostia", "cariño","tiriviento"];
        return $this->render('listar.html.twig',['title'=>$slug, 'cosas'=>$cosas]);
    }

}

?>