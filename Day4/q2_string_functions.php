<form action="q2_string_functions.php" method="post">
    Enter the string          :<input type="text" name="string" /><br />
    Enter string for replacing:<input type="text" name="replace"><br />
   
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
error_reporting(0);
$stringvalue = $_POST['string'];
$replace = $_POST['replace'];
echo "Entered string is: ".$stringvalue;
$numbers = strlen($stringvalue);
echo "<br>Number of Characters in the string are: ".$numbers;
echo "<br>Breaking down a string into an array<br> ";
$length = str_word_count($stringvalue);

for ($i=0; $i < $length ; $i++)
{ 
	$str =  explode(" ", $stringvalue);
echo $str[$i]."<br> ";
}
$rev = strrev($stringvalue);
echo "Reversed string is: ".$rev;
echo "<br>Converting all the alphabetic characters in string to their lower case form:<br>";
$low = strtolower($stringvalue);
echo $low;
echo "<br> Converting all the alphabetic characters in string to their upper case form:<br>";
$upp = strtoupper($stringvalue);
echo $upp;
echo "<br><br><br>";
$newnumbers = strlen($replace);

if($newnumbers == $numbers)
{
	echo "Replaced string is:<br>";

$replacevalue = substr_replace($stringvalue, $replace,0,$newnumbers);
echo $replacevalue;
}
else
 {
 	echo "String can't be replaced as length of both the string is not same!!";
 }
?>

