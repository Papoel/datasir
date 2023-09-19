<?php

namespace App\Repository;

use App\Entity\ReferencesValeurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReferencesValeurs>
 *
 * @method ReferencesValeurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReferencesValeurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReferencesValeurs[]    findAll()
 * @method ReferencesValeurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReferencesValeursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReferencesValeurs::class);
    }
}
