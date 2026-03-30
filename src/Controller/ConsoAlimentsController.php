<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\ConsoAliments;
use App\Form\ConsoAlimentsType;
use App\Repository\ConsoAlimentsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

final class ConsoAlimentsController extends AbstractController
{
    #[Route('/conso/aliments', name: 'form_aliments')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $conso = new ConsoAliments();
        $conso->setPoulet(0);
        $conso->setFromage(0);
        $conso->setBoeuf(0);
        $conso->setPomme(0);
        $conso->setPoire(0);
        $conso->setOrange(0);
        $conso->setRaisin(0);
        $conso->setOignons(0);
        $conso->setSalade(0);
        $conso->setTomate(0);
        $conso->setLait(0);
        $conso->setCafe(0);
        $conso->setPates(0);
        $conso->setRiz(0);
        $conso->setOeufs(0);
        $conso->setPommedeterre(0);
        $conso->setDate(new \DateTime('now'));
        $conso->setIdUser(1);
        

        $form = $this->createForm(ConsoAlimentsType::class, $conso);

        $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($conso);
        $em->flush(); // ← INSERT en BDD
        return $this->redirectToRoute('consommation');
    }

    return $this->render('consoaliments.html.twig', [
        'form' => $form,
    ]);
    }
}
