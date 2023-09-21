<?php

namespace App\Repository;

use App\Entity\EnsembleOuFonction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

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
    public function __construct(ManagerRegistry $registry, private readonly PaginatorInterface $paginataorInterface)
    {
        parent::__construct($registry, EnsembleOuFonction::class);
    }

    /**
     * @return PaginationInterface<int, EnsembleOuFonction>
     */
    public function findEnsembleOuFonctionPaginated(int $page): PaginationInterface
    {
        $data = $this->createQueryBuilder(alias: 'a')
            ->select(select: 'a')
            ->orderBy(sort: 'a.id', order: 'ASC')
            ->getQuery()
            ->getResult();

        return $this->paginataorInterface->paginate(target: $data, page: $page, limit: 25);
    }
}
