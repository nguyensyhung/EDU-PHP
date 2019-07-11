<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Integers</title>
</head>
    <?php 
        $var1= 4;
        $var2 = 5;
        
    ?>
    <br/>
    Basic Math: <?php echo(((1 + 2 + $var1) - $var2)+ $var1 + $var2)/5; ?>
    <br/>
    Absolute value: <?php echo abs( 0 - 300 ); ?>
    <br/>
    Exponential: <?php echo pow(2,8); ?>
    <br/>
    Square Root: <?php echo sqrt(100); ?>
    <br/>
    Modulo: <?php echo fmod(20,7); ?>
    <br/>
    Random: <?php echo rand(); ?>
    <br/>
    Random(Min,Max): <?php echo rand(1,5);?>
    <br/>
    += : <?php echo $var2+=2 ; ?> <br/>
    -= : <?php echo $var2-=1 ; ?> <br/>
    *= : <?php echo $var2*=4 ; ?> <br/>
    /= : <?php echo $var2/=2 ; ?> 
    <br/>
    Increment: <?php  $var1++ ; echo $var1 ?> <br/>
    Decrement: <?php  $var1-- ; echo $var1 ?> <br/>
    <?php 
        echo 1 + "1";
    ?>


<body>

</body>

</html>