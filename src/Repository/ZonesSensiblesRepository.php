<?php

namespace App\Repository;

use App\Entity\ZonesSensibles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ZonesSensibles>
 *
 * @method ZonesSensibles|null find($id, $lockMode = null, $lockVersion = null)
 * @method ZonesSensibles|null findOneBy(array $criteria, array $orderBy = null)
 * @method ZonesSensibles[]    findAll()
 * @method ZonesSensibles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZonesSensiblesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ZonesSensibles::class);
    }
}
