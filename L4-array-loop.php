<?php

// indexed array
$cities = array("Dhaka", "Khulna", "barishal", "Rangpur");
$country = ["bangladesh", "India", "pakisthan", "Bhutan", "Japan"];
$yousuf = ["Md. Yousuf Ali", "unmarried", 45, 58];

echo "<pre>";
print_r($cities);
echo "</pre>";

array_push($yousuf, "dushtu lok");                            // push array in last index
array_pop($yousuf);                                           // Rremove array value in last index
array_unshift($yousuf, "hellow", "hi");                       // add in array [0] index
array_shift($yousuf);                                         // remove in array [0] index
array_search("unmarried", $yousuf);                            // find the array indexed number
print_r($yousuf);

echo "<hr>";
echo "<h1>Loop the array data</h1>";
// for loop ***********************
for ($i = 0; $i < count($yousuf); $i++) {
    echo $yousuf[$i] . "<br>";
}

echo "<hr>";

echo implode("<br>", $country) . "<br>";

echo "<br>" . $country[2] . "<br>";                             // call the array operator
echo count($country);                                           // count

// Count the array recursively:
$cars = array("Volvo" => array("XC60", "XC90"), "BMW" => array("X3", "X5"), "Toyota" => array("Highlander"));
echo "Normal count: " . count($cars) . "<br>";
echo "Recursive count: " . count($cars, 1);

echo "<br>";
echo "<br>";

// loop this indexed array......
for ($i = 0; $i < count($cities); $i++) {
    echo $cities[$i] . "<br>";
}

foreach ($country as $myCountry) {
    echo "<br>" . $myCountry;
}


// associative array                                              // (=>) array oparator
echo "<hr>";
$me = ["name" => "Ashraf", "country" => "bangladesh", "skills" => "font-end-web developer"];

echo "<pre>";
print_r($me);
echo "</pre>";

echo $me["skills"];                                               // call the array operator

echo "<br>";
echo "<br> <hr><hr>";

// loop the associative array
foreach ($me as $key => $value) {
    echo "<br>" . strtoupper($key) . " : " . ucfirst($value);
}

// Multidimensional array  
echo "<hr>";
$bigArray = [

    ["name" => "ashraf", "skills" => "developer", "country" => "bangladesh"],
    ["name" => "tanha", "skills" => "ashraf lover", "country" => "dhaka,bangladesh"],
    ["name" => "jannat", "skills" => "student", "country" => "barishal"]

];

echo "<pre>";
print_r($bigArray);
echo "</pre>";

echo ($bigArray[1]["name"]);                                        // call the array operator

echo "<br>";

// loop for multidimensional array
foreach ($bigArray as $shortArray) {
    foreach ($shortArray as $key => $value) {
        echo "<br>"  .  strtoupper($key) . " : " . ucfirst($value);
    }
    echo "<br>";
}

echo "<hr>";
echo "<hr>";

for ($e = 0; $e < count($bigArray); $e++) {
    foreach ($bigArray[$e] as $key => $yo) {
        echo $key . ":" . $yo . "<br>";
    }
    echo "<br>";
}
