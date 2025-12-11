<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $salary = [
    ["A",1000],
   ["B",1200],
   ["C",1400],
   ];
   $length = "len.text";
   $creat_file="data.php";
   $file=fileatime($creat_file);
   $coloer =["red","green","white"];
   $cities =[
   "jorden"=>"Amman",
   "Egypt"=> "Cairo"
   ];
   $coloer2=[
    4=> "red",
    6=>"green",
    7=> "white"
   ]


   
   ?>
   <h1>
    The len is file:<?php echo strlen($length);?>
   </h1>

   <h2><?php 
   echo "Last modified " . date("l, dS F, Y, h:ia", $file)?>
   </h2>
   <table border="1">
    <tr>
        <td>salary is name A <?php echo $salary[0][1]?></td>
     

    </tr>
    <tr>
        <td>salary of name B <?php echo $salary[1][1]?></td>

    </tr>
    <tr>
           <td>salary of name C <?php echo $salary[2][1]?></td>
    </tr>
    <br>
   </table>
   <h1>Task2</h1>
   <p>The memory of that scene for me is like a frame of film forever frozen at that moment: the <b><?php echo$coloer[0]?></b> carpet, the <b><?php echo$coloer[1]?></b> lawn, the <b><?php echo$coloer[2]?></b> house, the leaden sky. The new president and his first lady. - Richard M. Nixon</p>
    <ul>
        <li><?php echo $coloer[0]?></li>
        <li><?php echo $coloer[1]?></li>
        <li><?php echo $coloer[2]?></li>
    </ul>
    <P>
        <?php
         asort($cities);
        foreach ($cities as $key => $value) {
                echo "The capital of ". $key ."is ". $value . "<br>" ;  
        }
        ?>
    </P>

    <p>
        <?php 
        reset($coloer2);
        foreach ($coloer2 as $key => $value) {
            echo "Expected Output:  ".  "". $value . "<br>";
        }
        ?>
    </p>
    <br>
    <p>
        <?php 
        
        $num = array(1,2,3,4,5);

        foreach ($num as $x)
        {
            echo $x ."\n";
        }
        
        $inserted = '$';

        array_splice($num, 3, 0, $inserted);
        foreach ($num as $x)
            {
                echo $x ;
            }
            ?>
    </p>
    <br>
    <p>
        <?php 
        $fuits =[
        
            "d"=>"lemon",
            "a"=> "orange",
            "b"=> "banana",
            "c"=> "apple"
        ];
        ksort($fuits);
        foreach ($fuits as $key => $value)
                {
                    echo  $key ." = ". $value . "<br>";
                }
                ?>

    </p>
    <p>
     <?php


$temps = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73,
          68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];


$total = 0;
foreach ($temps as $t) {
    $total += $t;   
}
$average = $total / count($temps);  
echo "Average Temperature: " . round($average, 1) . "<br><br>";

sort($temps);


$lowest = [$temps[0], $temps[1], $temps[2], $temps[3], $temps[4]];
echo "Lowest 5: " . implode(", ", $lowest) . "<br><br>";


rsort($temps);


$highest = [$temps[0], $temps[1], $temps[2], $temps[3], $temps[4]];
echo "Highest 5: " . implode(", ", $highest);

?>

    </p>
<p>
    <?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$result = array_merge($array1, $array2);
print_r($result);
?>

</p>
<br>
<p>
    <?php
$colors = array("red","blue","white","yellow");
$upper = array_map('strtoupper', $colors);
print_r($upper);
?>

</p>
<br>
<p>
    <?php
$colors = array("RED","BLUE","WHITE","YELLOW");
$lower = array_map('strtolower', $colors);
print_r($lower);
?>

</p>
<br>
<p>
    <?php
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i . ",";
    }
}
?>

</p>
<br>
<p>
    <?php
$words = array("abcd","abc","de","hjjj","g","wer");

$lengths = array_map('strlen', $words);

echo "The shortest array length is " . min($lengths) . ". ";
echo "The longest array length is " . max($lengths) . ".";
?>

</p>
  <br>
  <p>
    <?php
$numbers = range(11, 20);
shuffle($numbers);
$result = array_slice($numbers, 0, 10);
echo implode(" ", $result);
?>

  </p>
  <br>
  <p>
    <?php
$array1 = array(2, 0, 10, 12, 6);

$filtered = array_filter($array1);
echo min($filtered);
?>

  </p>
    


</body>
</html>