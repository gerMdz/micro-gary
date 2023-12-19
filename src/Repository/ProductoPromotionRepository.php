<?php

namespace App\Repository;

use App\Entity\ProductoPromotion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductoPromotion>
 *
 * @method ProductoPromotion|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductoPromotion|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductoPromotion[]    findAll()
 * @method ProductoPromotion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductoPromotionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductoPromotion::class);
    }

//    /**
//     * @return ProductoPromotion[] Returns an array of ProductoPromotion objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProductoPromotion
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
