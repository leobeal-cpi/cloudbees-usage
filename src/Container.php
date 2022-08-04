<?php

namespace Chargepoint\RoxUsage;

use Rox\Server\Flags\RoxFlag;


class Container
{
    /** @var RoxFlag */
    public $thisIsATestFlag;

    public function __construct()
    {
        $this->thisIsATestFlag = new RoxFlag(false);
    }
}
