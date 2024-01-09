<?php

// src/Controller/ContactController.php

namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Vous pouvez traiter le formulaire ici (par exemple, envoyer un e-mail)

            // Redirigez l'utilisateur ou faites ce que vous avez besoin après la soumission du formulaire
            return $this->redirectToRoute('homepage');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
