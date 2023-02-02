<?php

// string 
$var = "this is variable";
var_dump($var);

echo "<br>";

// integer
$var = 123;
var_dump($var);

echo "<br>";

// float
$var = 123.242;
var_dump($var);

echo "<br>";

// boolean
$var = true;
var_dump($var);

echo "<br>";

// array
$var =["ami" , "amay" , "valobasi" , 123, true , 100.5];
var_dump($var);


echo "<br>";

// object
class myname
{
  public $ashraf = "My name is Ashraf";
  public $mahim = "my name is mahim";
}

$var = new myname;
echo $var->ashraf;
echo "<br><br>";
var_dump($var);

echo "<br>";

// null
$var = null;
var_dump($var);

// constant in php 
define("myName" , "Ashraf Uz Mahim");
echo "<br>". myName . "<br>";

// প্যাচ ***********************************************
$a = "abul";
$abul = "male";
$male ="bad";
$bad = "ignore";

echo $a . "<br>";
echo $$a . "<br>";
echo $$$a . "<br>";
echo $$$$a . "<br>" . "<hr>";


// related variables
$ashraf = "He loves Tanha";
$ashraf = &$Tanha ; // use of (&$) that means related
$Tanha = "She loves Ashraf";

echo $Tanha;