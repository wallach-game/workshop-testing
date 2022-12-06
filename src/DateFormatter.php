<?php declare(strict_types=1);

namespace IW\Workshop;

use DateTime;

class DateFormatter
{
    /**
     * Get current part of the day
     *
     * @return string
     */
    public function getPartOfDay($_dateTime = null) : string
    {
        $dateTime = new DateTime();

        if($_dateTime != null)
        {
            $dateTime = $_dateTime;
        }

        $currentHour = $dateTime->format('G');

        if ($currentHour >= 0 && $currentHour < 6)
        {
            return 'Night';
        }

        if ($currentHour >= 6 && $currentHour < 12)
        {
            return 'Morning';
        }

        if ($currentHour >= 12 && $currentHour < 18)
        {
            return 'Afternoon';
        }

        return 'Evening';
    }
}
