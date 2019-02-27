<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setName('Games');
        $manager->persist($category);
        $manager->flush();

        $category = new Category();
        $category->setName('Computers');
        $manager->persist($category);
        $manager->flush();

        $category = new Category();
        $category->setName('TVs and Accessories');
        $manager->persist($category);
        $manager->flush();

    }
}
