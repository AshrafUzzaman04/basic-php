<?php 

if(isset($_POST['submit123'])){
    $year = $_POST['year'];

    define('YEAR_GREGORIAN_CALENDAR_INTRODUCED', 1582);
    // leap year condition
    if(empty($year)){
        $lp_empty = "Enter any year to get the result!";
    }
    elseif($year < YEAR_GREGORIAN_CALENDAR_INTRODUCED){
         $lp_Gregorian = "<span>Year must be greater than 1582 - the first year of Gregorian calendar.</span>";
    }elseif($year % 400 === 0){
            $lp_year = "<span>It is a leap year.</span>";
        }elseif($year % 100 === 0){
            $lp_not = "<span>$year is normal year.</span>";
        }elseif($year % 4 === 0){
            $lp_year = "<span>It is a leap year.</span>";
        }else{
            $lp_not = "<span>$year is normal year.</span>";
        }
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap year Calculator - Ashraf Uzzaman</title>
    <link rel="icon" type=""
        href="https://valentine-d3v.github.io/Interactive-Rating-Component-/images/icon-star-2.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <main>
            <img src="https://valentine-d3v.github.io/Interactive-Rating-Component-/images/icon-star-2.svg" alt="">
            <h2>Leap year calculator.</h2>
            <p>Enter the year you want to know if it's leap year or not. Created by <a
                    href="https://www.facebook.com/ashraf.uzmahim/" target="_blank">Ashraf
                    Uzzaman</a>, Web Designer & Developer..
            </p>
            <h6 class="error_msg"><?= $lp_empty ?? null ?></h6>
            <h6 class="error_msg"><?= $lp_Gregorian ?? null ?></h6>
            <h5 class="success_msg"><?=  $lp_year ?? null ?></h5>
            <h5 class="error_msg"><?=  $lp_not ?? null ?></h5>
            <form action="" method="POST">
                <input placeholder="Enter a year" type="text" maxlength="4" name="year" value="<?= $year ?? null ?>" />
                <input type="submit" class="button" value="Check" name="submit123">
            </form>
        </main>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(function() {
        $("input[name='year']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });
    </script>

</body>

</html>