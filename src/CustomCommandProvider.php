<?php

declare(strict_types=1);

namespace Phonyland\DevTools;

use Composer\Plugin\Capability\CommandProvider;
use Phonyland\DevTools\Commands\InfectionCommand;
use Phonyland\DevTools\Commands\PestCommand;
use Phonyland\DevTools\Commands\PestCoverageCommand;
use Phonyland\DevTools\Commands\PestCoverageParallelCommand;
use Phonyland\DevTools\Commands\PestParallelCommand;
use Phonyland\DevTools\Commands\PestProfileCommand;
use Phonyland\DevTools\Commands\PestTypeCommand;
use Phonyland\DevTools\Commands\PhpstanCommand;
use Phonyland\DevTools\Commands\PintCommand;

class CustomCommandProvider implements CommandProvider
{
    public function getCommands(): array
    {
        return [
            new PintCommand(),

            new PestCommand(),
            new PestParallelCommand(),
            new PestCoverageCommand(),
            new PestCoverageParallelCommand(),
            new PestTypeCommand(),
            new PestProfileCommand(),

            new PhpstanCommand(),
            new InfectionCommand(),
        ];
    }
}
