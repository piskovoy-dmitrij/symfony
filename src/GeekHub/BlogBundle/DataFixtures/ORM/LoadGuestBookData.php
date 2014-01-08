<?php

namespace GeekHub\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GeekHub\BlogBundle\Entity\GuestBook;
use GeekHub\DemoBundle\Entity\User;

class LoadGuestBookData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        for($i = 1; $i <= 6; $i++) {
            $guestComment = new GuestBook();
            $guestComment->setEmail("test@email.com");
            $guestComment->setName("Test User");
            $guestComment->setText("Crystal Castles is a Canadian electronic band formed in 2004 in Toronto consisting of producer Ethan Kath and vocalist Alice  Disclosure are Guy and Howard
LawrenceI two brothers from the UK making houseil future musicThe duo released their debut album in 2013. Eclair Fifi is the first lady of LuckyMe Music.Art.Parties  the
exciting young electronic hip hop label from Scotland­");

            $manager->persist($guestComment);
        }

        for($i = 1; $i <= 4; $i++) {
            $guestComment = new GuestBook();
            $guestComment->setEmail("test1@email.com");
            $guestComment->setName("Test Admin");
            $guestComment->setText("Crystal Castles is a Canadian electronic band formed in 2004 in Toronto consisting of producer Ethan Kath and vocalist Alice  Disclosure are Guy and Howard
LawrenceI two brothers from the UK making houseil future musicThe duo released their debut album in 2013. Eclair Fifi is the first lady of LuckyMe Music.Art.Parties  the
exciting young electronic hip hop label from Scotland­");

            $manager->persist($guestComment);
        }

        $manager->flush();
    }

    /**
    * {@inheritDoc}
    */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
} 