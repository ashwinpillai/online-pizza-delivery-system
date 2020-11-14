<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="pay.css">
</head>
<body>
<h1>Payment Details</h1>

<fieldset id="payment">
<legend	style="font-size:30">Delivery Address</legend>
<from>
ADDRESS:<br>
<textarea rows="8" cols="50" name="comment">
Enter address here...</textarea><br><br>
STATE: <input type="text" ><br><br>
CITY: <input type="text" ><br><br>
MOBILE:<input type="text">
</form>
</fieldset>


<fieldset id="payment">
<legend	style="font-size:30">Order Details</legend>
<?php
echo '<h2>NO. OF ITEM:    '.$_GET['id'].'</h2>';
echo '<h2>TOTAL PRICE:    '.$_GET['total'].'</h2>';
date_default_timezone_set('Asia/Kolkata');
echo '<h2>ORDER DATE:    '.date("Y-m-d").'</h2>';
echo '<h2>ORDER ID:7842544'.$_GET['id'].'</h2>';
?>
</fieldset>


<fieldset id="payment">
<legend	style="font-size:30">Billing Information</legend>
<ul>
  <li><a href="#debit">debit card</a></li>
  <input type="image" src="img92.jpg" style="margin-left:450px;margin-top:-40px;"><br>
  <label style="padding-left:200px;">CARD_NUMBER:</label><input type="text" size="40px" style="margin-left: 350px; margin-top: -18px"> <br><br>
  <label style="padding-left:200px;">NAME_ON_CARD:</label><input type="text" size="40px" style="margin-left: 350px; margin-top: -18px"> <br><br>
  <label style="padding-left:200px;">EXPIRE_DATE:</label><input type="text" size="10px" style="margin-left: 350px; margin-top: -18px">
   <label style="padding-left:450px; margin-top: -20px;">CVV:</label><input type="text" size="10px" style="margin-left: 550px; margin-top: -50px"> <br><br>
  
  <li><a href="#Credit">credit card</a></li>
  <li><a href="#banking">Net Banking</a></li>
  <li><a href="#other">Other</a></li>
</ul>
<div  id="vva">
<form>


</form>
</div>
</fieldset>


<br><br><br>
<body>
</html>