<?php

namespace App\Repository;

use App\Entity\License;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class LicenseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, License::class);
    }

    public function findActiveByCustomer($customerId)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.customer = :customerId')
            ->andWhere('l.status = :status')
            ->andWhere('l.validUntil > :now')
            ->setParameter('customerId', $customerId)
            ->setParameter('status', 'active')
            ->setParameter('now', new \DateTimeImmutable())
            ->orderBy('l.validUntil', 'DESC')
            ->getQuery()
            ->getResult();
    }
}