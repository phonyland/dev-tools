<?php

declare(strict_types=1);

namespace Phonyland\DevTools;

use Composer\Plugin\Capability\CommandProvider;
use Composer\Plugin\Capable;

class SharedScriptsPlugin implements  Capable
{
    public function getCapabilities(): array
    {
        return [
            CommandProvider::class => CustomCommandProvider::class
        ];
    }
}
