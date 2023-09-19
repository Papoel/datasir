<?php

namespace App\Repository;

use App\Entity\Esp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Esp>
 *
 * @method Esp|null find($id, $lockMode = null, $lockVersion = null)
 * @method Esp|null findOneBy(array $criteria, array $orderBy = null)
 * @method Esp[]    findAll()
 * @method Esp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EspRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Esp::class);
    }
}
