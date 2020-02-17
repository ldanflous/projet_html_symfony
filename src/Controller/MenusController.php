<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MenusController extends AbstractController
{
    /**
     * @Route("/menus", name="menus")
     */
    public function index()
    {
        return $this->render('menus/index.html.twig', [
            'controller_name' => 'MenusController',
        ]);
    }
}
