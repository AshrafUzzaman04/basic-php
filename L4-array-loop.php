<?php

// indexed array
$cities = array("Dhaka","Khulna","barishal","Rangpur");
$country =["bangladesh","India", "pakisthan","Bhutan","Japan"];

echo "<pre>";
print_r($cities);
echo "</pre>";

echo implode("<br>" , $country) . "<br>";

echo "<br>" . $country[2] . "<br>";                             // call the array operator
echo count($country);                                           // count

// Count the array recursively:
$cars= array( "Volvo"=>array("XC60","XC90"),"BMW"=>array("X3","X5"),"Toyota"=>array("Highlander") ); 
echo "Normal count: " . count($cars)."<br>";
echo "Recursive count: " . count($cars,1);

echo "<br>";
echo "<br>";

// loop this indexed array......
for ($i=0; $i < count($cities) ; $i++) { 
    echo $cities[$i] . "<br>";
}

foreach ($country as $myCountry) {
    echo "<br>" . $myCountry;
}


// associative array                                              // (=>) array oparator
echo "<hr>";
$me = ["name" => "Ashraf" , "country" =>"bangladesh" , "skills" => "font-end-web developer"];
 
echo "<pre>";
print_r($me);
echo "</pre>";

echo $me["skills"];                                               // call the array operator

echo "<br>";
echo "<br>";

// loop the associative array
foreach ($me as $key => $value){
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

?>