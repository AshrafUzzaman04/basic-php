<?php

// math function


$max =  max(1, 2, 3, 4, 6, 8, 66, 8788, 7586);                                     // return 8788
$min = min(1, 2, 7, 4638, 55, 2, 65, 54, 7, 5, 78, 7, 76854, 58, 5, 7, 1, 57);             // return 1
$abs = abs(-222);                                                          // return positive number (222)
$round = round(999.6);                                                     // return 1000
$roundTwo = round(999.4);                                                 // return 999
$floor = floor(999.9);                                                    // return always lower number 999
$ceil = ceil(68.1);                                                       // return always higher number 69


echo "<h1>Max Number:   $max</h1> " . "<h2> MinN uber: $min</h2>";
echo "<h2>abs: $abs</h2>";
echo "<h2>round: $round</h2>";
echo "<h2>round: $roundTwo</h2>";
echo "<h2>floor: $floor</h2>";
echo "<h2>ceil: $ceil</h2>";


echo "<hr>";


// string function

echo strlen("My name is Ashraf Uz Mahim.") . "<br>";                        //   Returns the length of a string
echo str_word_count("My name is Ashraf Uz Mahim.") . "<br>";                // Count the number of words in a string
echo strrev("My name is Ashraf Uz Mahim.") . "<br>";                        //   	Reverses a string
echo substr("My name is Ashraf Uz Mahim.", 11, 27) . "<br>";              //   Returns a part of a string
echo strcoll("My name is Ashraf", "My name is Ashraf Uz Mahim.") . "<br>";              //  Compares two strings 

$a = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
echo uniqid() . rand(100000, 999999) . substr(str_shuffle($a), 0, 6) . "<br>"
    . substr(str_shuffle(date("himdYasfl")), 0, 5) . $_SERVER['REMOTE_ADDR'];   //   random name make
