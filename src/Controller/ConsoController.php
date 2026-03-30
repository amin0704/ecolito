<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ConsoController extends AbstractController
{
    #[Route('/conso', name: 'consommation')]
    public function index(): Response
    {
        return $this->render('ajoutconso.html.twig');
    }
}
