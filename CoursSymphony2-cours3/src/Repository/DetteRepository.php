<?php

namespace App\Repository;

use App\Entity\Dette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dette>
 */
class DetteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dette::class);
    }

       /**
        * @return Dette[] Returns an array of Dette objects
        */
       public function findByClient($idClient): array
     {
         return $this->createQueryBuilder('d')
             ->andWhere('d.client = :val')
              ->setParameter('val', $idClient)
           ->orderBy('d.id', 'ASC')
               ->getQuery()
               ->getResult()
               
           ;
      }

    //    public function findOneBySomeField($value): ?Dette
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
