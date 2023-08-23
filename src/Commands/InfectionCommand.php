<?php

declare(strict_types=1);


namespace Phonyland\DevTools\Commands;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InfectionCommand extends BaseCommand
{
    protected function configure(): void
    {
        $this->setName('infection');
        $this->setAliases(['infect', 'mut']);
        $this->setDescription('Run Infection on the project');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $infectionExecutable = getcwd() . '/vendor/bin/infection';
        $configPath = getcwd() . '/vendor/phonyland/dev-tools/infection.json5';

        system("$infectionExecutable --test-framework=pest --show-mutations --threads=max --min-msi=100 --min-covered-msi=100 --ansi --configuration=$configPath");

        return 0;
    }
}
