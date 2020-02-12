<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AlloController extends AbstractController
{
    /**
     * @Route("/allo", name="allo")
     */
    public function index()
    {
        return $this->render('allo/index.html.twig', [
            'controller_name' => 'AlloController',
        ]);
    }
}
