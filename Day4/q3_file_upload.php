<?php
$name= $_FILES["myfile"]["name"];
$type= $_FILES["myfile"]["type"];
$size= $_FILES["myfile"]["size"];
$temp = $_FILES['myfile']['tmp_name'];
$error = $_FILES['myfile']['error'];
if ($error > 0) 
{
	die("Error uploading file! Code $error>");
}
else
{
	move_uploaded_file($temp, "uploaded/".$name);
	echo "Upload completed!";
	
}
?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
<table>
	<tr>
		<th>Name of the file</th>
		<th>Size</th>
		<th>Type</th>
	</tr>
	<tr>
		<th><?php echo $name; ?></th>
		<th><?php echo $size; ?></th>
		<th><?php echo $type; ?></th>
	</tr>
</table>
