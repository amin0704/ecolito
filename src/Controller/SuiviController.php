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
            if(isset($r['infos'])){
                $message = $message."Concernant cette ligne : voici les infos supprlementaires : ".$r['infos']." \n";
            } 
            }
        foreach($ach as $r){
            $message = $message." A la date ".$r['date']." , j'ai acheté ".$r['smartphone']." smartphone, ".$r['tablette']." tablette, ".$r['cosmetique']." produits cosmetiques, je me suis fais livré ".$r['livraison']." produits, j'ai acheté ".$r['electromenager']." produits electromenager, ".$r['veste']." veste, ".$r['manteau']." manteau, ".$r['jean']." jean, ".$r['chaussures']." chaussures, ".$r['livre']." livre, ".$r['journal']." journal, ".$r['veloE']." velo electrique, ".$r['veloM']." velo mecanique, ".$r['tv']." television, ".$r['tshirt']." tshirt, ".$r['pantalon']." pantalon, ".$r['pull']." pull. \n ";
            if(isset($r['infos'])){
                $message = $message."Concernant cette ligne : voici les infos supprlementaires : ".$r['infos']." \n";
            } 
            }
        foreach($alim as $r){
            $message = $message." A la date ".$r['date']." , j'ai mangé ".$r['poulet']." kg de poulet, ".$r['poisson']." kg de poisson, ".$r['boeuf']." kg de boeuf, ".$r['fromage']." kg de fromage, ".$r['pates']." kg de pates,  ".$r['riz']." kg de riz, ".$r['oeufs']." oeufs, ".$r['pommedeterre']." kg de pomme de terre, ".$r['salade']." kg de salade, ".$r['tomate']." kg de tomate, ".$r['oignons']." kg d'oignons , ".$r['pomme']." pomme, ".$r['poire']." poire, ".$r['orange']." orange, ".$r['raisin']." raisin, ".$r['cafe']." L de cafe, ".$r['lait']." L de lait, \n ";
            if(isset($r['infos'])){
                $message = $message."Concernant cette ligne : voici les infos supprlementaires : ".$r['infos']." \n";
            } 
        }
         foreach($info as $r){
             $message = $message." Informations supplementaires : ".$r['info'].". (Cette info a été saisies à la date ".$r['date'].", pour cette info prend en compte la date que si c'est utile sinon pas la peine ) \n";
        }
        $message = $message.". Voici mes stats. Donne moi une estimation de ma consommation totale en kg (ou g) de CO2 equivalent emis. Ainsi que ma consommation journalière de CO2 equivalent emis en divisant la conso totale par le nombre de dates ou tu vois des données associées). Donne 4 ou 5 autres données chiffrées pertinentes (avec unités). Si possible groupe une ou plusieurs stats selon un ou plusieurs paramètres que tu trouve pertinents. Va à la ligne à chauqe fois et donne moi juste les stats sous cette forme : nom de la statistique : valeur (avec unité). Je veux rien de plus ! Si tu na pas ou peu de données, invite moi a aller dans la rubrique 'ma consommation' ou je peux rentrer mes achats, trajets, aliments consommés ou n'importe quelle autre donnée grace a la section 'consommation personnalisée'. Si t'as pas beaucoup de données donne juste la conso totale et journaliere et pareil invite moi a aller dans ma consommation pour rentrer mes donnees de consommation (mais sois très bref quand tu m'invite a aller la) et donc avoir un resultat plus precis. Va a la ligne à chaque nouvelle stat et structure les données bien. Repond pas en markdown mais en balise html brutes (la reponse sera directement integrée dans un fichier html) et va a la ligne a chaque fois entre chaque stats, avec stats en gras. En dessous, fournit moi (toujours en html) 2 graphiques parlant pour l'utilisateurs et pertinents selon ses statistiques : un diagramme baton et une courbe. S'il n'y a pas assez de stats pour faire des graphiques fournit rien. Graphiques colorés. Sachant que je t'integre dans un site, fais en sorte que quand j'affiche ta reponse en raw dans mon twig je vois directement le graphique coloré. Donc donne juste le code html des graphiques (avec css et js si besoin mais dans un seul code html) pour que quand j'affiche ta reponse en raw ca me montre bien le graphique. Affiche 2 graphiques vraiment pertinents selon ses statistiques et parlant pour l'utilisateur. Si t'as besoin d'utiliser des imports exterieurs (comme chart.js) inclus dans la reponse les balises necessaire à l'import egalement. fais en sorte que les graphiques soient tres petits à l'echelle d'un ordinateur. Avant chaque graphique ajoute un titre pour dire a quoi il correspond. Pour les statistiques va à la ligne a chaque fois, espace bien la partie stats de la partie graphique et fais que les graphiques soeint tres clairs (legendes). Espace bien les graphiques entre eux et les graphiques doivent etre petits. Tu recois les dates au format annee mois jour mais repond au format jour mois annee si t'as besoin d'inclure des dates dans ta reponse. Les graphiques doivent vraiment etre espacés entre eux et tout petits à l'echelle d'un ordinateur. N'inclus rien d'autre que les codes html pour les stats et les graphiques, pas de texte en plus. Taille max : 60% de l'ecran. Les legendes doivent etre exausthives a chaque fois, et les unites des graphiques doivent etre précisées. Toute ta reponse doit etre en balises html";
        $rep = $client->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
        'headers' => [
            'Authorization' => 'Bearer ' . $_ENV['GROQ_API_KEY'],
            'Content-Type'  => 'application/json',
        ],
        'json' => [
            'model' => 'llama-3.3-70b-versatile',
            'messages' => [
                ['role' => 'user', 'content' => $message]
            ],
        ],
    ]);
    
    $data     = $rep->toArray();
    $reponse = $data['choices'][0]['message']['content'];

    
        
        return $this->render('suivi/index.html.twig', [
            'trajets' => $traj,
            'achats' => $ach,
            'nourriture' => $alim,
            'infos' => $info,
            'stats' => $reponse,
        ]);
    }
}
