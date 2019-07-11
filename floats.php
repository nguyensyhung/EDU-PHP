<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Floats Point Numbers</title>
</head>

<body>
    <?php echo $float = 3.14; ?> <br/>
    <?php echo $float + 7; ?> <br/>
    <?php echo 4/3 ; ?> <br/>
    <?php echo 4/0 ; ?> <br/>
    Round: <?php echo round($float,1) ;?> <br/>
    Ceiling: <?php echo ceil($float); ?> <br/>
    Floor: <?php echo floor($float); ?> <br/>
    
    <?php
    $integer = 3; ?>
    <?php echo "Is {$integer} integer? " . is_int($integer);?> <br/>
    <?php echo "Is {$float} integer? " . is_int($float);?> <br/>
    <?php echo "Is {$integer} float? " . is_float($integer);?> <br/>
    <?php echo "Is {$float} float? " . is_float($float);?> <br/>
    <?php echo "Is {$integer} numneric?" . is_numeric($integer);?> <br/>
    <?php echo "Is {$float} numberic?" . is_numeric($float);?> <br/>
</body>

</html> 