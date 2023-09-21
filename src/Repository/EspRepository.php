<?php

namespace App\Repository;

use App\Entity\Esp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

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
    public function __construct(ManagerRegistry $registry, private readonly PaginatorInterface $paginataorInterface)
    {
        parent::__construct($registry, Esp::class);
    }

    /**
     * @return PaginationInterface<int, Esp>
     */
    public function findEspPaginated(int $page): PaginationInterface
    {
        $data = $this->createQueryBuilder(alias: 'a')
            ->select(select: 'a')
            ->orderBy(sort: 'a.id', order: 'ASC')
            ->getQuery()
            ->getResult();

        return $this->paginataorInterface->paginate(target: $data, page: $page, limit: 25);
    }
}
