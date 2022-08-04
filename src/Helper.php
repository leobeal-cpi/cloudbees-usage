<?php

namespace Chargepoint\RoxUsage;

class Helper
{
    /**
     * @return int
     */
    public static function getTime()
    {
        return microtime(true);
    }

    public static function getTimeDifference($startTime, $endTime = null)
    {
        if (!$endTime) {
            $endTime = self::getTime();
        }
        return round(($endTime - $startTime) * 1000) . 'ms';
    }
}
