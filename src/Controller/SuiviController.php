<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SuiviController extends AbstractController
{
    #[Route('/suivi', name: 'suivi')]
    public function index(): Response
    {
        return $this->render('suivi/index.html.twig', [
            'controller_name' => 'SuiviController',
        ]);
    }
}
