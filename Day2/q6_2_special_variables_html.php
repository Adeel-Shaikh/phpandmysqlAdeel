<html>

<form action='q6_2_special_variables_html.php' method ='GET'>
	<label for="Sname">Student Name:</label>
  <input type="text" id="fname" name="Sname" ><br>
  <label for="Sub1">Subject1:</label>
  <input type="text" name="Sub1" ><br>
    <label for="Sub2">Subject2:</label>
  <input type="text" name="Sub2" ><br>
    <label for="Sub3">Subject3:</label>
  <input type="text" name="Sub3" ><br>
    <label for="Sub4">Subject4:</label>
  <input type="text" name="Sub4" ><br>
    <label for="Sub5">Subject5:</label>
  <input type="text" name="Sub5" ><br>
  <input type="submit" value="Submit">
</form>

<?php
error_reporting(0);
$name=$_GET['Sname'];
$s1=$_GET['Sub1'];
$s2=$_GET['Sub2'];
$s3=$_GET['Sub3'];
$s4=$_GET['Sub4'];
$s5=$_GET['Sub5'];
echo "Name of the student is : ";
echo $name;
echo "<br>Total Marks obtained : ";
$totalmarks = $s1+$s2+$s3+$s4+$s5;
echo $totalmarks;
echo "<br>Percentage obtained : ";
echo ($totalmarks/500)*100;


?>
</html>
