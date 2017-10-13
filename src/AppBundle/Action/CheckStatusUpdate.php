<?php

namespace AppBundle\Action;

use Symfony\Component\DependencyInjection\ContainerInterface;


class CheckStatusUpdate {

    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

    }

    public function updateStatus(){
        session_start();

        $em = $this->container
            ->get('doctrine')
            ->getEntityManager();

        

        $queryRes = $em->createQueryBuilder()
            ->select('r')
            ->from('AppBundle:Resource', 'r')
            ->getQuery();



        $resources = $queryRes->getResult();

        if($resources) {

            $_SESSION['access_token'] = $this->container->getParameter('access_token');
            $_SESSION['access_secret'] = $this->container->getParameter('access_secret');

            $config = new \Upwork\API\Config(
                array(
                    'consumerKey' => $this->container->getParameter('consumer_key'),
                    'consumerSecret' => $this->container->getParameter('consumer_secret'),
                    'accessToken' => $_SESSION['access_token'],
                    'accessSecret' => $_SESSION['access_secret'],
                    //        'verifySsl'         => false,                           // whether to verify SSL
                    'debug' => false,
                    'authType' => 'OAuthPHPLib'
                )
            );

            $client = new \Upwork\API\Client($config);


            if (!empty($_SESSION['access_token']) && !empty($_SESSION['access_secret'])) {
                $client->getServer()
                    ->getInstance()
                    ->addServerToken(
                        $config::get('consumerKey'),
                        'access',
                        $_SESSION['access_token'],
                        $_SESSION['access_secret'],
                        0
                    );
            } else {

                $accessTokenInfo = $client->auth();
            }


            $profile = new \Upwork\API\Routers\Jobs\Profile($client);

            foreach($resources as $result) {
                $data = $profile->getSpecific($result->getJobId());
                if(!empty($data->op_status) && $data->op_status=='Closed') {
                    $em->remove($result);
                    $em->flush();
                }
            }
        }
    }

}