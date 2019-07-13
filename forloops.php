<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops: for</title>
</head>

<body>
<?php
    for ($i=0; $i <=10 ; $i++) { 
        if ($i == 10) {
            echo $i;
        }
        else {
            echo $i . ", ";
        }
    }
?>
<br/>
<?php
    for ($a = 20 ; $a > 0 ; $a--) { 
        if ($a % 2 == 0) {
            echo "{$a} is even. <br />";
        }
        else
        {
            echo "{$a} is odd. <br />";
        }
    }
?>
</body>

</html>