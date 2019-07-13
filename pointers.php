<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pointers</title>
</head>

<body>
<?php 
    $numbers = array(1,5,47,85,97,22);
//Current : Current pointer  value
    echo "1: " . current($numbers) . "<br />" ;
//next: move the pointer forward
// smilar to using "continue" inside a loop
    next($numbers);
    echo "2: " . current($numbers) . "<br />";
    next($numbers);
    next($numbers);
    echo "3: " . current($numbers) . "<br />";
// prev : move the pointer backward
    prev($numbers);
    echo "4: " . current($numbers) . "<br />";
// reset: move the pointer to the first element
    reset($numbers);
    echo "5: " . current($numbers) . "<br />";
// end: move the pointer to the last element
    end($numbers);
    echo "6: " . current($numbers) . "<br />";
// move the pointer past the last element
    next($numbers);
    echo "7: " . current($numbers) . "<br />";
?>
<br/>
<?php 
//while loop that moves the array pointer
//similar  to foreach
    reset($numbers);
    while ($num = current($numbers)) {
        echo $num . ", ";
        next($numbers);
    }
?>
</body>

</html>