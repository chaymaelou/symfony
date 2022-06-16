<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;
   public function __construct(UserPasswordHasherInterface $hasher)
   {
    $this->hasher = $hasher;
   }



    public function load(ObjectManager $manager): void
    {
       $admin = new User();
       $admin
             ->setUsername("admin")
             ->setPassword($this->hasher->hashPassword($admin, "admin"))
             ->setRoles(["ROLE_ADMIN"]);
             $manager->persist($admin);

             $user = new User();
             $user
                   ->setUsername("chaymae")
                   ->setPassword($this->hasher->hashPassword($user, "hello"))
                   ->setRoles(["ROLE_USER"]);
                   $manager->persist($user);

        $manager->flush();
    }
}
