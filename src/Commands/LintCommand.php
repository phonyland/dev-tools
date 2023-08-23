<?php

declare(strict_types=1);


namespace Phonyland\DevTools\Commands;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LintCommand extends BaseCommand
{
    protected function configure(): void
    {
        $this->setName('lint2');
        $this->setAliases(['lint3, lint4']);
        $this->setDescription('Run linting using shared logic.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Define the path to the pint executable and its configuration
        $pintExecutable = getcwd() . '/vendor/bin/pint';
        $configPath = getcwd() . '/vendor/phonyland/dev-tools/src/pint.json';

        // Run the linting command
        system("script -q -e -c $pintExecutable --config=$configPath /dev/null");


        return 0; // Return 0 for success
    }
}
