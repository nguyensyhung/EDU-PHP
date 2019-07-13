<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops: foreach</title>
</head>

<body>
<?php
    $numbers = array(1,23,45,76,86,4,3,99);
    foreach ($numbers as $num) {
        echo "Age: {$num} <br /> ";
    }
?>
---------------------------------
<br />
<?php 
    // foreach using assoc. array
    $person = array(
        "first_name" => "Nguyen",
        "last_name"     => "Hung",
        "addrress"  =>  "20 Street 19",
        "city"      => "Gia Lai",
        "state"     => "Duc Co",
        "zip_code"  => "1997",
    );
    foreach ($person as $attribute => $data) {
        $attr_nice = ucwords(str_replace("_", " ", $attribute));
        echo "{$attr_nice}: {$data} <br />";
    }
?>
-------------------------------
<br/>
<?php 
    $prices = array(
        "Brand New Computer" => 5000,
        "One month of Edumall"  => 25,
        "Learning PHP"  => null, 
    );
    foreach ($prices as $item => $price) {
        echo "{$item}: ";
        if (is_int($price)) {
            echo number_format($price) . " $";
        }
        else{
            echo "priceless";
        }
        echo "<br />";
    }
?>
</body>

</html>