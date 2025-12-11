<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Task 4</h1>
    <P>
        <?php
$n = 3;
if ($n <= 1) {
    echo "$n is not a prime number";
} else {
    $isPrime = true;
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) echo "$n is a prime number";
    else echo "$n is not a prime number";
}
?>

    </P>
    <P>
        <?php
$s = "remove";
echo strrev($s); 
?>

    </P>
    <P>
        <?php
$s = "remove";
if ($s === strtolower($s)) {
    echo "Your String is Ok";
} else {
    echo "Not all lowercase";
}
?>

    </P>
    <P>
        <?php
$x = 12;
$y = 10;

$temp = $x;
$x = $y;
$y = $temp;

echo "x = $x, y = $y";
?>

    </P>
    <P>
        <?php
$num = 407;
$temp = $num;
$sum = 0;

while ($temp > 0) {
    $digit = $temp % 10;
    $sum += $digit * $digit * $digit; 
    $temp = (int)($temp / 10);
}

if ($sum == $num) echo "$num is Armstrong Number";
else echo "$num is not Armstrong Number";
?>

    </P>
    <P>
        <?php
$input = "Eva, can I see bees in a cave?";


$clean = preg_replace("/[^a-z0-9]/i", "", $input);
$clean = strtolower($clean);


if ($clean === strrev($clean)) {
    echo "Yes it is a palindrome";
} else {
    echo "No, not a palindrome";
}
?>

    </P>
    <P>
        <?php
$array1 = array(2, 4, 7, 4, 8, 4);
$result = array_values(array_unique($array1)); 
print_r($result); 
?>

    </P>
</body>
</html>