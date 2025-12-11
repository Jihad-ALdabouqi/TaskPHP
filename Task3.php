<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Task3</h1>
    <p>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i <10)
            {
                 echo $i."-";
            }
            else
            {
                echo $i;
            }
        }
        ?>
    </p>
    <br>
    <p>
        <?php 
        $a=0;

        for ($i = 0; $i <= 30; $i++)
        {
            $a+= $i;
            
            
        }
        echo "total is number = " . $a;
        ?>
    </p>
    <P>
    <?php 

          $letters = ['A','B','C','D','E'];

               for ($i = 0; $i < 5; $i++) {
                    for ($j = 0; $j < 5; $j++) {

                     if ($j < 4 -  $i) {
                       echo $letters[0] . " ";
                         } else {
                            echo $letters [$i] . " ";
                                     }

                                       }
                                        echo "<br>";
                                        }
?>

</P>
<p>
    <?php
    $number = [1,2,3,4,5];
    for ($i=0;$i<5;$i++)
    {
        for ($j = 0; $j < 5; $j++)
                {
                    if ($j < 4 - $i) {
                        echo $number [0] ." ";
                    } else {
                        echo $number [$i] . " ";
                    }
                    
    }
    echo "<br>";
}
    ?>
</p>
 <p>
    <?php 
    for ($i= 1;$i<= 5;$i++)
            {
                for ($j = 1; $j <= 5; $j++)
                    {
                        if ($j == $i) {
                            echo $i ." ";
                        } else {
                            echo "0" ." ";
                        }
                    }
                    echo "<br>";
                }
                    ?>
 </p>
 
<p> 
    <?php
    $num = 5;
$fact = 1;

for ($i = 1; $i <= $num; $i++) {
    $fact *= $i;
}

echo $fact;
?>
</p>

<P>
<?php
$n = 10; 
$a = 0;
$b = 1;

echo "$a, $b";

for ($i = 3; $i <= $n; $i++) {
    $c = $a + $b;
    echo ", $c";
    $a = $b;
    $b = $c;
}
?>
</p>
<P>
    <?php
$text = "Orange Coding Academy";
$count = 0;

for ($i = 0; $i < strlen($text); $i++) {
    if (strtolower($text[$i]) == 'c') {
        $count++;
    }
}

echo $count;
?>

</P>
<table border="1" >
    <?php 
    for($col =1; $col<=5;$col++) {
        echo "<td>";
        for($row=1;$row<=6;$row++) {
            echo "$row * $col = " . ($row * $col) ."<br>";
        }
        echo "</td>";
    }
    ?>
    


</table>
<p>
    <?php

for ($i = 1; $i <= 50; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}

?>

</p>
<p>
    <?php
$n = 5;   
$counter = 1;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $counter . " ";
        $counter++;
    }
    echo "<br>";
}
?>

</p>
<P>
    <?php
$height = 5;


for ($i = 1; $i <= $height; $i++) {
    
    for ($s = 0; $s < $height - $i; $s++) {
        echo "&nbsp; ";
    }
    
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " ";
    }
    echo "<br>";
}


for ($i = $height - 1; $i >= 1; $i--) {
    
    for ($s = 0; $s < $height - $i; $s++) {
        echo "&nbsp; ";
    }
    
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " ";
    }
    echo "<br>";
}
?>

</P>

<h1>
    Task3,2
</h1>

<P>
    <?php
$year = 2013;

      if ($year % 4 == 0) {
    echo "This year is a leap year";
      } else {
    echo "This year is not a leap year";
      }
?>

</P>
<P>
      <?php
$temp = 27;

     if ($temp < 20) {
    echo "It is winter!";
       } else {
    echo "It is summertime!";
       }
?>

</P>
<P>
    <?php
$a = 2;
$b = 2;

$sum = $a + $b;

      if ($a == $b) {
        echo $sum * 3;
     } else {
            echo $sum;
}
?>

</P>
<P>
           <?php
$a = 10;
$b = 10;

if ($a + $b == 30) {
    echo $a + $b;
} else {
    echo "false";
}
?>

</P>

<P>
    <?php
$number = 20;

if ($number % 3 == 0) {
    echo "true";
} else {
    echo "false";
}
?>

</P>

<p>
    <?php
$number = 50;

if ($number >= 20 && $number <= 50) {
    echo "true";
} else {
    echo "false";
}
?>

</p>
<P>
    <?php
$a = 1;
$b = 5;
$c = 9;

$max = $a;

if ($b > $max) $max = $b;
if ($c > $max) $max = $c;

echo $max;
?>

</P>
<P>
    <?php
$units = 260;
$bill = 0;

if ($units <= 50) {
    $bill = $units * 2.5;

} elseif ($units <= 150) {
    $bill = (50 * 2.5) + (($units - 50) * 5);

} elseif ($units <= 250) {
    $bill = (50 * 2.5) + (100 * 5) + (($units - 150) * 6.2);

} else {
    $bill = (50 * 2.5) + (100 * 5) + (100 * 6.2) + (($units - 250) * 7.5);
}

echo $bill;
?>

</P>
<P>
     <?php
$a = 10;
$b = 5;
$op = "*";   // + - * /

if ($op == "+") echo $a + $b;
elseif ($op == "-") echo $a - $b;
elseif ($op == "*") echo $a * $b;
elseif ($op == "/") echo $a / $b;
else echo "Wrong operator";
?>

</P>
<p>
    <?php
$age = 15;

if ($age >= 18) {
    echo "eligible to vote";
} else {
    echo "not eligible to vote";
}
?>

</p>
<p>
    <?php
$age = 15;

if ($age >= 18) {
    echo "eligible to vote";
} else {
    echo "not eligible to vote";
}
?>

</p>
<p>
    <?php
$number = -60;

if ($number > 0) {
    echo "Positive";
} elseif ($number < 0) {
    echo "Negative";
} else {
    echo "Zero";
}
?>

</p>
<p>
    <?php
$marks = [60,86,95,63,55,74,79,62,50];

$sum = 0;
for ($i = 0; $i < count($marks); $i++) {
    $sum += $marks[$i];
}

$avg = $sum / count($marks);

if ($avg < 60) echo "F";
elseif ($avg < 70) echo "D";
elseif ($avg < 80) echo "C";
elseif ($avg < 90) echo "B";
else echo "A";
?>

</p>
</body>
</html>