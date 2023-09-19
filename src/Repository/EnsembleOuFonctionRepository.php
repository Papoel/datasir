<?php

namespace App\Repository;

use App\Entity\EnsembleOuFonction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EnsembleOuFonction>
 *
 * @method EnsembleOuFonction|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnsembleOuFonction|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnsembleOuFonction[]    findAll()
 * @method EnsembleOuFonction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnsembleOuFonctionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnsembleOuFonction::class);
    }
}
