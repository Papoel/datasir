<?php

namespace App\Repository;

use App\Entity\AccessoireSecurite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AccessoireSecurite>
 *
 * @method AccessoireSecurite|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccessoireSecurite|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccessoireSecurite[]    findAll()
 * @method AccessoireSecurite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccessoireSecuriteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccessoireSecurite::class);
    }
}
