<?php
	$con=mysqli_connect("localhost","root","","linhkien") or die (" Không Thể Kết Nối !!! ");
	mysqli_query($con,"SET NAMES'utf8'");
	$ma=$_GET['ma'];
	$bang=$_GET['bang'];
	$cot=$_GET['cot'];
	if($bang=='sanpham'){
		$d=mysqli_query($con,"delete from ".$bang." where ".$cot."='".$ma."'") or die ("Lỗi Truy Vấn !!!");
		mysqli_query($con,"delete from chitietsp where MaSP='$ma'");
		mysqli_query($con,"delete from hinhanh where MaSP='$ma'");
	}
	else{
		if($bang=='donhang'){
			$d=mysqli_query($con,"delete from ".$bang." where ".$cot."='".$ma."'") or die ("Lỗi Truy Vấn !!!");
			mysqli_query($con,"delete from chitietdh where MaDH='$ma'");
		}else{
			if($bang=='chitietdh'){
				$madh=$_GET['madh'];
				$d=mysqli_query($con,"delete from ".$bang." where ".$cot."='".$ma."' and MaDH='$madh'") or die ("Lỗi Truy Vấn !!!");
			}
			else{
				$d=mysqli_query($con,"delete from ".$bang." where ".$cot."='".$ma."'") or die ("Lỗi Truy Vấn !!!");
			}
		}
	}
	if($d){
		echo "<script>alert ('Xóa Thành Công !!!');</script>";
		echo "<script>location.href = document.referrer</script>";
	}
?>