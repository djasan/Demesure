<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    /**
     * @Route("/gallery", name="app_gallery")
     */
    public function index(): Response
    {
        // Exemple de tableau associatif pour simuler des données de photos
        $photos = [
            ['filename' => 'ppdjs21.png', 'caption' => 'Description de la photo 1'],
            ['filename' => 'ppdjs13.png', 'caption' => 'Description de la photo 2'],
            ['filename' => 'ppdjs15.png', 'caption' => 'Description de la photo 3'],
            ['filename' => 'ppdjs14.png', 'caption' => 'Description de la photo 4'],
            ['filename' => 'ppdjs33.png', 'caption' => 'Description de la photo 5'],
            // Ajoutez d'autres photos selon votre besoin
        ];

        // Rendez votre template en passant les photos comme variable
        return $this->render('gallery/index.html.twig', [
            'photos' => $photos,
        ]);
    }
}
