<?php

namespace App\Repository;

use App\Entity\ReferencesValeurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

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
    public function __construct(ManagerRegistry $registry, private readonly PaginatorInterface $paginataorInterface)
    {
        parent::__construct($registry, ReferencesValeurs::class);
    }

    /**
     * @return PaginationInterface<int, ReferencesValeurs>
     */
    public function findReferencesValeursPaginated(int $page): PaginationInterface
    {
        $data = $this->createQueryBuilder(alias: 'a')
            ->select(select: 'a')
            ->orderBy(sort: 'a.id', order: 'ASC')
            ->getQuery()
            ->getResult();

        return $this->paginataorInterface->paginate(target: $data, page: $page, limit: 25);
    }
}
