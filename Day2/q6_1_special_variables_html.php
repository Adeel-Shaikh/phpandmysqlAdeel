<html>

<form action='q6_1_special_variables_html.php' method ='GET'>
	<input type='text' name='side1' value="0"></br>
	<input type='text' name='side2' value="0"></br>
	<input type='text' name='side3' value="0"></br>
	<input type ='submit' value='click here'>
</form>


</html>

<?php
error_reporting(0);
$s1=$_GET['side1'];
$s2=$_GET['side2'];
$s3=$_GET['side3'];

if ($s1==0 and $s2==0 and $s3==0)
 {
	echo "Triangle does not exist";
}
else if ($s1==$s2 and $s2==$s3)
{
	echo "EQUILATERAL TRINAGLE";
}
else if($s1==$s2 or $s3==$s1 or $s3==$s2)
{
	echo " ISOSECELES TRIANGLE";
}
else if(((pow($s1,2)+pow($s2,2))==pow($s3,2))) 

{
	echo "RIGHT ANGLED TRIANGLE";
}

else{
	echo "SCALENE TRIANGLE";
}

?>