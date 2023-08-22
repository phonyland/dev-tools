<?php

declare(strict_types=1);

namespace Phonyland\DevTools;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capability\CommandProvider;
use Composer\Plugin\Capable;
use Composer\Plugin\PluginInterface;

class SharedScriptsPlugin implements  Capable
{

    public function getCapabilities()
    {
        return [
            CommandProvider::class => CustomCommandProvider::class
        ];
    }
}
