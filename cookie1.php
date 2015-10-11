<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MO DAU VE COOKIE</title>
</head>
<body>
<?php
setcookie("un","bconline",time()+ 60*60*24*30); // luu trong 30 ngày
setcookie("lasttime", time(),time+60*60*24*30);
?>

	
</body>
</html>