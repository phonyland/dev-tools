<?php

declare(strict_types=1);


namespace Phonyland\DevTools\Commands;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PintCommand extends BaseCommand
{
    protected function configure(): void
    {
        $this->setName('pint');
        $this->setAliases(['lint']);
        $this->setDescription('Run Laravel Pint to lint the codebase');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Define the path to the pint executable and its configuration
        $pintExecutable = getcwd() . '/vendor/bin/pint';
        $configPath = getcwd() . '/vendor/phonyland/dev-tools/pint.json';

        // Run the linting command
        system("$pintExecutable --config=$configPath");

        return 0;
    }
}
