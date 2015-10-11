<?php
	$tdn = $_POST['tendangnhap'];
	$tk= $_POST['matkhaudangnhap'];
	mysql_connect("localhost","admin1","123456");
	mysql_select_db("admin");
	$traloi = mysql_query("SELECT * FROM dangnhap");
	while($dulieu=mysql_fetch_array($traloi))
{
	?> 

	<strong>Chao Mung Trang Admin</strong> 
	<?php 
	echo $dulieu['tenadmin'];?>
	Mat Khau: <?php echo $dulieu['mkadmin'];
	?> 
	<br>
	<?php
 	if(strcmp($tdn, $dulieu['tenadmin'])==0 )
 		{
 			if(strcmp($tk, $dulieu['mkadmin'])==0)
				 echo "DANG NHAP THANH CONG";
			else
				 echo "Đăng Nhập không Thành Công";
		}

		?>
	

	<?php 
}
	

	mysql_close(); // dong lai
?>
