<form action="q1_md5.php" method="POST">
	Username: <input type="text" name="user"><br />
	Password: <input type="password" name="pass"><br />
	<input type="submit" name="login">
	
</form>
<?php
error_reporting(0);
require('connect.php');
$user_name = $_POST['user'];
$pass_word = $_POST['pass'];
$pass_wordenc = md5($pass_word);
if($user_name)
{
	$sql="INSERT INTO form(username,password)
	VALUES ('$user_name','$pass_wordenc')";
	if (mysqli_query($connect,$sql))
	{
		echo "SUCCESSFULLY ADDED";
	}
	else
	{
		echo "Error :" .$sql ."</br>".mysqli_error($connect); 
	}
}

?>