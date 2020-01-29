<?php

namespace App\Controller;

use App\Entity\Apps;
use App\Repository\AppsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppsController extends AbstractController
{
    /**
     * @Route("/apps", name="apps")
     */
    public function index(AppsRepository $apps)
    {
        return $this->render('apps/index.html.twig', [
            'apps' => $apps->findAll(),
        ]);
    }
}
