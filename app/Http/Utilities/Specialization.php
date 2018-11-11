<?php

namespace App\Utilities;


class Specialization
{
    // list of medical specializations

    protected static $specialization = [
        'Oncology', 'Hematology', 'Rheumatology', 'Obstetrics', 'Cardiology', 'Pulmonology', 'Immunology', 'Hepatology',
    ];

    public static function all() {
        return static::$specialization;
    }

}