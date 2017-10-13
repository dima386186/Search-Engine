<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Action\CheckStatusUpdate;


class CheckStatusControl extends ContainerAwareCommand {

    public function configure()
    {
        $this
            ->setDefinition(array())
            ->setDescription('Control job status')
            ->setName('control:job-status'); //здесь прописываем имя нашей будущей команды
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        //получаем сервис, который будет непосредственно обновлять статусы
        $stateUpdater = $this->getContainer()->get('control_job_status');
        $stateUpdater->updateStatus();

        //записываем событие в лог
        //$logger = $this->getContainer()->get('logger');
        //$logger->info('Fired update system tasks for disciplines');
    }

}