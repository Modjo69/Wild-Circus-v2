<?php

namespace App\Controller;

use App\Repository\SoftwareRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SoftwareController extends AbstractController
{
    /**
     * @Route("/software", name="software")
     */
    public function index( SoftwareRepository $software)
    {

        return $this->render('software/index.html.twig', [
            'softwares' => $software->findAll(),
        ]);
    }
}
