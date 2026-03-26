<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilController extends AbstractController
{
    #[Route('/', name: 'homepage', methods: ['GET'])]
    public function index(): Response
    {
        /* return $this->json([
            'message' => 'Welcome to the homepage!',
            'status' => 'success',
        ]);*/

        return $this->render('homepage.html.twig');
    }
}
