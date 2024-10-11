<?php

namespace App\DataFixtures;

use App\Entity\File;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class FileFixtures extends Fixture implements FixtureGroupInterface, DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $file = new File();
            $file->setName($faker->word . '.pdf');
            $file->setPath($faker->filePath());
            $file->setType('document');
            $file->setCreatedAt(new \DateTimeImmutable());
            $file->setUpdatedAt(new \DateTimeImmutable());

            $user = $this->getReference('user_' . $i);
            $file->setUserId($user);

            $manager->persist($file);
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
        return ['file'];
    }
}
