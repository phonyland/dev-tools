<?php

declare(strict_types=1);

namespace Phonyland\DevTools;

use Composer\Plugin\Capability\CommandProvider;

class CustomCommandProvider implements CommandProvider
{
    public function getCommands(): array
    {
        return [new LintCommand()];
    }
}
