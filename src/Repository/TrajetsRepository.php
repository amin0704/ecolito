<?php

namespace App\Repository;

use App\Entity\Trajets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;

/**
 * @extends ServiceEntityRepository<Trajets>
 */
class TrajetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, private Security $security)
    {
        parent::__construct($registry, Trajets::class);
    }

    //    /**
    //     * @return Trajets[] Returns an array of Trajets objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

       public function getAllTrajets(): array
       {
           return $this->createQueryBuilder('t')
               ->select('t.voiture AS voiture', 't.moto AS moto', 't.veloMecanique AS veloMecanique', 't.veloElectrique AS veloElectrique', 't.train AS train', 't.bus AS bus', 't.avion AS avion', 't.metro AS metro', 't.tramway AS tramway', 't.bateau AS bateau', 't.rer AS rer', 't.date AS date') 
               ->where('t.idUser = :val')
               ->setParameter('val', $this->security->getUser()->getId())
               ->getQuery()
               ->getScalarResult()
           ;
       }
}
