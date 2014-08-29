<?php
// src/Innovare/ModelBundle/DataFixtures/ORM/10-Macroareas.php

namespace Innovare\ModelBundle\DataFixtures\ORM;

use Innovare\ModelBundle\Entity\Macroarea;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixturesInterface;
use Doctrine\Common\Persistence\ObjectManager;

/*
 * Fixture for the Macroarea Entity
 */
class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 10;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $macroarea1 = new Macroarea();
        $macroarea1->setNome('Agroalimentare');

        $manager->persist($macroarea1);
        $manager->flush();
    }
}
