<?php
    session_start();
?>
<html>
<head>
<title>
FOODCENTER</title>
<link rel="icon" href="logo.png"> 

<link rel="stylesheet" type="text/css" href="trial.css">
<link rel="stylesheet" type="text/css" href="nahihoraha.css">
<script language="javascript" type="text/javascript">
	var count = 3;
	var total = 14;
	var img_count=2;
	var t=14;
function slide(x)
{
	var Image=document.getElementById("img");
	count=count+x;
	if(count==2)
	{
		count=14;
	}
	else if(count>total)
	{
		count=3;
	
	}
	Image.src="img"+ count +".jpg";
}
window.setInterval(function slideA(){	
	var Image=document.getElementById("img");
	img_count = img_count+1;
	if(img_count>t)
	{
		img_count=3;
	}
	Image.src="img"+ img_count +".jpg";
},3000);


function varshil(){
	document.getElementById("popupbox1").style.visibility="visible";
	document.getElementById("popupbox2").style.visibility="hidden";
	document.getElementById("popupbox3").style.visibility="hidden";
	document.getElementById("popupbox4").style.visibility="hidden";
	document.getElementById("popupbox5").style.visibility="hidden";
	document.getElementById("slider").style.visibility="visible";
}


function create(){
	document.getElementById("popupbox1").style.visibility="hidden";
	document.getElementById("popupbox2").style.visibility="visible";
	document.getElementById("popupbox3").style.visibility="hidden";
	document.getElementById("popupbox4").style.visibility="hidden";
	document.getElementById("popupbox5").style.visibility="hidden";
	document.getElementById("slider").style.visibility="visible";
}


function validateform(){
	var errormsg="";
	if(document.getElementById("first").value=="")
	{	
		errormsg=errormsg+"enter the first name /n";
		document.getElementById("first").style.borderColor="red";
		
	}
	if(document.getElementById("last").value=="")
	{	
		errormsg=errormsg+"enter the last name /n";
		document.getElementById("last").style.borderColor="red";
		
	}
	if(document.getElementById("email2").value=="")
	{	
		errormsg=errormsg+"enter the Email Id /n";
		document.getElementById("email2").style.borderColor="red";
		
	}
	if(document.getElementById("pswd").value=="")
	{	
		errormsg=errormsg+"enter the password /n";
		document.getElementById("pswd").style.borderColor="red";
		
	}
	if(document.getElementById("cpswd").value=="")
	{	
		errormsg=errormsg+"enter the password /n";
		document.getElementById("cpswd").style.borderColor="red";
		
	}
	if(errormsg!="")
	{	
		window.alert("please enter");
		return false;
		
	}
	if(document.getElementById("pswd").value!=document.getElementById("cpswd").value)
	{	
		window.alert("please Re-enter the password");
		document.getElementById("pswd").value="";
		document.getElementById("cpswd").value="";
		return false;
		
	}
	
}


function chklength(){
	var z=document.getElementById("pswd").value
	if(z.length < "8")
	{
		window.alert("please enter minimum 8 character");
		document.getElementById("pswd").value="";
	}	
}


function myFunction1() {
	var x=document.getElementById("first");
	x.value=x.value.toUpperCase();
	
}
function myFunction2() {
	var y=document.getElementById("last");
	y.value=y.value.toUpperCase();
	
}


function close1(){
	document.getElementById("popupbox1").style.visibility="hidden";
}

function close2(){
	document.getElementById("popupbox2").style.visibility="hidden";
}

function close3(){
	document.getElementById("reset").style.visibility="hidden";
}

function deal(){
	window.open("advance.html");
}


function location(){
	document.getElementById("popupbox1").style.visibility="hidden";
	document.getElementById("popupbox2").style.visibility="hidden";
	document.getElementById("popupbox3").style.visibility="visible";
	document.getElementById("slider").style.visibility="hidden";
	document.getElementById("popupbox4").style.visibility="hidden";
	document.getElementById("popupbox5").style.visibility="hidden";
}


function pizza(){
	window.open("pizza.php");
	return false;
}
function sandwich(){
	window.open("sandwich.php");
	return false;
}
function pasta(){
	window.open("pasta.php");
	return false;
}


function reset(){
	document.getElementById("popupbox1").style.visibility="hidden";
	document.getElementById("popupbox2").style.visibility="hidden";
	document.getElementById("popupbox3").style.visibility="hidden";
	document.getElementById("slider").style.visibility="visible";
	document.getElementById("reset").style.visibility="visible";
}

function getclick1(el){
	el.style.backgroundColor="white";
	document.getElementById("popupbox1").style.visibility="hidden";
	document.getElementById("popupbox2").style.visibility="hidden";
	document.getElementById("popupbox3").style.visibility="visible";
	document.getElementById("slider").style.visibility="hidden";
	document.getElementById("popupbox4").style.visibility="visible";
	document.getElementById("popupbox5").style.visibility="hidden";	
        document.getElementById("reset").style.visibility="hidden";
}  
function getclick2(el){
	el.style.backgroundColor="white";
	document.getElementById("popupbox1").style.visibility="hidden";
	document.getElementById("popupbox2").style.visibility="hidden";
	document.getElementById("popupbox3").style.visibility="visible";
	document.getElementById("slider").style.visibility="hidden";
	document.getElementById("popupbox4").style.visibility="hidden";
	document.getElementById("popupbox5").style.visibility="visible";
        document.getElementById("reset").style.visibility="hidden";
}  

function search(){
window.open("advance.html");
}


function hello(){
	document.getElementById("reset").style.visibility="hidden";
	document.getElementById("successfully").style.visibility="visible";
	return false;
}
function reset(){
	document.getElementById("reset").style.visibility="hidden"

	
}
</script>
</head>

<body onLoad="slideA()">
<?php
if(!headers_sent()){
	echo '<script>window.alert("plz login first")</script>';
}

?>
<div id="symbol">
	<img src="var.png" height="70" width="250">
	<div class="menu">
		<a href="javascript:pizza();">PIZZA</a>
		<a href="javascript:pasta();">PASTA</a>
		<a href="javascript:sandwich();">SANDWICH</a>
		<a href="javascript:chinese();">CHINESE</a>
		<a href="javascript:drinks();">DRINKS</a>
	</div>

	
</div>


<div id="slider">
	<img src="img4.jpg" id="img">
	<div id="left_holder"><img onClick="slide(-1)" src="img7.png" class="left"></div>
	<div id="right_holder"><img onClick="slide(1)" src="img6.png" class="right"></div>
</div>


<div id="signin">
	<a href="javascript:varshil();">SIGN IN</a>
</div>


<div id="create">
	<a href="javascript:create();">CREATE ACCOUNT</a>
</div>




<div id="popupbox1">
	<form name="login" method="post" action="hey.php">
		<center><h3>SIGNIN INTO YOUR ACCOUNT</h3></center>
		Email Id:<input type="email" name="email1"  style="height:30px;width:300px;" placeholder="Email" required autocomplete="on">
		<br><br><br>
		Password:<input type="password" name="pswd" style="height:30px;width:200px;" placeholder="password" required>
		<br><bR>
		<a href="javascript:reset();" style="padding-left:120px;color:yellow;size:9;text-decoration:none;">FORGOT YOUR PASSWORD?</a>
		<bR><Br>
		<span style="padding-left:30px;"><input type="submit" class="button1" name="sign in" value="Sign in">
		<center><h3>or</h3></center>
		<a href="javascript:create();" style="color:yellow;text-decoration:none;padding-left:120px;size:11;">CREATE AN ACCOUNT</a>
		<div id="close1"><img src="img10.png" class="cross1" onClick="close1()"><div>
	</form>
</div>  


<div id="popupbox2">
	<form name="create" method="post" onSubmit="return validateform()" action="connectivity.php">
		First Name*:<input type="text" id="first" name="first" placeholder="first name" onblur="myFunction1()" autofocus autocomplete="on">
		<br><br>
		last Name*:<input type="text" name="last" id="last" placeholder="last name" onblur="myFunction2()" autofocus autocomplete="on">
		<br><br>
		Email Id*:<input type="email2" id="email2" name="emailvar" placeholder="you@example.com" size="40" autofocus autocomplete="on">
		<br><br>
		Password*:<input type="password" id="pswd" name="pswd2" autofocus onfocusout="chklength()" placeholder="password" >
		<br><br>
		Confirm password*:<input type="password" id="cpswd" name="cpswd" onfocusout="length()" placeholder="Confirm password" autofocus>
		<br><br>
		<center><input type="submit"  class="button1" value="CREATE ACCOUNT"></center>
		<div id="close2"><img src="img10.png" class="cross2" onClick="close2()"><div>
	</form>
</div>


<div id="deal">
	<a href="javascript:deal();">DEALS</a>
</div>


<div id="location">
	<a href="javascript:location();">FIND A FOODCENTER</a>
</div>

<div id="popupbox3">
	<p><font color="white" size="7" face="georgia">FIND YOUR LOCAL FOOD CENTER.</font></p>
	<form name="a" method="post">
		<input type="button" class="carryout" value="CARRYOUT"  onClick="getclick1(this)">
		<input type="button" class="delivery" value="DELIVERY" onClick="getclick2(this)">
	
	</form>
</div>

<div id="popupbox4">
	<form method="get">
		<p><font color="black" size="5" face="georgia">ENTER YOUR LOCATION TO FIND FOOD CENTER NEARBY.</font></p>
		<input list="cities" name="city" placeholder="CITY" class="city" required>
		<datalist id="cities">
			<option value="Mumbai"></option>
			<option value="Ahmedabad"></option>
			<option value="Banglore"></option>
			<option value="pune"></option>
			<option value="surat"></option>
			<option value="Mumbai"></option>
		</datalist>
		<span style="padding-left:20px;"><input list="states" name="state" placeholder="STATE" class="state" required>
		<datalist id="states">
			<option value="Maharashtra"></option>
			<option value="Gujarat"></option>
			<option value="Hyeradad"></option>
			<option value="hiui"></option>
			<option value="Gujarat"></option>
			<option value="Maharashtra"></option>
		</datalist>
		<span style="padding-left:20px;"><input type="submit" name="search" class="search" value="search" onSubmit="return search()">
		
		
	</form>
	
</div>

<div id="popupbox5">
	<form name="d" method="post">
		<p>ENTER THE ADDRESS WHERE YOU WANT THE ORDER DELIVERED.</p>
		<input type="text" name="address" placeholder="ENTER YOUR ADDRESS" id="address" required>
		<span style="paddinG-LEFT:30px;"><input type="TEXT" name="pincode" class="pincode" placeholder="ENTER PIN_CODE" maxlength="6" required><Br><br>
		<span style="paddinG-LEFT:200px;"><input type="submit" name="search" class="search" value="search" onSubmit="return search()">
	</form>
</div>

<div id="reset">
	<form name="efg" method="post" onSubmit="return hello()">
		<p>RESET YOUR PASSWORD</p>
        	<input type="email" name="email3" placeholder="you@example.com" id="email3" style="padding-left:30px;" required>
        	<br><br><input type="submit" name="submit" value="submit" style="background-color:red;color:black;cursor:pointer;">
       		<div id="close3"><img src="img10.png" class="cross3" onClick="close3()"></div>
	</form>

</div>

<div id="successfully">
	<h3>RESET YOUR PASSWORD</h3>	
	<p>PLEASE CHECK YOUR EMAIL ADDRESS FOR A LINK TO RESET PASSWORD.</p>
	<span style="padding-left:10px;"><button type="button" onClick="basic123.php" style="background-color:red;color:black;cursor:pointer;">OK</button>
</div>
	
<?php
if (array_key_exists('username', $_SESSION)) {
	
	echo '<script>document.getElementById("signin").style.visibility="hidden";</script>';
	echo '<script>document.getElementById("create").style.visibility="hidden";</script>';
	echo '<div id="welcome123">';
    echo 'Hello ' . $_SESSION["username"].'! | <a href="logout.php" style="color:white;font-size:17;text-decoration:none">Logout</a>';
	echo '</div>';
}
else {
    echo "Hello Guest!";
    
}
?>


</body>
</html>