<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comparison and Logical Operators</title>
</head>

<body>
<?php
    $a = 9;
    $b = 5 ;
    $c = 99; 
    $d = 45;
    if(($a > $b) && ($c > $d)) {
        echo "A is largar the B AND";
        echo " C is larger the D ";
    }
?>
<br/>
<?php
    $e = 100;
    if (!isset($e)) {
        $e = 200;
    }
    echo $e;
?>
<br/>
<?php
//don't reject 0 or 0.0
    $quantity = "";
    if (empty($quantity) && !is_numeric($quantity)) {
        echo "You must enter the quantity";
    }
?>
</body>

</html>