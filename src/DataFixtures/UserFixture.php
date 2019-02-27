<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setName('Bobby Fischer');
        $user->setEmail('bobby@foo.com');
        $manager->persist($user);
        $manager->flush();

        $user = new User();
        $user->setName('Betty Rubble');
        $user->setEmail('betty@foo.com');
        $manager->persist($user);
        $manager->flush();

    }
}
