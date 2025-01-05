<?php

namespace App\Repository;

use App\Entity\Customer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CustomerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Customer::class);
    }

    public function findBySearchTerm(string $term)
    {
        return $this->createQueryBuilder('c')
            ->where('c.name LIKE :term')
            ->orWhere('c.email LIKE :term')
            ->orWhere('c.company LIKE :term')
            ->setParameter('term', '%' . $term . '%')
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}