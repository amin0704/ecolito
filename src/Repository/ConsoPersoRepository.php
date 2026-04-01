<?php

namespace App\Repository;

use App\Entity\ConsoPerso;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ConsoPerso>
 */
class ConsoPersoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConsoPerso::class);
    }

    //    /**
    //     * @return ConsoPerso[] Returns an array of ConsoPerso objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?ConsoPerso
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function getAllInfo(): array
       {
           return $this->createQueryBuilder('t')
               ->select('t.date AS date', 't.informations AS info') 
               ->where('t.iduser = :val')
               ->setParameter('val', 1)
               ->getQuery()
               ->getScalarResult()
           ;
       }
}
