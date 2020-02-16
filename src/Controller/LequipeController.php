<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LequipeController extends AbstractController
{
    /**
     * @Route("/lequipe", name="lequipe")
     */
    public function index()
    {
        return $this->render('lequipe/index.html.twig', [
            'controller_name' => 'LequipeController',
        ]);
    }
}
