<?php

// math function


$max =  max(1, 2, 3, 4, 6, 8, 66, 8788, 7586);                                     // return 8788
$min = min(1, 2, 7, 4638, 55, 2, 65, 54, 7, 5, 78, 7, 76854, 58, 5, 7, 1, 57);             // return 1
$abs = abs(-222);                                                          // return positive number (222)
$round = round(999.6);                                                     // return 1000
$roundTwo = round(999.4);                                                 // return 999
$floor = floor(999.9);                                                    // return always lower number 999
$ceil = ceil(68.1);                                                       // return always higher number 69


# Math Functions
$acos = acos(5);    // Returns the arc cosine of a number
$acosh(25);    // Returns the inverse hyperbolic cosine of a number
$asin = asin(25);    // Returns the arc sine of a number
$asinh = asinh(25);    // Returns the inverse hyperbolic sine of a number
$atan = atan(25);    // Returns the arc tangent of a number in radians
$atan2 = atan2(25);    // Returns the arc tangent of two variables x and y
$atanh = atanh(25);    // Returns the inverse hyperbolic tangent of a number
$base_convert = base_convert(25);    // Converts a number from one number base to another
$bindec = bindec(25);    // Converts a binary number to a decimal number
$ceil = ceil(25);    // Rounds a number up to the nearest integer
$cos = cos(25);    // Returns the cosine of a number
$cosh = cosh(25);    // Returns the hyperbolic cosine of a number
$decbin = decbin(25);    // Converts a decimal number to a binary number
$dechex = dechex(25);    // Converts a decimal number to a hexadecimal number
$decoct = decoct(25);    // Converts a decimal number to an octal number
$deg2rad = deg2rad(25);    // Converts a degree value to a radian value
$exp = exp(25);    // Calculates the exponent of e
$expm1 = expm1(25);    // Returns exp(x) - 1
$floor = floor(25);    // Rounds a number down to the nearest integer
$fmod = fmod(25);    // Returns the remainder of x/y
$getrandmax = getrandmax(25);    // Returns the largest possible value returned by rand(25)
$hexdec = hexdec(25);    // Converts a hexadecimal number to a decimal number
$hypot = hypot(25);    // Calculates the hypotenuse of a right-angle triangle
$intdiv = intdiv(25);    // Performs integer division
$is_finite = is_finite(25);    // Checks whether a value is finite or not
$is_infinite = is_infinite(25);    // Checks whether a value is infinite or not
$is_nan = is_nan(25);    // Checks whether a value is 'not-a-number'
$lcg_value = lcg_value(25);    // Returns a pseudo random number in a range between 0 and 1
$log = log(25);    // Returns the natural logarithm of a number
$log10 = log10(25);    // Returns the base-10 logarithm of a number
$log1p = log1p(25);    // Returns log(1+number)
$max = max(25);    // Returns the highest value in an array, or the highest value of several specified values
$min = min(25);    // Returns the lowest value in an array, or the lowest value of several specified values
$mt_getrandmax = mt_getrandmax(25);    // Returns the largest possible value returned by mt_rand(25)
$mt_rand = mt_rand(25);    // Generates a random integer using Mersenne Twister algorithm
$mt_srand = mt_srand(25);    // Seeds the Mersenne Twister random number generator
$octdec = octdec(25);    // Converts an octal number to a decimal number
$pi = pi(25);    // Returns the value of PI
$pow = pow(25);    // Returns x raised to the power of y
$rad2deg = rad2deg(25);    // Converts a radian value to a degree value
$rand = rand(25);    // Generates a random integer
$round = round(25);    // Rounds a floating-point number
$sin = sin(25);    // Returns the sine of a number
$sinh = sinh(25);    // Returns the hyperbolic sine of a number
$sqrt = sqrt(25);    // Returns the square root of a number
$srand = srand(25);    // Seeds the random number generator
$tan = tan(25);    // Returns the tangent of a number
$tanh = tanh(25);    // Returns the hyperbolic tangent of a number


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
