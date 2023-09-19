<?php

namespace App\Repository;

use App\Entity\AccessoireSousPression;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AccessoireSousPression>
 *
 * @method AccessoireSousPression|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccessoireSousPression|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccessoireSousPression[]    findAll()
 * @method AccessoireSousPression[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccessoireSousPressionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccessoireSousPression::class);
    }
}
