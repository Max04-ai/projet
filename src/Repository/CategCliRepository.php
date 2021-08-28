<?php

namespace App\Repository;

use App\Entity\CategCli;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategCli|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategCli|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategCli[]    findAll()
 * @method CategCli[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategCliRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategCli::class);
    }

    // /**
    //  * @return CategCli[] Returns an array of CategCli objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategCli
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
