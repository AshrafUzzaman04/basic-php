<?php
include_once("./header.php");


$gndr = ["Male", "Female", "Others"];
$cty =   ["Dhaka", "Rajsahi", "Khulna", "Barishal", "Shylet", "Cumilla", "Bagura", "Joypurhat", "Cox's Bazar", "Lalmonirhat", "Lalbag", "Narayanganj"];


function sefuda($data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return  $data;
}


if (isset($_POST['sub123'])) {
    $name = sefuda($_POST['name']);
    $email = sefuda($_POST['email']);
    $password = sefuda($_POST['password']);
    $gender = sefuda($_POST['gender'] ?? null);
    $city = sefuda($_POST['city'] ?? null);
    $date_of_birth = sefuda($_POST['date_of_birth']);

    // user name 
    if (empty($name)) {
        $errorName = "<span class='text-danger'>Enter your name!</span>";
    }
    // elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
    //     $errorName = "<span class='text-danger'>Invalid Username!</span>";
    // } 
    else {
        $correctName = $connet->real_escape_string($name);
    }

    // email
    if (empty($email)) {
        $errorEmail = "<span class='text-danger'>Enter your email address!</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorEmail = "<span class='text-danger'>Invalid email address!</span>";
    } else {
        $search_existing_email = $connet->query("SELECT * FROM `user_data` WHERE `email` = '$email'");
        if ($search_existing_email->num_rows > 0) {
            $errorEmail = "<span class='text-danger'>Email address already exist!</span>";
        } else {
            $correctEmail = mysqli_real_escape_string($connet, $email);
        }
    }

    // password
    if (empty($password)) {
        $errorPassword = "<span class='text-danger'>Enter email password!</span>";
    } elseif (!preg_match('/^(?=.*\d)(?=.*[a-z]).{8,}$/', $password)) {
        $errorPassword = "<span class='text-danger'>Enter a strong password!</span>";
    } else {
        $correctPassword = mysqli_real_escape_string($connet, $password);
    }

    // gender 
    if (empty($gender)) {
        $errorGender = "<span class='text-danger'>Checked your gender please!</span>";
    } elseif (!in_array($gender, $gndr)) {
        $errorGender = "<span class='text-danger'>Changing data from inspect is completely illegal!</span>";
    } elseif (($gender !== 'Male') && ($gender !== 'Female') && ($gender !== 'Others')) {
        $errorGender = "<span class='text-danger'>Changing data from inspect is completely illegal!</span>";
    } else {
        $correctGender = mysqli_real_escape_string($connet, $gender);
    }

    // city
    if (empty($city)) {
        $errorCity = "<span class='text-danger'>Select your town!</span>";
    } elseif (!in_array($city, $cty)) {
        $errorCity = "<span class='text-danger'>Changing data from inspect is completely illegal!</span>";
    } else {
        $correctCity = mysqli_real_escape_string($connet, $city);
    }

    // date_of_birth
    if (empty($date_of_birth)) {
        $errordate_of_birth = "<span class='text-danger'>Enter your birthday!</span>";
    } else {
        $correctdate_of_birth = mysqli_real_escape_string($connet, $date_of_birth);
    }


    if (!empty($correctName) && !empty($correctEmail)  && !empty($correctPassword) && !empty($correctGender) && !empty($correctCity) && !empty($correctdate_of_birth)) {
        $insert_query = "INSERT INTO `user_data`( `name`, `email`, `password`, `gender`,`city`,`date_of_birth`) VALUES ('$correctName','$correctEmail','$correctPassword' ,'$correctGender','$correctCity','$correctdate_of_birth')";
        $insert = $connet->query($insert_query);

        $correctName = $correctEmail = $correctPassword =  $correctGender = $correctCity = $correctdate_of_birth = null;

        if ($insert) {
            echo "<script>alert('Register Succsessully.');location.href='./read.php?'</script>";
        } else {
            echo
            "<script>alert('Register Succsessully.'); 
            location.href='</script>";
            ($_SERVER['PHP_SELF']);
            "<script>'</script>";
        }
    }
}
?>

<div class="container">
    <div class="row min-vh-100">
        <div class="col-11 col-md-5 col-lg-4 m-auto border shadow rounded px-2 px-md-4 pt-2">
            <div class="mb-3">
                <h2 class="text-center text-primary">Register</h2>
            </div>

            <form method="POST">

                <!-- name -->
                <div class="mb-3">
                    <input type="text" name="name" placeholder="User Name" class="form-control <?= isset($errorName) ? "is-invalid" : null ?> <?= isset($correctName) ? "is-valid" : null ?>" value="<?= $correctName ?? null ?>">
                    <?= $errorName ?? null ?>
                </div>


                <!-- email -->
                <div class="mb-3">
                    <input type="text" name="email" placeholder="Email*" class="form-control <?= isset($errorEmail) ? "is-invalid" : null ?> <?= isset($correctEmail) ? "is-valid" : null ?>" value="<?= $correctEmail ?? null ?>">
                    <?= $errorEmail ?? null ?>
                </div>

                <!-- password -->
                <div class="mb-3">
                    <input type="password" name="password" placeholder="Password*" class="form-control <?= isset($errorPassword) ? "is-invalid" : null ?> <?= isset($correctPassword) ? "is-valid" : null ?>" value="<?= $correctPassword ?? null ?>">
                    <?= $errorPassword ?? null ?>
                </div>

                <!-- gender -->
                <div class="mb-3">
                    <table>
                        <tr>
                            <td><span>Gender : &nbsp</span></td>
                            <td><input type="radio" name="gender" id="male" value="Male" <?= (isset($correctGender) && $gender == "Male") ? "checked" : null ?>>
                                <label for="male">Male</label>
                                <input type="radio" name="gender" id="female" value="Female" <?= (isset($correctGender) && $gender == "Female") ? "checked" : null ?>>
                                <label for="female">Female</label>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="radio" name="gender" id="Others" value="Others" <?= (isset($correctGender) && $gender == "Others") ? "checked" : null ?>>
                                <label for="Others">Others</label>
                            </td>
                        </tr>
                    </table>
                    <?= $errorGender ?? null ?>
                </div>

                <!-- city -->
                <div class="row">
                    <div class="mb-3 col-8 col-xl-5">
                        <span>Your Town :</span>
                        <select name="city" class="form-select <?= (isset($errorCity)) ? "is-invalid" : null ?>
                        <?= (isset($correctCity)) ? "is-valid" : null ?>">
                            <option value="<?= $correctCity ?? null ?>"><?= $correctCity ?? "-- Select Area --" ?>
                            </option>
                            <option value="Dhaka">Dhaka
                            </option>
                            <option value="Rajsahi">Rajsahi</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Shylet">Shylet</option>
                            <option value="Cumilla">Cumilla</option>
                            <option value="Bagura">Bagura</option>
                            <option value="Joypurhat">Joypurhat</option>
                            <option value="Cox's Bazar">Cox's Bazar</option>
                            <option value="Lalmonirhat">Lalmonirhat</option>
                            <option value="Lalbag">Lalbag</option>
                            <option value="Narayanganj">Narayanganj</option>
                        </select>
                        <?= $errorCity ?? null ?>
                    </div>

                    <!-- birthday -->
                    <div class="mb-3 col-8 col-xl-6">
                        <label for="birthday">Birthday :</label>
                        <input type="date" id="birthday" name="date_of_birth" class="form-control <?= isset($errordate_of_birth) ? "is-invalid" : null ?><?= isset($correctdate_of_birth) ? "is-valid" : null ?>" value="<?= $correctdate_of_birth ?? null ?>">
                        <?= $errordate_of_birth ?? null ?>
                    </div>
                </div>

                <!-- button -->
                <div class="mb-4 mt-2 shadow-sm">
                    <input type="submit" name="sub123" class="btn btn-primary col-12" value="Register">
                </div>

            </form>
        </div>
    </div>
</div>



<?php
include_once("./footer.php");
?>