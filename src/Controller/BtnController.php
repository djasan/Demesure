<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BtnController extends AbstractController
{
    /**
     * @Route("/btn", name="app_btn")
     */
    public function index(): Response
    {
        return $this->render('btn/index.html.twig', [
            'controller_name' => 'BtnController',
        ]);
    }
}
