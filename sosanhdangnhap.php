<?php
	$tdn = $_POST['tendangnhap'];
	echo $tdn;
	$tk= $_POST['matkhaudangnhap'];
	echo $tk;
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
 	echo $dulieu['tenadmin'];
 	echo $tdn;
 	if(strlen($tdn == $dulieu['tenadmin']))
		 echo "DANG NHAP THANH CONG";
	else($tdn|| $dulieu['tenadmin']);
		echo "dang nhap khong thanh cong";

		?>
	

	<?php 
}
	

	mysql_close(); // dong lai
?>
