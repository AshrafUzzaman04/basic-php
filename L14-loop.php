<?php 

//starting point
//ending point
// condition
//work
//increment


// while loop
$namta =15;
$sp = 1;
$ep = 10;
while ($sp <= $ep) {
    echo "$namta x $sp = " . ($namta * $sp) . "<br />";
     $sp++;
}

// for loop

for ($i=1; $i <= 500 ; $i++) {
   if($i % 13 === 0){
    echo $i . ",";
}
}

// 1500 to 2023
echo "<br>";
for ($i=1500; $i <= 2023 ; $i++) { 
    if(0 == $i % 4 && 0 != $i % 100 || 0 == $i % 400){
      echo  $i . ",";
    }
}




?>