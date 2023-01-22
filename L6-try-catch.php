 <?php

// Exception basic use (Try, throw and catch)
function countNumber($number)
{
    if ($number < 10) {
        throw new Exception("নম্বরটি ১০ এর চাইতে ছোট।");
    }
    // else {
    //     throw new Exception("নম্বরটি ১০ এর চাইতে বড়।");  
    // }
    return true;
}

try{
        countNumber(11); 
        echo "<b>Message : </b>" . "নম্বরটি ১০ এর চাইতে বড়।";

}
catch(Exception $e)  // <- means -> $e = new Exception;
{
        echo "<b>Message : </b>" . $e->getMessage() ;
}



// Creating a Custom Exception Class

class customException extends Exception
{
  public function errorMessage() {
    //error message
    $errorMsg = '<br> Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}

$email = "someone@......";

try {
  //check if
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //throw exception if email is not valid
    throw new customException($email);
  }
}

catch (customException $e) {
  //display custom message
  echo $e->errorMessage();
}




// Multiple Exceptions


class custom extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = '<br> Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}

$email = "someone@example.com";

try {
  //check if
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throw exception if email is not valid
    throw new custom ($email);
  }
  //check for "example" in mail address
  if(strpos($email, "example") !== FALSE ) {
    throw new Exception("$email is an example e-mail");
  }
}

catch (custom $e) {
  echo $e->errorMessage();
}

catch(Exception $e) {
  echo $e->getMessage();
}

?>