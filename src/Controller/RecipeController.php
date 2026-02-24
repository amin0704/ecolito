<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Recipe;
use App\Form\RecipeType;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecipeController extends AbstractController
{
    

    #[Route('/connexion', name: 'connexion', methods: ['GET'])]
    public function list(): Response
    {
        //$recipes = $this->getRecipes();

        // return $this->json($recipes);

        return $this->render('connexion.html.twig');
    }

   
}
