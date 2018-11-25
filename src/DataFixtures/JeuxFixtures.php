<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Jeux;

class JeuxFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($i = 1; $i<= 20; $i++){

            $jeux = new Jeux();

            $jeux->setTitle('Mon titre de jeu à l\'identifiant')
                 ->setContent('Le contenu de mon jeu ' .$i)
                 ->setImage('http://placehold.it/350x150')
                 ->setCreatedAt(new \DateTime());

                 $manager->persist($jeux);
        }

        $manager->flush();
    }
}
