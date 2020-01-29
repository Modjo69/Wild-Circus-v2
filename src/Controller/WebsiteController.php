<?php

namespace App\Controller;

use App\Entity\Website;
use App\Repository\WebsiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WebsiteController extends AbstractController
{
    /**
     * @Route("/website", name="website")
     */
    public function index(WebsiteRepository $website)
    {
        return $this->render('website/index.html.twig', [
            'websites'=>$website->findAll()
        ]);
    }
}
