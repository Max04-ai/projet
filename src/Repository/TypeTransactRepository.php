<?php

namespace App\Repository;

use App\Entity\TypeTransact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeTransact|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeTransact|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeTransact[]    findAll()
 * @method TypeTransact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeTransactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeTransact::class);
    }

    // /**
    //  * @return TypeTransact[] Returns an array of TypeTransact objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeTransact
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
