
<?php
session_start();

$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'food center';

$conn = mysqli_connect($servername, $username, $pass, $dbname) or die("Connection failed" . mysqli_connect_error());

$log_user = $_POST['email1'];
$log_pass = $_POST['pswd'];
$sql = "SELECT username FROM login WHERE username = '$log_user' AND password = '$log_pass'";
$result = mysqli_query($conn, $sql);
$count=mysqli_num_rows($result); 
if ($count == 1) {
	$_SESSION['username'] = $log_user;
	header("location:basic.php?temp=true");
	mysqli_close($conn);
	
    }
	else{
		header("location:basic.php?temp1=true");
		mysqli_close($conn);
		

	}


?>