<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $number = 1;
    if ($number>0){
        echo"positive";
    }
    elseif ($number<0){
        echo "negative";
    }
    else{
        echo "zero";
    }

    ?>
    <br>
   <?php
$name = ["apple", "banana", "mango"];
$number = 2; 

switch ($number) {
    case 1:
        echo $name[0];
        break;

    case 2:
        echo $name[1];
        break;

    case 3:
        echo $name[2];
        break;

    default:
        echo "not.";
}
?>
<br>
<?php 
for ($i= 0; $i< 10; $i++) {
    if ($i%2== 0){
        echo $i;
    }
}
?>
<br>
<?php 
for ($i= 0; $i< 10; $i++) {
    if ($i==5){
        
        continue;
    }
    elseif ($i== 8){
    
        break;
    }
    echo $i;
}
    ?>


</body>
</html>