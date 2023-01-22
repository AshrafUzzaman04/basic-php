<?php

// php basic form validation system.........

if (isset($_POST['done'])){
    
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $e = $_POST['email'];
   
    
    if(empty($fname)){
     $errorFName = "<span style='color:red'>please enter your first name</span>";
    } elseif(!preg_match("/^[a-zA-Z. ]*$/", $fname)){
        $errorFName = "<span style='color:red'>invalid first name</span>";
    }
    
    if (empty($lname)) {
    $errorlName = "<span style='color:red'>please enter your last name</span>";
    } elseif(!preg_match("/^[a-zA-Z. ]*$/", $lname)){
        $errorlName = "<span style='color:red'>invalid last name</span>";
    }
    
    if (empty($e)) {
    $errorEmail  = "<span style='color:red'>please enter your valid email</span>";
    } elseif(!filter_var($e, FILTER_VALIDATE_EMAIL)){
        $errorEmail  = "<span style='color:red'>invalid email</span>";
    }
}

?>

<form action="" method="post">

    <input type="text" name="firstName" placeholder="First Name" value="<?= $fname ?? null ?>">
    <?= $errorFName ?? null; ?>
    <br><br>
    <input type=" text" name="lastName" placeholder="Last Name" value="<?= $lname ?? null ?>">
    <?= $errorlName ?? null; ?>
    <br><br>
    <input type="email" name="email" placeholder="Email" value="<?= $e ?? null ?>">
    <?= $errorEmail ?? null; ?>
    <br><br>
    <input type="submit" name="done" value="Submit">

</form>