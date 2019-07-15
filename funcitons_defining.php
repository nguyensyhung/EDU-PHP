<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions: Defining</title>
</head>

<body>
<?php 
    function say_hello()
    {
        echo "<h1> Hello world! </h1>";
    }
    say_hello();
    function say_hello_to($world)
    {
        echo "Hello {$world} <br />";
    }
    say_hello_to("Hung");
    say_hello_to_loudly();
    function say_hello_to_loudly()
    {
        echo "HELLO WORLD <br />";
    }
    // function say_hello_to_loudly()
    // {
    //     echo "We can't redefine a function. <br />";
    // }
?>
</body>

</html>