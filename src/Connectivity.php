<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'food center');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
$name = $_POST['emailvar'];
$email = $_POST['pswd2'];
$query = "INSERT INTO login(username,password)VALUES('$name','$email')";
$result = mysqli_query($con,$query);
	if($result)
	{	
		echo "you have successfully register";
		echo "<br><br>";
		header("location:basic.php");

	}
	else
	{
	 die('Error: '.mysql_error($con));
	}
	mysqli_close($con);	
?>