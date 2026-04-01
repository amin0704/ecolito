<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Trajets;
use App\Form\TrajetsType;
use App\Repository\TrajetsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


final class TrajetsController extends AbstractController
{
    #[Route('/conso/trajets', name: 'form_trajets')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $trajets = new Trajets();
        $trajets->setVoiture(0);
        $trajets->setRer(0);
        $trajets->setMetro(0);
        $trajets->setAvion(0);
        $trajets->setTrain(0);
        $trajets->setTramway(0);
        $trajets->setVeloMecanique(0);
        $trajets->setVeloElectrique(0);
        $trajets->setBateau(0);
        $trajets->setMoto(0);
        $trajets->setBus(0);
        $trajets->setVoitureElectrique(0);
        $trajets->setIdUser($this->getUser()->getId());
        $trajets->setDate(new \DateTime('now'));
        
        

        $form = $this->createForm(TrajetsType::class, $trajets);

        $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($trajets);
        $em->flush(); // ← INSERT en BDD
        return $this->redirectToRoute('consommation');
    }

    return $this->render('form_trajets.html.twig', [
        'form' => $form,
    ]);
    }
}
