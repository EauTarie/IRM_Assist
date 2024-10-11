<?php

namespace App\DataFixtures;

use App\Entity\Course;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CourseFixtures extends Fixture implements  FixtureGroupInterface, DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();


        for ($i = 0; $i <= 10; $i++) {
            $course = new Course();
            $course->setName($faker->word);
            $course->setType($faker->randomElement(['renforcement musculaire', 'pré-opératoire' ]));
            $course->setCompleted($faker->boolean);
            $course->setCreatedAt(new \DateTimeImmutable());
            $course->setUpdatedAt(new \DateTimeImmutable());

            $user = $this->getReference('user_' . $i);
            $course->setUserId($user); 

            $manager->persist($course);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }

    public static function getGroups(): array
    {
        return ['course'];
    }
}
