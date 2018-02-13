<?php
session_start();
echo $_SESSION['ID'];
?>
<html>
<head>
<title>Door 2 Door Home</title>
</head>
<body>
<?php
//echo '<div>', $_SESSION['ID'], '</div>';
?>
	<table width="300" align="center" cellpadding="20" cellspacing="1">
	<tr>
	<td colspan="2" align=center><span style="font-size:40px">Welcome<?php echo $_SESSION['name']; ?>!</span>
	</td>
	</tr>
	<tr>
	<td><input type="submit" name="btnCreate" value="Create/Update Student Info" style="height:70px; width:250px;" 
	onclick="window.location.href='http://localhost/door2door/job_user.php'"/></td>
	<td><input type="submit" name="btnSearch" value="Search Student Info" style="height:70px; width:250px;" 
	onclick="window.location.href='http://localhost/door2door/job_provider.php'"/></td>
	</tr>
	<tr>
	<td colspan="2"><textarea id="notify" cols="75" rows="10" readOnly="true">No Notifications</textarea>
	</td>
	</tr>
	</table>
</body>
<script>
var text = document.getElementById("");
</script>
</html>
