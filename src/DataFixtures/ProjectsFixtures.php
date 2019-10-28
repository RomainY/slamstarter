<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Projects;

class ProjectsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        //Project1
        $projects = new Projects();
        $projects->setProjectName('Project 1');
        $manager->persist($projects);

        //Project2
        $projects = new Projects();
        $projects->setProjectName('Project 2');
        $manager->persist($projects);

        //Project3
        $projects = new Projects();
        $projects->setProjectName('Project 3');
        $manager->persist($projects);

        $manager->flush();
    }
}
