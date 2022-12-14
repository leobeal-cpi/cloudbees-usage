<?php

use Chargepoint\RoxUsage\RoxContainer;
use Rox\Server\Rox;

require_once __DIR__ . '/vendor/autoload.php';

$roxContainer = new RoxContainer();
Rox::register('', $roxContainer);
Rox::setup(getenv('cloudbees_key'));


$cli = new \Chargepoint\RoxUsage\Cli();

//inject the dependencies
(new \Chargepoint\RoxUsage\App($roxContainer, $cli))->run();

