<?php

namespace App\Repository;

use App\Entity\AccessoireSousPression;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

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
    public function __construct(ManagerRegistry $registry, private readonly PaginatorInterface $paginataorInterface)
    {
        parent::__construct($registry, AccessoireSousPression::class);
    }

    /**
     * @return PaginationInterface<int, AccessoireSousPression>
     */
    public function findAccessoireSousPressionPaginated(int $page): PaginationInterface
    {
        $data = $this->createQueryBuilder(alias: 'a')
            ->select(select: 'a')
            ->orderBy(sort: 'a.id', order: 'ASC')
            ->getQuery()
            ->getResult();

        return $this->paginataorInterface->paginate(target: $data, page: $page, limit: 25);
    }
}
