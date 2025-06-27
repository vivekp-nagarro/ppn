<?php

declare(strict_types=1);

namespace Ppn\CustomModule\Console\Command;

use Magento\Framework\Exception\LocalizedException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class DataValidateCommand extends Command
{
    private const ENTITY_NAME = 'entity';

    protected function configure(): void
    {
        $this->setName('ppn:custom:datavalidate');
        $this->setDescription(' Data Validate Command.');
        $this->addOption(
            self::ENTITY_NAME,
            null,
            InputOption::VALUE_REQUIRED,
            'Entity'
        );

        parent::configure();
    }

    /**
     * Execute the command
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int
     */
     protected function execute(InputInterface $input, OutputInterface $output): int
     {
        $exitCode = 0;

        if ($entity = $input->getOption(self::ENTITY_NAME)) {
            $output->writeln('<info>Provided entity is `' . $entity . '`</info>');
        }

        $output->writeln('<info>Process</info>');

        return $exitCode;
     }
}
