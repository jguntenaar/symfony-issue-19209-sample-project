<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Beer;
use AppBundle\Entity\Cake;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadBugReproduceData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $beer = new Beer();
        $beer->setBrand('Heineken');
        $manager->persist($beer);

        $cake = new Cake();
        $cake->setbrand('Grandmothers cake');
        $manager->persist($cake);

        $manager->flush();
    }
}