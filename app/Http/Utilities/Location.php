<?php

namespace App\Utilities;


class Location//#custom
{
    // list of locations (states, governorates, cities...)

    protected static $locations = [
        'location_one', 'location_two', 'location_three', 'location_four', 'location_five', 'location_six'
    ];

    public static function locations() {
        return static::$locations;
    }

}