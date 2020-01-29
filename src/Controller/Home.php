<?php
 namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class Home
 * @package App\Controller
 * @Route("/home")
 */
class Home extends AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="home")
     */
    public function index(){
        return $this->render('home/index.html.twig');
    }
}