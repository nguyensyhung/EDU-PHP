<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions: Default Argument Values</title>
</head>

<body>
<?php 
    function paint($room =" Hung ", $color = " Blue ")
    {
        return " The color of the {$room} is {$color}. <br />";
    }
    echo paint();
    echo paint("Cuong", "Red");
    echo paint("Hieu", null);
    echo paint("White");
?>
</body>

</html>