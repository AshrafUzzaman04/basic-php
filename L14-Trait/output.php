<?php

require_once("./trait.php");

class output
{
    use msg;
}

$output = new output;
echo "<br>";
echo $output->me();
echo "<br>";
