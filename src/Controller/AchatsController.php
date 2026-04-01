<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Achats;
use App\Form\AchatsType;
use App\Repository\AchatsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


final class AchatsController extends AbstractController
{
    #[Route('/conso/achats', name: 'form_achats')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $achats = new Achats();
        $achats->setTshirt(0);
        $achats->setCosmetique(0);
        $achats->setChaussures(0);
        $achats->setElectromenager(0);
        $achats->setVeloElectrique(0);
        $achats->setVeloMecanique(0);
        $achats->setJean(0);
        $achats->setPull(0);
        $achats->setPantalon(0);
        $achats->setVeste(0);
        $achats->setManteau(0);
        $achats->setAchatEnLivraison(0);
        $achats->setLivre(0);
        $achats->setJournal(0);
        $achats->setTablette(0);
        $achats->setTelevision(0);
        $achats->setSmartphone(0);
        $achats->setIdUser($this->getUser()->getId());
        $achats->setDate(new \DateTime('now'));
        
        

        $form = $this->createForm(AchatsType::class, $achats);

        $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($achats);
        $em->flush();
        $this->addFlash('success', 'Données entrées avec succès !');
        return $this->redirectToRoute('consommation');
    }

    return $this->render('form_achats.html.twig', [
        'form' => $form,
    ]);
    }
}
