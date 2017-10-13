<?php

namespace AppBundle\Action;

use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Resource;


class DeleteGarbageStart
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    
    public function deleteGarbage()
    {
        $week = 604800; // неделя
        $time=time()-$week;

        $em = $this->container
            ->get('doctrine')
            ->getEntityManager();
        

        $query = $em->createQuery(
            'DELETE AppBundle:Resource resource 
               WHERE resource.createdAt < :time')
            ->setParameter("time", $time);

        $query->execute();
    }
}