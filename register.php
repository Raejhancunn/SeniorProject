<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Door 2 Door Registration</title>
</head>
<body>
	<table width="300" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
	<form name="form1" method="post" action="check_register.php">
	<td>
	<table width="100%" border="0" cellpadding="3" cellspacing="1"
	bgcolor="#FFFFFF">
	<tr>
	<td colspan="3" align=center><strong>Door 2 Door</strong></td>
	</tr>
	<tr>
	<td>Name</td>
	<td>:</td>
	<td><input name="myname" type="text" id="myname"/></td>
	</tr>
	<tr>
	<td>Email</td>
	<td>:</td>
	<td><input name="myemail" type="text" id="myemail" /></td>
	</tr>
	<tr>
	<td>Phone Number</td>
	<td>:</td>
	<td><input name="myphone" type="number" id="myphone" value="1235556789" max="9999999999" min="0"/></td>
	</tr>
	<tr>
	<td width="78">Username</td>
	<td width="6">:</td>
	<td width="294"><input name="myusername" type="text" id="myusername" autocomplete="off"/>
	</td>
	</tr>
	<tr>
	<td>Password</td>
	<td>:</td>
	<td><input name="mypassword" type="password" id="mypassword"/></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td><input type="submit" name="btnRegister" value="Register"/></td>
	</tr>
	</table>
	</td>
	</form>
	</tr>
	</table>
</body>
</html>