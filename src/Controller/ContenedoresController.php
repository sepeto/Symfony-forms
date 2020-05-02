<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class ContenedoresController{
/**
 * @Route ("/")
 */

    public function homepage(){
        return new Response('mi primera symf');
    }



/**
 * @Route ("/listar/{slug}")
 */
    public function show(){
        return new Response ("putaaaa");
    }

}

?>