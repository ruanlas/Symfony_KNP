<?php
/**
 * Created by PhpStorm.
 * User: wideti
 * Date: 16/11/17
 * Time: 10:54
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Genus;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
//        $genus = new Genus();
//        $genus->setName('Octopus'.rand(1, 100));
//        $genus->setSubFamily('Octopodinae');
//        $genus->setSpeciesCount(rand(100, 99999));
//
//        $manager->persist($genus);
//        $manager->flush();
        $objects = Fixtures::load(__DIR__.'/fixtures.yml', $manager);
    }
}