<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Action\UpdateCategoriesStart;


class UpdateCategories extends ContainerAwareCommand {

    public function configure()
    {
        $this
            ->setDefinition(array())
            ->setDescription('Updating categories')
            ->setName('updating:categories'); //здесь прописываем имя нашей будущей команды
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        //получаем сервис, который будет непосредственно обновлять статусы
        $stateUpdater = $this->getContainer()->get('categories_updater');
        $stateUpdater->updateCategories();

        //записываем событие в лог
        
        //$logger = $this->getContainer()->get('logger');
        //$logger->info('Fired update system tasks for disciplines');
    }

}