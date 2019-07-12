<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logical</title>
</head>

<body>
<?php 
    $a = 5;
    $b = 9;
    if ($a > $b) {
        echo "A is larger the B";
    }
    else
        echo "B is larher the A";
?>
<?php 
// Only welcome new users
    $new_user = true;
    if ($new_user) {
        echo "<h1> Welcome! </h1>";
        echo "<p> We are glad you decided to join us. </p>";
    }
?>
<!-- Don't divide by zero -->
<?php
    $numerator = 20;
    $deniminator = 0;
    $result = 0 ;
    if ($deniminator > 0) {
        $result = $numerator / $deniminator ;
    }
    echo "Result: {$result}";
?>
</body>

</html>