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
use Symfony\Contracts\HttpClient\HttpClientInterface;
use League\CommonMark\CommonMarkConverter;

final class SuggestionsController extends AbstractController
{
    #[Route('/suggestions', name: 'suggestions')]
    public function index(TrajetsRepository $repo, HttpClientInterface $client): Response
    {

        
        $res = $repo->getAllTrajets();  
        $message = '';
        foreach($res as $r){
            $message = $message." A la date ".$r['date']." , j'ai parcouru ".$r['voiture']." km en voiture, ".$r['moto']." km en moto, ".$r['bus']." km en bus, ".$r['tramway']." km en tramway, ".$r['avion']." km en avion, ".$r['bateau']." km en bateau, ".$r['veloElectrique']." km en velo electrique, ".$r['veloMecanique']." km en velo mecanique, ".$r['train']." km en train, ".$r['metro']." km en metro, ".$r['rer']." km en rer. \n";
        }
        $message = $message.". Evalue ma consommation, suis-je plutot consommateur ou pas sur l'environnement ? Avec mes points forts et mes points faibles. structure ton texte ";
        $rep = $client->request('POST', "https://generativelanguage.googleapis.com/v1/models/gemini-2.5-flash:generateContent?key=AIzaSyAqXF3tbnvA88er2sIy3oqrqNhE7IFdLZk", [
            'json' => [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $message]
                        ]
                    ]
                ]
            ]
        ]);
        $result = $rep->toArray();

        // 5. On extrait le texte (le chemin dans l'array est un peu long chez Google)
        $texteGenere = $result['candidates'][0]['content']['parts'][0]['text'];

        $converter = new CommonMarkConverter();
        $text = $converter->convert($texteGenere)->getContent();

        return $this->render('suggestions/index.html.twig', [
            'resultat' => $text,
        ]);
    }
}
