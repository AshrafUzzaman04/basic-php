<?php


// Start the session

session_start();

echo $_SESSION['name'] = "Ashraf Uz Mahim";
echo "<br>" . $_SESSION['homeTown'] = "Dhaka, Bangladesh";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";