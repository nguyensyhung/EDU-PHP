<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Function</title>
</head>

<body>
<?php $numbers = array(1,34,56,78,23,56,43); ?>
<!-- tổng số phần tử có trong mảng -->
Count: <?php echo count($numbers); ?>
<br/>
<!-- Số lớn nhất trong mảng -->
Max: <?php echo max($numbers);?>
<br/>
<!-- Số bé nhất trong mảng -->
Min: <?php echo min($numbers);?>
<br/>
<pre>
<!-- Sắp xếp mảng -->
Sort: <?php echo sort($numbers); print_r($numbers); ?> <br/>
<!-- Sắp xếp đảo ngược -->
Reverse Sort <?php echo rsort($numbers); print_r($numbers);?> 
</pre>
<br/>
<!-- Chuyển mảng thành 1 chuỗi -->
Implode: <?php echo $num_string = implode("* ", $numbers) ;?>
<br/>
<pre>
<!-- Chuyển chuỗi thành một mảng -->
Explode: <?php print_r(explode("* ", $num_string)); ?>
</pre>
<br>
56 in Array: <?php echo in_array(56,$numbers); ?><br/>
99 in Array: <?php echo in_array(99,$num_string); ?>
</body>

</html>