<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ActisController extends AbstractController
{
    /**
     * @Route("/actis", name="actis")
     */
    public function index()
    {
        return $this->render('actis/index.html.twig', [
            'controller_name' => 'ActisController',
        ]);
    }
}
