<?php

// set my time...
date_default_timezone_set("Asia/Dhaka");

$d = date("d/l/F/M/Y");
$t = date("h:i A");

echo "<h2>Date : $d</h2>";
echo "<br>";
echo "<h2>Time : $t</h2>" . "<br>";



// make my own time;

// hour min sec month day year...
$myGfBirthday = mktime(6, 30, 20, 3, 9, 2023);

$d = date("d/l/F/Y", $myGfBirthday);

echo "<h2>Date : $d</h2>";
echo "<br>";


// strtotime function
$nextMonday  = strtotime("next monday +2 days +2 years +2 month");

echo date("d/F/Y -l", $nextMonday) . "<hr>";

// From the next Friday, all Fridays for 2 months are determined through the loop
$startDate = strtotime("next Friday");
$endDate = strtotime(" +2 month ", $startDate);

// while ($startDate <= $endDate) {
//     echo date("d/F/Y -l",$startDate) . "<br>";
//     $startDate = strtotime("+1 weeks ", $startDate);
// }

for ($i = $startDate; $i <= $endDate; $i++) {
    echo date("d/F/Y -l", $i) . "<br>";
    $i = strtotime(" +7 days ", $i);
}


echo "<hr>";
// my birthday function make
// hour, minute, second, month, day, year
$myBirthday = mktime(6, 1, 20, 8, 4, 2004);
echo date("d/F/Y -l", $myBirthday) . "<br>" . "<hr>";


$endDate = strtotime("+20 years", $myBirthday);
echo "<h2 style='color: blue'>20 year week selection in my birthday</h2>";
while ($myBirthday <= $endDate) {
    echo date("d/F/Y -l", $myBirthday) . "<br>";
    $myBirthday = strtotime("+1 year", $myBirthday);
}



// set the timezone to your desired timezone
// date_default_timezone_set('aisa/dhaka');

// set the birth date
$birth_date = '2004-08-04';

// calculate the age based on the birth date
$age = date_diff(date_create($birth_date), date_create('today'))->y;

// display the age
echo "You are " . $age . " years old.";
