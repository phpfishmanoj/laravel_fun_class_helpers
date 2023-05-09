<?php

namespace App\helpers;

class CustomClassHelper
{
    public static function get_my_age(string $date = null)
    {
        //$dateOfBirth = "14-09-1986";
        // $today = date("Y-m-d");
        // $diff = date_diff(date_create($dateOfBirth), date_create($today));
        // echo 'Your age is ' . $diff->format('%y-%m-%d');

        $dob = new \DateTime($date);
        $today   = new \DateTime('today');
        $year = $dob->diff($today)->y;
        $month = $dob->diff($today)->m;
        $day = $dob->diff($today)->d;
        echo "<br/>" . PHP_EOL;
        echo "Age is" . " " . $year . "year" . " ", $month . "months" . " " . $day . "days";
        echo "<br/>" . PHP_EOL;
    }
}
