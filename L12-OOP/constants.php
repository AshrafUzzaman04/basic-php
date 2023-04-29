<?php

class constants
{
    const hellow = "hellow world!";
    const own = "own world!";

    public function own()
    {
        return self::own;
    }
}

echo  "<h2>" . constants::hellow . "</h2>";
$obj = new constants();
echo "<br><h3>" . $obj->own() .  "</h3><br>";
