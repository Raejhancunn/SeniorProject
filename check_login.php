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

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($con, $myusername);
$mypassword = mysqli_real_escape_string($con, $mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and
password='$mypassword'";
$result=mysqli_query($con, $sql);
$count=mysqli_num_rows($result);

if($count==1){
$_SESSION['username']=$myusername;

$sql="SELECT ID FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$_SESSION['ID']=$row['ID'];
$_SESSION['name']=$row['Name'];
$_SESSION['phone']=$row['Phone'];
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>