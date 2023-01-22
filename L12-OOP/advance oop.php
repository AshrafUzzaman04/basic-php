<?php

class helloWorld {
    public function __construct($text)
    {
        echo "$text <br>";
    }
}

$objHW=  new helloWorld("Hellow India");
$objHW=  new helloWorld("Hellow India");
$objHW=  new helloWorld("Hellow China");
$objHW=  new helloWorld("Hellow Japan");
$objHW=  new helloWorld("Hellow Singapur");
$objHW=  new helloWorld("Hellow Soudi Arab");
$objHW=  new helloWorld("Hellow Brazil");



//  <<<<<<<<<<<<<<<<<<<< (::) scope resolution operator in php >>>>>>>>>>>>>>>>>>>>>>>>

trait TraitName {
    protected static string $Uname;
    protected static int $uage;
    protected static string $uoccupation;
    protected static string $ugender;
    protected static string $uDesigner;
}

class name {
    use TraitName;
    protected const Maletitle = "Md";
    protected const Femaletitle = "Ms";
    protected function __construct()
    {                                                                  
        return "hi";
    }
}

class ashraf extends name {
   public static function name(string $Name , int $age , string $occupation, string $gender , bool $designer): string{
        $titleName = ($gender === "Female" || $gender == "female" || $gender == "Lady")? name::Femaletitle : name::Maletitle;
        name::$Uname = $Name;
        name::$uage = $age;
        name::$uoccupation = $occupation;
        name::$ugender = $gender;
        name::$uDesigner = $designer;
        $massage = ($occupation)? "I am a " : null ;
        $hi = (name::$uDesigner)? "Yes" :  "No";
        return "<br>" . "Name : " . $titleName. " " .name::$Uname . "<br>" . "Age : " . name::$uage . "<br>" . "Occupation : " . $massage . name::$uoccupation . "<br>" . "Gender : " . name::$ugender . "<br>" . "Web Designer : " . $hi;

    }
}

echo ashraf::name("Ashraf Uz Mahim",18,"Teacher","Lady", true);