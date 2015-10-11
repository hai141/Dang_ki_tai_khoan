<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>hai</title>
</head>
<body>


	 Chào Mừng đến với trang đăng kí<br>
	<form action="bai4.html" method=POST >
	tên đăng nhập: <br>
	<input type = text name = "tendangnhap"> <br> 
	Nhập vào Mật khẩu của bạn:<br>
	<input type=password name="matkhaudangnhap1" align = center> <br>
	Nhập lai mật khẩu của bạn<br>
	<input type=password name="matkhaudangnhap2" align = center> <br>
	<input type="checkbox"> Chấp nhập điều khoản yêu cầu
	<input type= submit value = "SUBMIT DATA">

	</form> 
	
	<?php
	// upload len database admin;
	mysql_connect("localhost","admin1","123456");
	mysql_select_db("admin");
	mysql_query("SELECT * FROM dangnhap");
	//mysql_query("insert into dangnhap(tenadmin,mkadmin) values(tendangnhap,matkhaudangnhap2)";) 
	?>
</body>
</html>