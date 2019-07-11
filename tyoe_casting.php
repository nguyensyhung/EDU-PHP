<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type Juggling and Type Castring</title>
</head>

<body>
    Type Juggling: <br/>
<?php
    $count = "3";
?>
Type: <?php echo gettype($count);?> <br/>
<?php
    $count += 5 ; 
?>
Type: <?php echo gettype($count);?> <br/>
<?php echo $cast =  "I have " . $count . " cast!" ?> <br/>
Type: <?php echo gettype($cast); ?> <br/>
Type Casting: <br/>
<?php settype($count, "integer"); ?>
Type: <?php echo gettype($count); ?> <br/>
<?php $count2 = (string) $count; ?>
Count: <?php echo gettype($count); ?> <br/>
Count2: <?php echo gettype($count2); ?> <br/>
</body>

</html>