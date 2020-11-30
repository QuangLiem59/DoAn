<?php
	$con=mysqli_connect("localhost","root","","linhkiendientu") or die (" Không Thể Kết Nối !!! ");
	mysqli_query($con,"SET NAMES'utf8'");
	$makh=$_GET['makh'];
	$masp=$_GET['masp'];
	$d=mysqli_query($con,"delete from giohang where MAKH=".$makh." and MASP=".$masp) or die ("Lỗi Truy Vấn !!!");
	if($d){
		echo "<script>alert ('Xóa Thành Công !!!');</script>";
		echo "<script>location.href = document.referrer</script>";
	}
?>