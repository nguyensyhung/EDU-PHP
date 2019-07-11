<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<?php 
    // $max_with = 980;
    define("max", 780);
    echo max;
?>
<?php
    // Can't change the value
    // max = max + 1;
    // echo max;
?>
<?php
    // Can't even redefine it 
    //define("max", 981);
    //echo max;
?>
</body>

</html>