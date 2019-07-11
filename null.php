<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Null</title>
</head>

<body>
<?php 
    $num1 = null ;
    $num2 = "";
?>
<!-- vô giá trị -->
var1 null?
<?php echo is_null($num1) ?><br/>
var2 null?
<?php echo is_null($num2) ?> <br/>
var3 null?
<?php echo is_null($num3) ?><br/>
<!-- Rỗng -->
var1 is set?
<?php echo isset($num1) ?><br/>
var2 is set?
<?php echo isset($num2) ?> <br/>
var3 is set?
<?php echo isset($num3) ?> <br/>
<!-- Trống -->
<?php //Empty : "", 0 "0", 0.0, null, flase, array() ?>
<?php 
    $num3 = "0";
?>
var1 is empty?
<?php echo empty($num1);?> <br/>
var2 is empty?
<?php echo empty($num2);?> <br/>
var3 is empty?
<?php echo empty($num3);?> <br/>
</body>

</html>