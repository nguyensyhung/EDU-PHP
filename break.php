<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Break</title>
</head>

<body>
<?php 
    for ($k=0; $k <=10 ; $k++) { 
        if ($k  == 5) {
            break;
        }
        echo $k . ", ";
    }
?>
<br/>
<?php 
    for ($h= 0; $h <= 5 ; $h++) { 
        if ($h % 2 == 0) {
            continue;
        }
        for ($u=0; $u <= 5; $u++) { 
            if ($u == 3) {
                break(2);
            }
            echo $h . " - " . $u . "<br />" ;
        }
    }
?>
</body>

</html>