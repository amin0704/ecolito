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

final class SuiviController extends AbstractController
{
    #[Route('/suivi', name: 'suivi')]
    public function index(TrajetsRepository $repoTrajets, AchatsRepository $repoAchats, ConsoAlimentsRepository $repoAlim, ConsoPersoRepository $repoPerso, HttpClientInterface $client): Response
    {
        $traj = $repoTrajets->getAllTrajets();  
        
        $ach = $repoAchats->getAllAchats();
        
        $alim = $repoAlim->getAllAliments();
        
        $info = $repoPerso->getAllInfo();

        $message = '';
        foreach($traj as $r){
            $message = $message." A la date ".$r['date']." , j'ai parcouru ".$r['voiture']." km en voiture, ".$r['moto']." km en moto, ".$r['bus']." km en bus, ".$r['tramway']." km en tramway, ".$r['avion']." km en avion, ".$r['bateau']." km en bateau, ".$r['veloElectrique']." km en velo electrique, ".$r['veloMecanique']." km en velo mecanique, ".$r['train']." km en train, ".$r['metro']." km en metro, ".$r['rer']." km en rer. \n";
        }
        foreach($ach as $r){
            $message = $message." A la date ".$r['date']." , j'ai acheté ".$r['smartphone']." smartphone, ".$r['tablette']." tablette, ".$r['cosmetique']." produits cosmetiques, je me suis fais livré ".$r['livraison']." produits, j'ai acheté ".$r['electromenager']." produits electromenager, ".$r['veste']." veste, ".$r['manteau']." manteau, ".$r['jean']." jean, ".$r['chaussures']." chaussures, ".$r['livre']." livre, ".$r['journal']." journal, ".$r['veloE']." velo electrique, ".$r['veloM']." velo mecanique, ".$r['tv']." television, ".$r['tshirt']." tshirt, ".$r['pantalon']." pantalon, ".$r['pull']." pull. \n ";
        }
        foreach($alim as $r){
            $message = $message." A la date ".$r['date']." , j'ai mangé ".$r['poulet']." kg de poulet, ".$r['poisson']." kg de poisson, ".$r['boeuf']." kg de boeuf, ".$r['fromage']." kg de fromage, ".$r['pates']." kg de pates,  ".$r['riz']." kg de riz, ".$r['oeufs']." oeufs, ".$r['pommedeterre']." kg de pomme de terre, ".$r['salade']." kg de salade, ".$r['tomate']." kg de tomate, ".$r['oignons']." kg d'oignons , ".$r['pomme']." pomme, ".$r['poire']." poire, ".$r['orange']." orange, ".$r['raisin']." raisin, ".$r['cafe']." L de cafe, ".$r['lait']." L de lait, \n ";
        }
         foreach($info as $r){
             $message = $message." Informations supplementaires : ".$r['info'].". (Cette info a été saisies à la date ".$r['date'].", pour cette info prend en compte la date que si c'est utile sinon pas la peine ) \n";
        }
        $message = $message.". Voici mes stats. Donne moi une estimation de ma consommation totale en kg (ou g) de CO2 equivalent emis. Ainsi que ma consommation journalière de CO2 equivalent emis en divisant le conso totale par le nombre de dates ou tu vois des données associées). Donne 4 ou 5 autres données chiffrées pertinentes (avec unités). Si possible groupe une ou plusieurs stats selon un ou plusieurs paramètres que tu trouve pertinents. Va à la ligne à chauqe fois et donne moi juste les stats sous cette forme : nom de la statistique : valeur (avec unité). Je veux rien de plus ! Si tu n'a aucune donnée invite moi a aller dans la rubrique 'ma consommation' ou je peux rentrer mes achats, trajets, aliments consommés ou n'importe quelle autre donnée grace a la section 'consommation personnalisé' et si t'as pas beaucoupp de données donne juste la conso totale et journaliere et pareil invite moi a aller dans ma consommation pour rentrer mes donnees de consommation (mais sois très bref quand tu m'invite a aller la). Va a la ligne à chaque nouvelle stat et structure les données bien. Repond en markdown et avec des </br> a chaque fois entre chaque stats, avec stats en gras";
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

        $texteGenere = $result['candidates'][0]['content']['parts'][0]['text'];

        $converter = new CommonMarkConverter();
        $text = $converter->convert($texteGenere)->getContent();
        
        return $this->render('suivi/index.html.twig', [
            'trajets' => $traj,
            'achats' => $ach,
            'nourriture' => $alim,
            'infos' => $info,
            'stats' => $text,
        ]);
    }
}
