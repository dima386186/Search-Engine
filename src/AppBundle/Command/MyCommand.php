<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Action\ActionStart;


class MyCommand extends ContainerAwareCommand {

    public function configure()
    {
        $this
            ->setDefinition(array())
            ->setDescription('Updating search results')
            ->setName('updating:search:results'); //здесь прописываем имя нашей будущей команды
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        //получаем сервис, который будет непосредственно обновлять статусы
        $stateUpdater = $this->getContainer()->get('search_updater');
        $stateUpdater->update();
        
        //записываем событие в лог
        //$logger = $this->getContainer()->get('logger');
        //$logger->info('Fired update system tasks for disciplines');
    }

} 