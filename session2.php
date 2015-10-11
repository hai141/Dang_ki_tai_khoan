<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SESSION 2</title>
</head>
<body>
	<?php
	session_start();
	echo "Ten cua ban la <b>";
	echo $_SESSION['name'];
	?>
	
</body>
</html>