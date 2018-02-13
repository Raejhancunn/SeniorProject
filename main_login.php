<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Door 2 Door Login</title>
</head>
<body>
	<table width="300" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
	<form name="form1" method="post" action="check_login.php">
	<td>
	<table width="100%" border="0" cellpadding="3" cellspacing="1"
	bgcolor="#FFFFFF">
	<tr>
	<td colspan="3" align=center><strong>Door 2 Door</strong></td>
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
	<td><input type="submit" name="btnLogin" value="Login"/></td>
	</tr>
	</table>
	</td>
	</form>
	</tr>
	</table>
	<div align=center>Need an account Register <a href="register.php">here</a></div>
</body>
</html>