<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions: Return Values</title>
</head>

<body>
<?php 
    function add($num1, $num2)
    {
        $sum = $num1 + $num2;
        return $sum;
    }
    $result1 = add(4,3);
    $result2 = add($result1, 2);
    echo $result1 . "<br />";
    echo $result2;
?>
<br/>
<?php 
    function chinese_zodiac($year)
    {
        switch (($year - 4) % 12) {
            case 0:
                return "Rat";
            case 1:
                return "Ox";
            case 2:
                return "Tiger";
            case 3:
                return "Rabbit";
            case 4:
                return "Dragon";
            case 5:
                return  "Snake"; 
            case 6:
                return "Horse";
            case 7:
                return "Goat";
            case 8:
                return "Monkey";
            case 9:
                return  "Rooster";
            case 10:
                return  "Dog"; 
            case 11:
                return "Pig";        
        }
    }
    $zodiac = chinese_zodiac(1997);
    echo "1997 is the year of the {$zodiac}. <br />";
    // $zodiac = chinese_zodiac(2027);
    echo "2027 is the year of the " . chinese_zodiac(2027) . ".<br />";
?>
<br/>
<?php 
function better_hello($greeting, $target, $punct)
    {
        return $greeting . " " . $target . $punct . "<br />";
    }
    echo better_hello("Hello", "Hung", "!");
    // better_hello("Greetings", $name, "!!!");
    // better_hello("Greetings", $name, null);
?>
</body>

</html>