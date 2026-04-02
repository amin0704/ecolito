<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Trajets;
use App\Form\TrajetsType;
use App\Repository\TrajetsRepository;
use App\Repository\AchatsRepository;
use App\Repository\ConsoAlimentsRepository;
use App\Repository\ConsoPersoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use League\CommonMark\CommonMarkConverter;

final class SuggestionsController extends AbstractController
{
    #[Route('/suggestions', name: 'suggestions')]
    public function index(TrajetsRepository $repoTrajets, AchatsRepository $repoAchats, ConsoAlimentsRepository $repoAlim, ConsoPersoRepository $repoPerso, HttpClientInterface $client): Response
    {

        
        $traj = $repoTrajets->getAllTrajets();  
        $message = '';
        foreach($traj as $r){
            $message = $message." J'ai parcouru ".$r['voiture']." km en voiture, ".$r['moto']." km en moto, ".$r['bus']." km en bus, ".$r['tramway']." km en tramway, ".$r['avion']." km en avion, ".$r['bateau']." km en bateau, ".$r['veloElectrique']." km en velo electrique, ".$r['veloMecanique']." km en velo mecanique, ".$r['train']." km en train, ".$r['metro']." km en metro, ".$r['rer']." km en rer. Infos saisies à la date ".$r['date'].".";
            if(isset($r['infos'])){
                $message = $message."Concernant cette ligne : voici les infos supprlementaires : ".$r['infos']." \n";
            }
        }
        $ach = $repoAchats->getAllAchats();
        foreach($ach as $r){
            $message = $message." J'ai acheté ".$r['smartphone']." smartphone, ".$r['tablette']." tablette, ".$r['cosmetique']." produits cosmetiques, je me suis fais livré ".$r['livraison']." produits, j'ai acheté ".$r['electromenager']." produits electromenager, ".$r['veste']." veste, ".$r['manteau']." manteau, ".$r['jean']." jean, ".$r['chaussures']." chaussures, ".$r['livre']." livre, ".$r['journal']." journal, ".$r['veloE']." velo electrique, ".$r['veloM']." velo mecanique, ".$r['tv']." television, ".$r['tshirt']." tshirt, ".$r['pantalon']." pantalon, ".$r['pull']." pull. Infos saisies à la date ".$r['date'].".";
            if(isset($r['infos'])){
                $message = $message."Concernant cette ligne : voici les infos supprlementaires : ".$r['infos']." \n";
            }
        }
        $alim = $repoAlim->getAllAliments();
        foreach($alim as $r){
            $message = $message." J'ai mangé ".$r['poulet']." kg de poulet, ".$r['poisson']." kg de poisson, ".$r['boeuf']." kg de boeuf, ".$r['fromage']." kg de fromage, ".$r['pates']." kg de pates,  ".$r['riz']." kg de riz, ".$r['oeufs']." oeufs, ".$r['pommedeterre']." kg de pomme de terre, ".$r['salade']." kg de salade, ".$r['tomate']." kg de tomate, ".$r['oignons']." kg d'oignons , ".$r['pomme']." pomme, ".$r['poire']." poire, ".$r['orange']." orange, ".$r['raisin']." raisin, ".$r['cafe']." L de cafe, ".$r['lait']." L de lait. Infos saisies à la date ".$r['date'].".";
            if(isset($r['infos'])){
                $message = $message."Concernant cette ligne : voici les infos supprlementaires : ".$r['infos']." \n";
            }        
            }
        $info = $repoPerso->getAllInfo();
        foreach($info as $r){

             $message = $message." Informations supplementaires : ".$r['info'].". (Cette info a été saisies à la date ".$r['date'].", pour cette info prend en compte la date que si c'est utile).";
             
             }

        $message = $message.". Evalue ma consommation directement (ne considere pas que tu es dans une conversation classique, tu dois juste fournir les infos d'une maniere structuree et lisible, et ne parle pas de prompt ou quoi tu fourni juste un service integré pour l'utilisateur), ai-je un bon impact ou non à l'environnement ? Avec mes points forts et mes points faibles. Donne des conseils pertinents pour m'améliorer. Met en valeur dans l'affichage mes points négatifs. Si tu n'as aucune donnée dans ce prompt, invite l'utilisateur à aller dans la rubrique 'saisir vos données de consommation' dans la barre du haut et a rentrer régulièrement ses données de consommation (nourriture, trajets, achats, consommation personnalisée). Dans cette rubrique, il peut rentrer chaque trajet qu'il a fait (km et mode de transport), chaque aliment qu'il, a consommé (en kg), chaque achats qu'il a fait et une section personnalisé ou il rentre les donnees qu'il veut";
        $rep = $client->request('POST', "https://generativelanguage.googleapis.com/v1/models/gemini-2.5-flash:generateContent?key=".$_ENV['MA_CLE_API'], [
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
