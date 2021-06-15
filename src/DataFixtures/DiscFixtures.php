<?php

namespace App\DataFixtures;

use App\Entity\Disc;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DiscFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=1;$i<=10;$i++){
             $product = new Product();
             $product
                 ->setdiscTitle('disque '.$i)
                 ->setdiscYear('000'.$i)
                 ->setdiscLabel('test '.$i);
             $manager>persist($product);
        }
        $manager->flush();
    }
}
