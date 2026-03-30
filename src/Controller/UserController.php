<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    #[Route('/compte', name: 'espace_compte')]
    public function index(): Response
    {
        return $this->render('connexion.html.twig');
    }
}
