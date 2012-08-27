<?php
namespace Odl\ActivityStreamBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class IndexCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('activitystream:solr:index')
            ->setDescription('Index Activity into solor')
            ->addArgument('id', InputArgument::OPTIONAL, 'Id of activity to index?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getContainer();
        $activityManager = $container->get('odl_as.activity_manager');
        $id = $input->getArgument('id');

        $activities = array();
        if ($id) {
            $activity = $activityManager->getRepository()->find($id);

            if (!$activity) {
                throw new \Exception("Activity with id: {$id} is not found");
            }
        } else {
            $activities = $activityManager->getRepository()->findAll();
        }

        $solrActivityManager = $container->get('odl_as.solr.activity_manager');
        foreach ($activities as $activity) {
            $result = $solrActivityManager->addSolrDocument($activity);
            $output->writeln("Indexed: {$activity->getId()}");
        }

        $output->writeln('Indexing Finished!');
    }
}
