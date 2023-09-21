<?php

namespace App\Repository;

use App\Entity\ZonesSensibles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

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
    public function __construct(ManagerRegistry $registry, private readonly PaginatorInterface $paginataorInterface)
    {
        parent::__construct($registry, ZonesSensibles::class);
    }

    /**
     * @return PaginationInterface<int, ZonesSensibles>
     */
    public function findZonesSensiblesPaginated(int $page): PaginationInterface
    {
        $data = $this->createQueryBuilder(alias: 'a')
            ->select(select: 'a')
            ->orderBy(sort: 'a.id', order: 'ASC')
            ->getQuery()
            ->getResult();

        return $this->paginataorInterface->paginate(target: $data, page: $page, limit: 25);
    }
}
