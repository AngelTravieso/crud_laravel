<?php

namespace App\Utilities;

class SiteHelper
{
    public static function custom_date_format(): string
    {
        $date = new \DateTime();
        $date->setTimezone(new \DateTimeZone('+0800')); //GMT
        return $date->format('Y-m-d H:i:s');
    }
}


?>