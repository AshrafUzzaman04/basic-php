<?php


// namespace use import cases
namespace Dhaka;

class amarbari
{
    public function own(): void
    {
        echo "Dhaka";
    }
}

namespace Nawabganj;

class amarbari
{
    public function own(): void
    {
        echo "Nawabganj";
    }
}

$obj = new amarbari;
echo $obj->own();

class constants
{
    const hellow = "hellow world!";
    const own = "own world!";

    public function own()
    {
        return self::own; //(::) php scope resolution operator
    }
}

echo  "<h2>" . constants::hellow . "</h2>";
$obj = new constants();
echo "<br><h3>" . $obj->own() .  "</h3><br>";


// use constants in php class
class test
{
    protected const test = "hellow world!";
    public function own(): void
    {
        echo self::test;
    }

    // static methods
    public static function ownTwo(): void
    {
        echo self::test;
    }
}

$obj = new test;
echo $obj->own() . "<br>";
echo test::ownTwo(); // (::) php scope resolution operator
