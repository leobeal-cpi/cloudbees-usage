<?php

namespace Chargepoint\RoxUsage;

class Cli
{
    const RED = "\033[31m";
    const GREEN = "\033[32m";
    const YELLOW = "\033[33m";
    const RESET = "\033[0m";

    public function printLine($message, $color)
    {
        echo $color;
        echo $message;
        echo self::RESET;
        echo PHP_EOL;
    }
}
