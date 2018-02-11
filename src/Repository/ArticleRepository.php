<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ArticleRepository extends ServiceEntityRepository
{
    /**
     * ArticleRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Article::class);
    }

    /**
     * Get all published news articles sorted by updated date.
     *
     * @return Article[]|array|ArrayCollection
     */
    public function findAllPublished(): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.isPublished = :isPublished')
            ->orderBy('a.updatedAt', 'DESC')
            ->setParameter('isPublished', true)
            ->getQuery()
            ->getResult();
    }
}
