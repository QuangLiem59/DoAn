<!DOCTYPE html>
<html>
<head>
	<title> Chỉnh Sửa Quản Trị </title>
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
    		margin: 20px 37%;
    		font-family: MV Boli;
    		cursor: pointer;
    		outline: none;
    	}
    </style>
    	<?php
		$con=mysqli_connect("localhost","root","","linhkien") or die (" Không Thể Kết Nối !!! ");
		mysqli_query($con,"SET NAMES'utf8'");
		$ma=$_GET['ma'];
		$qt=mysqli_query($con,"select * from quantri where TK='$ma'");
		$r=mysqli_fetch_array($qt);
		$ten=$tk=$mk=NULL;
		if(isset($_POST['sua'])){
			if($_POST['tenkh']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Tên');</script>";
			}
			else{
				$ten=$_POST['tenkh'];
			}
			if($_POST['tk']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Tên Tài Khoản');</script>";
			}
			else{
				$tk=$_POST['tk'];
			}
			if($_POST['matkhau']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Mật Khẩu');</script>";
			}
			else{
				$mk=$_POST['matkhau'];
			}
			if($ten!=NULL&$tk!=NULL&$mk!=NULL){
				$kt=mysqli_query($con,"select TK from quantri where TK='$tk'");
				if(mysqli_num_rows($kt)==0){
					mysqli_query($con,"update quantri set TK='$tk',MK='$mk',TenQT='$ten' where TK='$ma'");
					echo "<script> alert ('Chỉnh Sửa Thành Công');</script>";
					echo "<script>window.location = 'qlsp.php'</script>";
				}
				else{
					echo "<script> alert ('Quản Trị Viên Đã Tồn Tại');</script>";
					
				}
			}
		}
	?>
</head>
<body>
	<div class="c">
		<form method="post">
			<h1> CHỈNH SỬA THÔNG TIN QUẢN TRỊ VIÊN</h1>
			<div class="t">
				<label> Tên Quản Trị Viên </label></br>
				<input type="text" class="txt" name="tenkh" value="<?php echo $r['TenQT'] ?>">
			</div>
			<div class="t">
				<label> Tên Tài Khoản </label></br>
				<input type="text" class="txt" name="tk" value="<?php echo $r['TK'] ?>">
			</div>
			<div class="t">
				<label> Mật Khẩu </label></br>
				<input type="password" class="txt" name="matkhau" value="<?php echo $r['MK'] ?>">
			</div>
			<button class="them" name="sua"> Chỉnh Sửa </button>
			<button class="them" name="reset"> Reset </button>
			<button class="them" name="back"><a href="qlsp.php" style="color: white;text-decoration: none;"> Trở Về </a></button>
		</form>
	</div>
</body>
</html>