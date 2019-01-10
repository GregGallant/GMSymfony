<?php

namespace App\Repository;

use App\Entity\PhotoCat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PhotoCat|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhotoCat|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhotoCat[]    findAll()
 * @method PhotoCat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotoCatRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PhotoCat::class);
    }

    // /**
    //  * @return PhotoCat[] Returns an array of PhotoCat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PhotoCat
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
