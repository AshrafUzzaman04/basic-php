<?php

class userData 
{
  public string $userName = "Ashraf Uz Mahim";
  public string $userEmail = "ashraf.uzzaman04082004@gmail.com";
  
  protected string $userName2 = "Tanha";
  protected string $userEmail2 = "tanha09@gmail.com";

  public int $userPhone;
  public string $userFather;
  
  public function userFunct(): string 
  {
         return "<hr> $this->userName2 <br> $this->userEmail2";
  }

//   public function __construct()
//   {
//     echo "<br><span>This is a text from constructive function.</span> <br>";
//   }
//   public function __destruct()
//   {
//     echo "<br><span>This is a text from destructive function.</span> <br>";
//   }
}


class constructDestruct 
{
    
// construct and destruct function
   public function __construct()
   {
    echo "<br><span>This is a text from constructive function.</span> <br>";
   }
   public function __destruct()
  {
    echo "<br><span>This is a text from destructive function.</span> <br>";
  }
  
}

class userChildData extends userData
{
    public $userChild = "Nishan";

    public function userChildFunt(int $phone,string $father):string
    {
        $this->userPhone =  $phone;                   // (->) object operator >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        $this->userFather = $father;
        return "<hr>$this->userEmail2 <br> $this->userPhone <br> $this->userFather <br>";
    }
}


$userObj =  new userData;                              // convert class to object
$userChildData_obj = new userChildData;
$haha = new constructDestruct;                         // __construct & __destruct function

echo "$userObj->userName <br> $userObj->userEmail";    // convert to string

echo "<br> $userChildData_obj->userChild";             // call the inheritance class
echo  $userObj->userFunct();                           // call the function
echo "<br>" . $userChildData_obj->userChildFunt("01749931891","Anwarul Karim");  // call the inheritance class function 