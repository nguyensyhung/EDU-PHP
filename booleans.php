<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booleans</title>
</head>

<body>
<?php $result1 = true; $result2 = false ?>
Result1: 
<?php echo $result1; ?> <br/>
Result2: 
<?php echo $result2; ?> <br/>
Result2 is boolean? 
<?php echo is_bool($result2); ?> <br/>
<?php
    $test = 3 ; 
    if (is_float($test)) {
        echo("Is type float!");
    }
    else
    echo("Not type Float!");
?>
</body>

</html>