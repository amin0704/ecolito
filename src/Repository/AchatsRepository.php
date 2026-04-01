<?php

namespace App\Repository;

use App\Entity\Achats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;

/**
 * @extends ServiceEntityRepository<Achats>
 */
class AchatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, private Security $security)
    {
        parent::__construct($registry, Achats::class);
    }

    //    /**
    //     * @return Achats[] Returns an array of Achats objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Achats
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function getAllAchats(): array
       {
           return $this->createQueryBuilder('t')
               ->select('t.smartphone AS smartphone', 't.tablette AS tablette', 't.cosmetique AS cosmetique', 't.achatEnLivraison AS livraison', 't.electromenager AS electromenager', 't.veste AS veste', 't.manteau AS manteau', 't.jean AS jean', 't.chaussures AS chaussures', 't.livre AS livre', 't.journal AS journal', 't.veloElectrique AS veloE', 't.veloMecanique AS veloM', 't.television AS tv', 't.tshirt AS tshirt', 't.pantalon AS pantalon', 't.pull AS pull', 't.date AS date' ) 
               ->where('t.iduser = :val')
               ->setParameter('val', $this->security->getUser()->getId())
               ->getQuery()
               ->getScalarResult()
           ;
       }
}
