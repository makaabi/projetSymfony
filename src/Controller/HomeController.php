<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/** 
     * @Route("/",name="Accueil")
    */

class HomeController extends AbstractController
{


    /** 
     * @Route("/",name="demo")
    */
    

    public function index()
    {

        return $this->render('/home.html.twig');
    }


}