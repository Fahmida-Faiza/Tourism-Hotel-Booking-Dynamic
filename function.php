<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","travel");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;
}
$cn=mysqli_connect("localhost","root","","travel");
?>
</body>
</html>