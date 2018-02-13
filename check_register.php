<?php
session_start();
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="door2door"; // Database name
	$tbl_name="accounts"; // Table name

// Connect to server and select database.
	$con=mysqli_connect($host,$username, $password)or
	die("cannot connect");
	mysqli_select_db($con, $db_name)or die("cannot select DB");

// clean user inputs to prevent sql injections
	$name = trim($_POST['myname']);
	$name = strip_tags($name);
	$name = htmlspecialchars($name);

	$email = trim($_POST['myemail']);
	$email = strip_tags($email);
	$email = htmlspecialchars($email);
	
	$phone = trim($_POST['myphone']);
	$phone = strip_tags($phone);
	$phone = htmlspecialchars($phone);

	$user = trim($_POST['myusername']);
	$user = strip_tags($user);
	$user = htmlspecialchars($user);

	$pass = trim($_POST['mypassword']);
	$pass = strip_tags($pass);
	$pass = htmlspecialchars($pass);

	$error = false;
	$nameError="";
	$emailError="";
	$phoneError="";
	$passError="";
// basic name validation
	if (empty($name)) {
   $error = true;
   $nameError = "Please enter your full name. ";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "Name must have atleat 3 characters. ";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Name must contain alphabets and space. ";
  }
  
//basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address. ";
  } else {
// check email exist or not
   $query = "SELECT Email FROM accounts WHERE Email='$email'";
   $result = mysqli_query($con, $query);
   $count = mysqli_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use. ";
   }
  }
//phone number validation
	if(empty($phone)){
	$error = true;
	$phoneError = "Please enter a 9-digit phone number";
//check for exactly 9 digits
	if(strlen($phone)!=9){
		$error = true;
		$phoneError = "Please enter a 9-digit phone number";
	}
//check phone exist or not
	$query = "SELECT Phone FROM accounts WHERE Phone='$phone'";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	if($count!=0){
		$error = true;
		$phoneError = "Provided Phone Number is already in user. ";
	}
  }
// password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password. ";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters. ";
  }
//check for any errors
  if($error){	
	  $errorMsg="";
	  $errorMsg.=$nameError;
	  $errorMsg.=$emailError;
	  $errorMsg.=$phoneError;
	  $errorMsg.=$passError;
  echo '<html>
		<header>
		</header>
		<body style="padding-top:200px;">
		<p align=center style="font-size:30px;"><span style="color:red">Error: </span>', $errorMsg,'</p>
		</body>
		</html>';
  } else { //If no error proceed to insert data to table
  $query=("INSERT INTO accounts (Username, Password, Name, Email, Phone) 
  VALUES ('$user','$pass','$name','$email','$phone')");
  
  if(mysqli_query($con, $query)) {
    //$_SESSION['user'] = $row['ID'];
	echo '<html>
	<header>
	</header>
	<body>
	<p align=center style="font-size:45px;"><span style="color:green">Success:</span> Account Created!</p>
	</body>
	</html>';
    //header("Location: main_login.php");
   } else {
    $errorMsg = "Incorrect Credentials, Try again...";
	echo '<html>
	<header>
	</header>
	<body style="padding-top:200px;">
	<p align=center style="font-size:30px;"><span style="color:red">Error: </span>', $errorMsg,'</p>
	</body>
	</html>';
   }
  }
?>