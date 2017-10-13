<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Symfony\Component\DependencyInjection\ContainerInterface;

// заносит нового usera в БД ( doctrine:fixtures:load; doctrine:schema:update --force)
class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    private $container;


    public function load(ObjectManager $manager)
    {
        $user = new User;

        $user->setName('admin');
        $user->setEmail('admin@admin.com');

        // хеширование пароля
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, 'admin');
        $user->setPassword($password);

        // отправка в БД
        $manager->persist($user);
        $manager->flush();
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container=$container;
    }

}