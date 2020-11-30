<?php
	$con=mysqli_connect("localhost","root","","linhkiendientu") or die (" Không Thể Kết Nối !!! ");
	mysqli_query($con,"SET NAMES'utf8'");
	$masp=$_GET['masp'];
	$makh=$_GET['makh'];
	$mak=$_GET['mak'];
	$mas=$_GET['mas'];
	$sl=$_GET['sl'];
	$sp=mysqli_query($con,"select * from sanpham where MASP='$masp'");
	$r=mysqli_fetch_array($sp);
	$ten=$r['TENSP'];
	$ha=$r['HINHANH'];
	$gia=$r['GIA'];
	$kt=mysqli_query($con,"select * from giohang where MASP='$masp' and MAKH='$makh'");
		if(mysqli_num_rows($kt)>0){
			mysqli_query($con,"update giohang set SL='$sl' where MAKH='$makh' and MASP ='$masp' ");
			echo "<script> alert ('Sản Phẩm Đã Tồn Tại !! Sửa Số Lượng Sản Phẩm Thành Công');</script>";
			echo "<script>window.location = 'qlsp.php'</script>";
		}
		else{
			mysqli_query($con,"update giohang set SL='$sl',MAKH='$makh',MASP='$masp',TENSP='$ten',HINHANH='$ha',GIA='$gia' where MAKH='$mak' and MASP='$mas'");
			echo "<script> alert ('Sửa Thành Công');</script>";
			echo "<script>window.location = 'qlsp.php'</script>";
		}
	
?>