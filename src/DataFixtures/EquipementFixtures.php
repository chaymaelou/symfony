<?php

namespace App\DataFixtures;

use App\Entity\Equipement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EquipementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $equip1 = new Equipement();
         $equip1->setName('lave-linge');
         $manager->persist($equip1);
        $manager->flush();


        
        $equip2 = new Equipement();
        $equip2->setName('télévision');
        $manager->persist($equip2);
       $manager->flush();


       
       $equip3 = new Equipement();
       $equip3->setName('lave-vaiselle');
       $manager->persist($equip3);
      $manager->flush();


      $equip4 = new Equipement();
      $equip4->setName('climatisation');
      $manager->persist($equip4);
     $manager->flush();










    }
}
