<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
</head>
<body>
    <h1>TASK2.2</h1>
    <p>
        <?php 
        $name = "jihad";
        echo strtoupper($name ."<br>");
        echo strtoupper($name[0] ."<br>");
        $NAME2 = "ALI";
        echo strtolower($NAME2 ."<br>");
        echo strtoupper($NAME2[0] ."<br>");

        ?>
    </p>
    <br>
    <P>
        <?php 
        $check = "085119";
        echo substr(chunk_split($check, 2, ':'), 0, -1)."\n";
        ?>
    </P>
    <br>
    <p>
        <?php 
        $text="I am a full stack developer at orange coding academy";
        $words="Orange";
        if (strpos($text,$words) !== false)
        {
            echo "Word Found!";
        }
        else{
            echo chop("word not found!");
        }
        ?>
    </p>
    <br>

    <p>
        <?php 
        $url="www.orange.com/index.php";
        $foundname=basename($url);
        echo "The name file :" . $foundname;
        ?>
    </p>
    <br>
    <p>
       <?php 
       $email = "info@orange.com";
       $namefirst= explode("@",$email);
       echo chop($namefirst[0]);
       ?>

    </p>
    <br>
    <p>
        <?php 
        $email1 ="info@orange.com";
        $namelast = explode(".",$email);
        echo chop($namelast[1]);
        ?>
    </p>
    <br>
    <p>
        <?php 
        $sourc="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
        $password = substr(str_shuffle("$sourc"),0,8);
        echo ($password);
        ?>
    </p>
    <br>
<p>
<?php 
$sentence = "That new trainee is so genius.";
$words = explode(" ", $sentence);
$words[0] = "the";
echo implode(" ", $words);
?>
</p>

<br>
<p>
<?php 
$s1="dragonball";
$s2="dragonboll";
for($i=0;$i<strlen($s1);$i++){
    if($s1[$i]!=$s2[$i]){
        echo 'First difference at position '.($i+1).': "'.$s1[$i].'" vs "'.$s2[$i].'"';
        break;
    }
}
?>
</p>

<br>
<p>
<?php 
$str="Twinkle, twinkle, little star.";
var_dump(str_split($str,8));
?>
</p>

<br>
<p>
<?php 
$char='a';
echo ($char=='z')?'a':chr(ord($char)+1);
?>
</p>

<br>
<p>
<?php 
$str="The brown fox";
echo substr_replace($str,"quick ",strpos($str,"brown"),0);
?>
</p>

<br>
<p>
<?php 
$str="The quick brown fox";
echo strtok($str," ");
?>
</p>

<br>
<p>
<?php 
$num="0000657022.24";
echo ltrim($num,"0");
?>
</p>

<br>
<p>
<?php 
$str="The quick brown fox jumps over the lazy dog";
echo str_replace("fox ","",$str);
?>
</p>

<br>
<p>
<?php 
$str="The quick brown fox jumps over the lazy dog---";
echo rtrim($str,"-");
?>
</p>

<br>
<p>
<?php 
$str='\"\1+2/3*2:2-3/4*3';
echo preg_replace('/[^0-9\s]/',' ',$str);
?>
</p>

<br>
<p>
<?php 
$str='The quick brown fox jumps over the lazy dog';
echo implode(" ",array_slice(explode(" ",$str),0,5));
?>
</p>

<br>
<p>
<?php 
$num='2,543.12';
echo str_replace(",","",$num);
?>
</p>

<br>
<p>
<?php 
foreach(range('a','z') as $l) echo $l." ";
?>
</p>


</body>
</html>