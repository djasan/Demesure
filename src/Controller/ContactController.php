<?php

namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request): Response
    {
        // Créez une instance de votre formulaire
        $form = $this->createForm(ContactFormType::class);

        // Gérez la soumission du formulaire si nécessaire
        $form->handleRequest($request);

        // Rendez votre template en passant le formulaire comme variable
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
