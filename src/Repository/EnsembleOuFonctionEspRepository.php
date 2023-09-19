<?php

namespace App\Repository;

use App\Entity\EnsembleOuFonctionEsp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EnsembleOuFonctionEsp>
 *
 * @method EnsembleOuFonctionEsp|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnsembleOuFonctionEsp|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnsembleOuFonctionEsp[]    findAll()
 * @method EnsembleOuFonctionEsp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnsembleOuFonctionEspRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnsembleOuFonctionEsp::class);
    }
}
