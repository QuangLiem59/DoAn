<?php
	$con=mysqli_connect("localhost","root","","linhkiendientu") or die (" Không Thể Kết Nối !!! ");
	mysqli_query($con,"SET NAMES'utf8'");
	$masp=$_GET['masp'];
	$makh=$_GET['makh'];
	$sl=$_GET['sl'];
	$sp=mysqli_query($con,"select * from sanpham where MASP='$masp'");
	$r=mysqli_fetch_array($sp);
	$ten=$r['TENSP'];
	$ha=$r['HINHANH'];
	$gia=$r['GIA'];
	$kt=mysqli_query($con,"select * from giohang where MASP='$masp' and MAKH='$makh'");
	if(mysqli_num_rows($kt)==0){
		mysqli_query($con,"insert into giohang values('$makh','$masp','$ten','$ha','$gia','$sl')");
		echo "<script> alert ('Thêm Thành Công');</script>";
		echo "<script>window.location = 'qlsp.php'</script>";
	}
	else{
		echo "<script> alert ('Sản Phẩm Đã Tồn Tại');</script>";
		echo "<script>location.href = document.referrer</script>";
	}
?>