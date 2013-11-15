<?php

namespace GeekHub\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GeekHub\DemoBundle\Entity\User;

class LoadUserData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $admin = new User();
        $admin->setName('admin');
        $admin->setEmail('admin@test.com');
        $manager->persist($admin);

        $user = new User();
        $user->setName('user');
        $user->setEmail('user@test.com');
        $manager->persist($user);

        $manager->flush();

        $this->addReference('admin', $admin);
        $this->addReference('user', $user);
    }

    /**
    * {@inheritDoc}
    */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
} 