<?php

namespace Chargepoint\RoxUsage;

use Rox\Server\Flags\RoxFlag;


class RoxContainer
{
    /** @var RoxFlag */
    public $thisIsATestFlag;

    public function __construct()
    {
        $this->thisIsATestFlag = new RoxFlag(false);
    }
}
