<?php

declare(strict_types=1);


namespace Phonyland\DevTools\Commands;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PestCoverageParallelCommand extends BaseCommand
{
    protected function configure(): void
    {
        $this->setName('coveragep');
        $this->setDescription('Run Pest to unit test the codebase and generate a coverage report');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $pestExecutable = getcwd() . '/vendor/bin/pest';
        $configPath = getcwd() . '/vendor/phonyland/dev-tools/phpunit.xml.dist';

        system("$pestExecutable --coverage --parallel --colors=always --order-by=random --configuration=$configPath");

        return 0;
    }
}
