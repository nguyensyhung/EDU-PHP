<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String Functions</title>
</head>
<body>
    <?php
    $first = 'Nguyen Sy Hung';
    $second = ' la mot anh chang dev PHP! ';

    $third = $first;
    $third .= $second;

    echo("Đây là chuỗi string ban đầu: ".$third);
    ?>
    <br />
    <!-- Phần 1 -->
    LowerCase: <?php echo strtolower($third);?>
    <br/>
    UpperCase: <?php echo strtoupper($third); ?>
    <br/>
    UpperCase First: <?php echo ucfirst($third); ?>
    <br/>
    UpperCase Words: <?php echo ucwords($third); ?>
    <br/>
    <!-- Phần 2 -->
    Length: <?php echo strlen($third); ?>
    <br/>
    Trim: <?php echo "A" . trim(" B C D ") . "E" ; ?>
    <br/>
    Find: <?php echo strstr($third, "la"); ?>
    <br/>
    Replace by String: <?php echo str_replace("PHP", "Backend", $third) ; ?>
    <br/>
    <!-- Phần 3 -->
    Repeat: <?php echo str_repeat($third, 3)  ;?>
    <br/>
    Make SubString: <?php echo substr($third, 9, 30); ?>
    <br/>
    Find Position: <?php echo strpos($third, "Hung"); ?>
    <br/>
    Find Character: <?php echo strchr($third, "H"); ?>

</body>
</html>
