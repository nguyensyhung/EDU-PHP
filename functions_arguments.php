<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions: Arguments</title>
</head>

<body>
<?php
    function say_hello_to($world)
    {
        echo "Hello {$world} <br />";
    }
    $name = "Hung";
    say_hello_to($name); 
?>
<?php 
function better_hello($greeting, $target, $punct)
    {
        echo $greeting . " " . $target . $punct . "<br />";
    }
    better_hello("Hello", $name, "!");
    better_hello("Greetings", $name, "!!!");
    better_hello("Greetings", $name, null);
?>
</body>

</html>