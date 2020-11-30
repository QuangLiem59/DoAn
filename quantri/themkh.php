<!DOCTYPE html>
<html>
<head>
	<title> Thêm Khách Hàng </title>
	<meta charset="utf-8">
	<style type="text/css">
		.c{
			margin: auto;
			width: 80%;

		}
		.t{
			margin: auto;
			width: 80%;
		}
		h1{
			text-align: center;
			color: gray;
		}
		.txt {
			height: 40px;
			padding: 0px 15px;
			border: 1px solid #E4E7ED;
			background-color: #FFF;
			width: 90%;
			margin: 5px 5px;
		}
		.ha{
			padding: 10px 15px;
			font-family: MV Boli;
			font-weight: bold;
			font-size: 18px;
			outline: none;
			cursor: pointer;
		}
		.h{
			padding: 10px 15px;
			font-family: MV Boli;
			font-weight: bold;
			font-size: 15px;
			outline: none;
			cursor: pointer;
			margin: 10px 0px;
		}
		label{
			font-size: 20px;
			font-family: MV Boli;
			font-weight: bold;
			margin:15px;
		}
		.them{
    		text-align: center;
    		font-size: 30px;
    		font-weight: bold;
    		padding: 5px 50px;
    		background: red;
    		color: white;
    		border-radius: 25px;
    		outline: none;
    		margin: 20px 40%;
    		font-family: MV Boli;
    	}
	</style>
	<?php
		$con=mysqli_connect("localhost","root","","linhkien") or die (" Không Thể Kết Nối !!! ");
		mysqli_query($con,"SET NAMES'utf8'");
		$tenkh=$tk=$dc=$sdt=$mk=NULL;
		if(isset($_POST['them'])){
			if($_POST['tenkh']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Tên');</script>";
			}
			else{
				$tenkh=$_POST['tenkh'];
			}
			if($_POST['tk']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Tài Khoản');</script>";
			}
			else{
				$tk=$_POST['tk'];
			}
			if($_POST['diachi']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Địa Chỉ');</script>";
			}
			else{
				$dc=$_POST['diachi'];
			}
			if($_POST['sdt']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Số Điện Thoại');</script>";
			}
			else{
				$sdt=$_POST['sdt'];
			}
			if($_POST['matkhau']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Mật Khẩu');</script>";
			}
			else{
				$mk=$_POST['matkhau'];
			}
			if($tenkh!=NULL&$tk!=NULL&$dc!=NULL&$sdt!=NULL&$mk!=NULL){
				$kt=mysqli_query($con,"select TENDN from khachhang where TENDN='$tk'");
				if(mysqli_num_rows($kt)==0){
					mysqli_query($con,"insert into khachhang values('','$tenkh','$sdt','$dc','$tk','$mk')");
					echo "<script> alert ('Thêm Thành Công');</script>";
					echo "<script>window.location = 'qlsp.php'</script>";
				}
				else{
					echo "<script> alert ('Tài Khoản Đã Tồn Tại');</script>";
					
				}
			}
		}
	?>
</head>
<body>
	<div class="c">
		<form method="post">
			<h1> THÊM KHÁCH HÀNG</h1>
			<div class="t">
				<label> Tên Tài Khoản </label></br>
				<input type="text" class="txt" name="tk">
			</div>
			<div class="t">
				<label> Tên Khách Hàng </label></br>
				<input type="text" class="txt" name="tenkh">
			</div>
			<div class="t">
				<label> Địa Chỉ </label></br>
				<input type="text" class="txt" name="diachi">
			</div>
			<div class="t">
				<label> Số Điện Thoại </label></br>
				<input type="number" class="ha" name="sdt">
			</div>
			<div class="t">
				<label> Mật Khẩu </label></br>
				<input type="password" class="txt" name="matkhau">
			</div>
			<button class="them" name="them"> Thêm </button>
			<button class="them" name="reset"> Reset </button>
			<button class="them" name="back"><a href="qlsp.php" style="color: white;text-decoration: none;"> Trở Về </a></button>
		</form>
	</div>
</body>
</html>