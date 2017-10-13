<?php
/**
 * Created by PhpStorm.
 * User: innate
 * Date: 13.10.17
 * Time: 16:49
 */

namespace AppBundle\Command;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class CreateUser    extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('add:user')
            ->setHelp('KSDfsdlfsd')
            ->setDescription('use this command to add new user')
            ->addArgument('user',InputArgument::REQUIRED, 'User Name');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var EntityManagerInterface $em */
        $em = $this->getContainer()->get('doctrine')->getEntityManager();

    }
}