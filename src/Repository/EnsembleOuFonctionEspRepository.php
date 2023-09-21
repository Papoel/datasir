<?php

namespace App\Repository;

use App\Entity\EnsembleOuFonctionEsp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

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
    public function __construct(ManagerRegistry $registry, private readonly PaginatorInterface $paginataorInterface)
    {
        parent::__construct($registry, EnsembleOuFonctionEsp::class);
    }

    /**
     * @return PaginationInterface<int, EnsembleOuFonctionEsp>
     */
    public function findEnsembleOuFonctionEspPaginated(int $page): PaginationInterface
    {
        $data = $this->createQueryBuilder(alias: 'a')
            ->select(select: 'a')
            ->orderBy(sort: 'a.id', order: 'ASC')
            ->getQuery()
            ->getResult();

        return $this->paginataorInterface->paginate(target: $data, page: $page, limit: 25);
    }
}
