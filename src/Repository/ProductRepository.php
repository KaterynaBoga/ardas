<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * @param string $query
     * @return Product[]
     */
    public function findBySearchQuery(string $query) {
        $queryBuilder =  $this->createQueryBuilder('p');
        return $queryBuilder
            ->where($queryBuilder->expr()->like('p.name', ':query'))
            ->setParameter('query', '%'.$query.'%')
            ->getQuery()
            ->getResult();
    }
}
