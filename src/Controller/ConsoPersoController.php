<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\ConsoPerso;
use App\Form\ConsoPersoType;
use App\Repository\ConsoPersoRepository;


final class ConsoPersoController extends AbstractController
{
    #[Route('/conso/perso', name: 'form_conso_perso')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $conso = new ConsoPerso();
        $conso->setDate(new \DateTime('now'));
        $conso->setIdUser($this->getUser()->getId());
        

        $form = $this->createForm(ConsoPersoType::class, $conso);

        $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($conso);
        $em->flush(); // ← INSERT en BDD
        return $this->redirectToRoute('suivi');
    }

    return $this->render('conso_perso/index.html.twig', [
        'form' => $form,
    ]);
    }
}
