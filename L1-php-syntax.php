<?php

// variable

$varName = "This is PHP";
$var ="hellow";

# function

function myfunct($var , $var2 = "haha" ) {
 return "<h2>$var $var2 </h2>";
}



function myfunctTwo (){
    return  $GLOBALS["var"] ;              // superGlobals variable $GLOBALS
}
/**
 * CALL THE 
 * FUNCTION
 */

echo myfunct(var:$varName, var2: $var );
echo myfunctTwo();

/**
 * this is
 * a 
 * multiline 
 * comment
 */

/**
 * php operators
 * php datatypes
 */

// loops ****
/**
 * while
 * do while
 * for 
 * foreach
 */

// Conditions
/**
 * if-else
 * switch
 */

// array
/**
 * indexed array
 * associative array
 * multi dimotional array 
 */


// some usefull things in php........
/**
 * print_r
 * var_dump
 * echo
 * filter_var
 * preg_match
 * isset
 * empty
 * mysqli_connect("localhost","root","","data_base");
 */

?>