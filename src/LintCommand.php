<?php

declare(strict_types=1);


namespace Phonyland\DevTools;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LintCommand extends BaseCommand
{
    protected function configure()
    {
        $this->setName('lint2');
        $this->setDescription('Run linting using shared logic.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Your linting logic here
        system("@pint");

        return 0; // Return 0 for success
    }
}
