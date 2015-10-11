<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SESSION</title>
</head>
<body>
<?php
	session_start();
	$_SESSION["name"] = "Hoang Manh Hai";

?>
	<b><a href= "session2.php">Click here</a></b>
	
</body>
</html>
