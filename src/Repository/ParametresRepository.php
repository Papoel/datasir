<?php

namespace App\Repository;

use App\Entity\Parametres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @extends ServiceEntityRepository<Parametres>
 *
 * @method Parametres|null find($id, $lockMode = null, $lockVersion = null)
 * @method Parametres|null findOneBy(array $criteria, array $orderBy = null)
 * @method Parametres[]    findAll()
 * @method Parametres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParametresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, private readonly PaginatorInterface $paginataorInterface)
    {
        parent::__construct($registry, Parametres::class);
    }

    /**
     * @return PaginationInterface<int, Parametres>
     */
    public function findParametresPaginated(int $page): PaginationInterface
    {
        $data = $this->createQueryBuilder(alias: 'a')
            ->select(select: 'a')
            ->orderBy(sort: 'a.id', order: 'ASC')
            ->getQuery()
            ->getResult();

        return $this->paginataorInterface->paginate(target: $data, page: $page, limit: 25);
    }
}
