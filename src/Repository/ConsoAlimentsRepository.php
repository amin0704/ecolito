<?php

namespace App\Repository;

use App\Entity\ConsoAliments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;

/**
 * @extends ServiceEntityRepository<ConsoAliments>
 */
class ConsoAlimentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, private Security $security)
    {
        parent::__construct($registry, ConsoAliments::class);
    }

//    /**
//     * @return ConsoAliments[] Returns an array of ConsoAliments objects
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

//    public function findOneBySomeField($value): ?ConsoAliments
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function getAllAliments(): array
       {
           return $this->createQueryBuilder('t')
               ->select('t.poulet AS poulet', 't.boeuf AS boeuf', 't.fromage AS fromage', 't.pates AS pates', 't.riz AS riz', 't.oeufs AS oeufs', 't.pommedeterre AS pommedeterre', 't.salade AS salade', 't.tomate AS tomate', 't.oignons AS oignons', 't.pomme AS pomme', 't.poire AS poire', 't.orange AS orange', 't.raisin AS raisin', 't.cafe AS cafe', 't.poisson AS poisson', 't.lait AS lait', 't.infos AS infos', 't.date AS date') 
               ->where('t.idUser = :val')
               ->setParameter('val', $this->security->getUser()->getId())
               ->getQuery()
               ->getScalarResult()
           ;
       }
}
