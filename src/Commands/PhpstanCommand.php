<?php

declare(strict_types=1);


namespace Phonyland\DevTools\Commands;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PhpstanCommand extends BaseCommand
{
    protected function configure(): void
    {
        $this->setName('phpstan');
        $this->setDescription('Run PHPStan on the project');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $phpstanExecutable = getcwd() . '/vendor/bin/phpstan';
        $configPath = getcwd() . '/vendor/phonyland/dev-tools/phpstan.neon.dist';

        system("$phpstanExecutable analyse --configuration=$configPath");

        return 0;
    }
}
