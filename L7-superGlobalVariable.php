<?php

// $GLOBALS
$ashraf = "I love Tanha";

function  ashraf() {
    return $GLOBALS["ashraf"];
}

echo ashraf();


// server 
echo "<br>" . $_SERVER['PHP_SELF'];
echo "<br>" . $_SERVER['SERVER_NAME'];
echo "<br>" . $_SERVER['HTTP_HOST'];
echo "<br>" . $_SERVER['HTTP_REFERER'];
echo "<br>" . $_SERVER['HTTP_USER_AGENT'];
echo "<br>" . $_SERVER['SCRIPT_NAME'];  

// Request method
echo "<br>" . $_SERVER['REQUEST_METHOD'];  // Get

// show the file name using basename.
echo "<br>" . basename($_SERVER['PHP_SELF']);



// file extension name
echo "<br>" . pathinfo($_SERVER['PHP_SELF'])["extension"];
echo "<br>" . pathinfo(basename($_SERVER['PHP_SELF']))["extension"];

// echo "<pre>";
// print_r($_SERVER); >>>>>>>>>>>>> print the all array $_SERVER 
// echo "</pre>";


// post method
echo "<hr>";

$name = $_GET['name'] ?? null;
$roll = $_GET['roll'] ?? null;


echo "</b>Name : ". $name . "<br>Roll : " . $roll ;