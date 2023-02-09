<?php 

function dipti ($peramiter){
    return "$peramiter";
}

function hellow ($firstName = "hellow", $lastName = "world"){
    return "$firstName" . " " . "$lastName.";
}
echo dipti ("My name is ");
echo dipti ("Ashraf Uzzaman") . ".";
echo "<br>" . hellow ();
echo "<br>" . hellow("Ashraf's");
echo "<br>" . hellow(lastName:"Ashraf", firstName:"Hi");


// concatanation
function mult ($num1, $num2){
    if(is_int($num1) && is_int($num2)){
        return "$num1 + $num2";
    }else{
        return  "<h1>Please enter a number!</h1>"; 
    }
}

echo "<br>" . mult("5",6);

/**
 * must be devided by 400
 * must not be devided by 100
 * must be devided by 4
 */


// leap year
   function year_check($my_year){
      if ($my_year % 400 === 0)
         print("$my_year is a leap year.");
      else if ($my_year % 100 === 0)
         print("$my_year is not a leap year.");
      else if ($my_year % 4 === 0)
         print("$my_year is a leap year.");
      else
         print("$my_year is not a leap year.");
   }
   $year = 1900;
   $year2 = 2001;
   year_check($year);
   echo "<br>";
   echo year_check($year2) . "<br>";


//    switch case
$age = 18;
$default = "I'm a ";

switch ($age) {
    case 18:
        echo "<h1>$default teenager</h1>";
        break;
    
    default:
        echo "nothing to say";
        break;
} 


?>