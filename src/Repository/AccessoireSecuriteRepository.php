<?php

namespace App\Repository;

use App\Entity\AccessoireSecurite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @extends ServiceEntityRepository<AccessoireSecurite>
 *
 * @method AccessoireSecurite|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccessoireSecurite|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccessoireSecurite[]    findAll()
 * @method AccessoireSecurite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccessoireSecuriteRepository extends ServiceEntityRepository
{
    public function __construct(
        ManagerRegistry $registry,
        private readonly PaginatorInterface $paginataorInterface)
    {
        parent::__construct($registry, AccessoireSecurite::class);
    }

    /**
     * @return PaginationInterface<int, AccessoireSecurite>
     */
    public function findAccessoiresSecuritePaginated(int $page): PaginationInterface
    {
        $data = $this->createQueryBuilder(alias: 'a')
            ->select(select: 'a')
            ->orderBy(sort: 'a.id', order: 'ASC')
            ->getQuery()
            ->getResult();

        return $this->paginataorInterface->paginate(target: $data, page: $page, limit: 25);
    }
}
