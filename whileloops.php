<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops: while</title>
</head>

<body>
<?php 
    $a = 0 ;
    while ($a <= 10) {
        if ($a == 5) {
            echo "Five, ";
        }
        elseif ($a < 10) {
            echo $a . ", ";
        }
        else
        echo $a;
        $a++;
    }
?>
</body>

</html>