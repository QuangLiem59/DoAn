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
		$tendn=$ngaylap=NULL;
		if(isset($_POST['them'])){
			if($_POST['tendn']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Mã Khách Hàng');</script>";
			}
			else{
				$tendn=$_POST['tendn'];
			}
			if($_POST['ngaylap']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Ngày Lập Đơn ');</script>";
			}
			else{
				$ngaylap=$_POST['ngaylap'];
			}
			if($tendn!=NULL&$ngaylap!=NULL){
				$kt=mysqli_query($con,"select * from khachhang where TENDN='$tendn'");
				if(mysqli_num_rows($kt)>0){
					mysqli_query($con,"insert into donhang values('','$tendn','$ngaylap','0')");
					echo "<script> alert ('Thêm Thành Công');</script>";
					echo "<script>window.location = 'qlsp.php'</script>";
				}
				else{
					echo "<script> alert ('Khách Hàng Không Tồn Tại');</script>";
					
				}
			}
		}
	?>
</head>
<body>
	<div class="c">
		<form method="post">
			<h1> THÊM ĐƠN ĐẶT HÀNG</h1>
			<div class="t">
				<label> Tên Khách Hàng </label></br>
				<input type="text" class="txt" name="tendn">
			</div>
			<div class="t">
				<label> Ngày Lập </label></br>
				<input type="date" class="txt" name="ngaylap">
			</div>
			<button class="them" name="them"> Thêm </button>
			<button class="them" name="reset"> Reset </button>
			<button class="them" name="back"><a href="qlsp.php" style="color: white;text-decoration: none;"> Trở Về </a></button>
		</form>
	</div>
</body>
</html>