<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class client_controller
{
    public function info($var){

        return new Response('je mappelle : '.$var);
    }



    /**
     * @Route("/")
     */

    public function homepage(){
        return new Response('Vous etes bien dans mon site !!!!!!!');
    }


    /**
     * @Route("/page/")
     */

    public function secpage(){
        return new Response('it also works');
    }

    /**
     * @Route("/page/{inside}")
     */

    public function unepage($inside){
        return new Response(sprintf('Ca marche !!!!!! ? %s',
            $inside));
    }





}