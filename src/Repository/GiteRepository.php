<?php

namespace App\Repository;

use App\Entity\Gite;
use App\Entity\GiteSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Gite>
 *
 * @method Gite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gite[]    findAll()
 * @method Gite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gite::class);
    }

    public function add(Gite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Gite $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
/**
 * @return Gite[]  Returns an array of Gite objects
 */
public function findGiteSearch(GiteSearch $search)
{
 $query = $this->createQueryBuilder('g');

 //select * from Gite g where g.surface >= :surface order by g.id ASC;
 if($search->getMinSurface())
 {
    $query= $query
          ->andwhere("g.surface >= :minSurface")
          ->setParameter('minSurface', $search->getMinSurface());
 }

//select * from Gite g where g.surface >= :surface and g.chambre >= :chambre order by g.id ASC;
 if($search->getMinChambre())
 {
    $query= $query
          ->andwhere("g.chambre >= :minChambre")
          ->setParameter('minChambre', $search->getMinChambre());
 }

 
 if($search->getMinCouchage())
 {
    $query= $query
          ->andwhere("g.couchage >= :minCouchage")
          ->setParameter('minCouchage', $search->getMinCouchage());
 }

 if($search->getEquipement()->count() > 0){
    $e = 0;
    foreach($search->getEquipement() as $e => $equipement) {
        $e++;
        $query = $query
    ->andWhere(":equipement$e MEMBER OF g.equipements")
    ->setParameter("equipement$e", $equipement);       
    }
}












    $query = $query
       ->orderBy("g.id", "ASC")
       ->getQuery()
       ->getResult();
   return $query;
}



//    /**
//     * @return Gite[] Returns an array of Gite objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Gite
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
