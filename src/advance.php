<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="payment.css">
</head>
<body>

<div id="infomation">
<?php
require 'item.php';
$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'food center';

$conn = mysqli_connect($servername, $username, $pass, $dbname) or die("Connection failed" . mysqli_connect_error());
$sql = "SELECT * FROM pizza WHERE id=".$_GET['id'];
$result = mysqli_query($conn,$sql);
$productp = mysqli_fetch_object($result);
if(isset($_GET['id']) && array_key_exists('username', $_SESSION)){
	$item =new Item();
	$item->id=$productp->id;
	$item->prize=$productp->prize;
	$item->name=$productp->name;
	$item->quantity=1;
	$ch=0;
	$c= -1;
	$total=0;
	
	$cart1=unserialize(serialize($_SESSION['cart1']));
	for($i=0;$i<count($cart1);$i++){
		if($cart1[$i]->id==$_GET['id']){
			$c=$i;
			break;
		}
	}
	if($c==-1){
		$_SESSION['cart1'][]= $item;
		
		
	}
	else{
		$cart1[$c]->quantity++;
		$_SESSION['cart1']=$cart1;
		}

	$cart1=unserialize(serialize($_SESSION['cart1']));
	for($i=0;$i<count($cart1);$i++){
		echo '<fieldset>';
		echo '<h2 style=size:10;margin-left:50px;>NAME:'.$cart1[$i]->name.'</h2>';
		echo '<h2 style=size:10;margin-left:50px;>PRIZE:'.$cart1[$i]->prize.'</h2>';
		echo '<h2 style=size:10;margin-left:50px;>QUANTITY:'.$cart1[$i]->quantity.'</h2>';
		$subtotal=$cart1[$i]->prize*$cart1[$i]->quantity;
		$ch+=$cart1[$i]->quantity;
		echo '<h3 style=size:10;margin-left:50px;>SUBTOTAL='.$subtotal.'</h3>';
		echo '</fieldset>';
		$total+=$subtotal;
		
	
	}
	echo '<h1 style=margin-left:200px;>TOTAL='.$total.'</h1>';
	echo '<button type=button id=continue onclick=location.href=\'basic.php\'>CONTINUE</button>';
	echo '<button type=button id=continue onclick=location.href=\'payment.php?id='.$ch.'&total='.$total.'\'>PAY NOW</button>';
	echo '<br>';	
}
else {
		header("location:basic.php?id=true");
		
}
?>
</div>
</body>
</html>