<?php
function message(string $string = null)
{
    return "Hello I am from helper message " . $string;
}

function multi_array_sum(array $arr = null, string $col = null, string $col2 = null)
{
    $arrSum = array_sum(array_column($arr, $col, $col2));
    print "Sum of Array : " . $arrSum . "<br/>";
}

function find_age($dob = null)
{
    //$dateOfBirth = "14-09-1986";
    // $today = date("Y-m-d");
    // $diff = date_diff(date_create($dateOfBirth), date_create($today));
    // echo 'Your age is ' . $diff->format('%y-%m-%d');

    $dob = new DateTime($dob);
    $today   = new DateTime('today');
    $year = $dob->diff($today)->y;
    $month = $dob->diff($today)->m;
    $day = $dob->diff($today)->d;
    echo "<br/>" . PHP_EOL;
    echo "Age is" . " " . $year . "year" . " ", $month . "months" . " " . $day . "days";
    echo "<br/>" . PHP_EOL;
}
