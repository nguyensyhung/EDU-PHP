<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
</head>

<body>
<?php
    $a = 9 ;
    switch ($a) {
        case 0:
            echo " A equals 0 <br/>";
            break;
        case 1:
            echo " A equals 1 <br/>";
            break;
        case 2:
            echo " A equals 2 <br/>";
            break;
        case 3:
            echo " A equals 3 <br/>";
            break;
        default:
            echo "A is not 0 1 2 or 3 <br/>";
            break;
    }
?>
<?php 
    //ChineseZodiac
    //Whitespace doesn't matter
    //colons, semicolons, and breaks do
    $year = 2013;
    switch (($year - 4) % 12) {
        case 0:
            $zodiac = "Rat";
            break;
        case 1:
            $zodiac = "Ox";
            break;
        case 2:
            $zodiac = "Tiger";
            break;
        case 3:
            $zodiac = "Rabbit";
            break;
        case 4:
            $zodiac = "Dragon";
            break;
        case 5:
            $zodiac = "Snake";
            break; 
        case 6:
            $zodiac = "Horse";
            break;
        case 7:
            $zodiac = "Goat";
            break;
        case 8:
            $zodiac = "Monkey";
            break;
        case 9:
            $zodiac = "Rooster";
            break;
        case 10:
            $zodiac = "Dog"; 
        case 11:
            $zodiac = "Pig";         
        default:
            # code...
            break;
    }
    echo "{$year} is the year of the {$zodiac}.";
?>
<br/>
<?php 
//Case with multiple values 
    $user_type = "student";
    switch ($user_type) {
        case 'student':
            echo"Welcome! <br/>";
            break;
        case 'press':
        case 'customer':
            echo"Hello! <br/>";
            break;       
        default:
            # code...
            break;
    }
?>
</body>

</html>