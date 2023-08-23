<?php

declare(strict_types=1);

namespace Phonyland\DevTools;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capability\CommandProvider;
use Composer\Plugin\Capable;
use Composer\Plugin\PluginInterface;

class SharedScriptsPlugin implements  Capable, PluginInterface
{
    public function getCapabilities(): array
    {
        return [
            CommandProvider::class => CustomCommandProvider::class
        ];
    }

    public function activate(Composer $composer, IOInterface $io): void
    {
        //
    }

    public function deactivate(Composer $composer, IOInterface $io): void
    {
        //
    }

    public function uninstall(Composer $composer, IOInterface $io): void
    {
        //
    }
}
