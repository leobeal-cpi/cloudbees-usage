<?php

namespace Chargepoint\RoxUsage;

class App
{
    /** @var Container */
    private $roxContainer;

    /** @var Cli */
    private $cli;

    public function __construct($roxContainer, $cli)
    {
        $this->roxContainer = $roxContainer;
        $this->cli = $cli;
    }

    public function run()
    {
        $startTime = Helper::getTime();

        $isEnabled = $this->roxContainer->thisIsATestFlag->isEnabled();
        $result = $isEnabled ? "TRUE" : "FALSE";
        $color = $isEnabled ? Cli::GREEN : Cli::RED;

        $this->cli->printLine("This is a test flag: " . $result, $color);
        $this->cli->printLine("Time taken: " . Helper::getTimeDifference($startTime), Cli::YELLOW);
    }
}
