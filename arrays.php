<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays </title>
</head>

<body>
<?php 
    $number1 = array(1,3,5,7);
    echo $number1[1];
?>
<?php $arr = array(1, "Thanh Tuyen", "Nguyen Hung", array('Neu',"Nhu","Chung","Ta", "Khong", "Gap", "Nhau" ))
?>
<br/>
<?php echo $arr[1];?> <br/>
<?php echo $arr[3];?> <br/>
<pre>
<?php echo print_r($arr) ?>
</pre>
<br/>
<?php
echo $arr[3][1] ;
?>
<?php $arr[2] = "Suong Nguyen" ;
    $arr[4] = "La Nguoi Yeu Nhau!";
    $arr[] = "Khong Thuoc Ve Nhau!";
    $arr[] = "He He :v  !";
?>

<pre>
<?php echo print_r($arr) ?>
</pre>
<br/>
<?php 
$kfc = ["Nguyen", "Sy", "Hung", [1,3,4,5]];
?>
<pre>
<?php
echo print_r($kfc);
?>
</pre>
</body>

</html>