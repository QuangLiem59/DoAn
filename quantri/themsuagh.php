<!DOCTYPE html>
<html>
<head>
	<title> Giỏ Hàng </title>
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
    	.them1{
    		text-align: center;
    		font-size: 15px;
    		font-weight: bold;
    		padding: 5px 25px;
    		background: red;
    		color: white;
    		border-radius: 25px;
    		outline: none;
    		font-family: MV Boli;
    	}
    	table{
			border-collapse: collapse;
			margin: auto;
			width: 100%;
		}
		th{
			padding: 10px 5px;
			text-align: center;
			vertical-align: center;
			background: green;
			color:white;
			font-size: 18px;
			font-weight: bold;
			font-family: MV Boli;
		}
		td{
			padding: 5px 5px;
			text-align: center;
			vertical-align: center;
			font-size: 17px;
			font-weight: bold;
			font-family: MV Boli;
		}
		tr:nth-child(odd){
        	background-color: #ddd;
    	}
    	img{
    		width: 30px;
    		height: 30px;
    	}
    	a{
    		text-decoration: none;
    		color: white;
    		font-family: MV Boli;
    	}
    	
	</style>
	<?php
		$con=mysqli_connect("localhost","root","","linhkiendientu") or die (" Không Thể Kết Nối !!! ");
		mysqli_query($con,"SET NAMES'utf8'");
		$makh=$sl=NULL;
		$url=$_GET['url'];
		if(isset($_GET['masp'])){
 			$masp=$_GET['masp'];
 			$mak=$_GET['makh'];
 			$knsp=mysqli_query($con,"select * from giohang where MAKH='$mak' and MASP='$masp'");
 				$r3=mysqli_fetch_array($knsp);
 		}
		if(isset($_POST['them'])){
									
			if($_POST['makh']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Mã Khách Hàng');</script>";
			}
			else{
				$makh=$_POST['makh'];
			}
			if($_POST['soluong']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Số Lượng');</script>";
			}
			else{
				$sl=$_POST['soluong'];
			}
			if($makh!=NULL&$sl!=NULL){
				$kt=mysqli_query($con,"select * from khachhang where MAKH='$makh'");
				if(mysqli_num_rows($kt)>0){
					header("location:chonsp.php"."?makh=".$makh."&sl=".$sl."&url=".$url);
				}
				else{
					echo "<script>alert ('Khách Hàng Không Tồn Tại');</script>";
				}
			}
		}
		if(isset($_POST['sua'])){
									
			if($_POST['makh']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Mã Khách Hàng');</script>";
			}
			else{
				$makh=$_POST['makh'];
			}
			if($_POST['soluong']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Số Lượng');</script>";
			}
			else{
				$sl=$_POST['soluong'];
			}
			if($makh!=NULL&$sl!=NULL){
				$kt=mysqli_query($con,"select * from khachhang where MAKH='$makh'");
				if(mysqli_num_rows($kt)>0){
					header("location:chonsp.php"."?makh=".$makh."&sl=".$sl."&url=".$url."&mak=".$mak."&mas=".$masp);
				}
				else{
					echo "<script>alert ('Khách Hàng Không Tồn Tại');</script>";
				}
			}
		}
		if(isset($_POST['xn'])){
			if($_POST['makh']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Mã Khách Hàng');</script>";
			}
			else{
				$makh=$_POST['makh'];
			}
			if($_POST['soluong']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Số Lượng');</script>";
			}
			else{
				$sl=$_POST['soluong'];
			}
			if($makh!=NULL&$sl!=NULL){
				$kt=mysqli_query($con,"select * from khachhang where MAKH='$makh'");
				if(mysqli_num_rows($kt)>0){
					$kt1=mysqli_query($con,"select * from giohang where MAKH='$makh' and MASP ='$masp'");
					if(mysqli_num_rows($kt1)>0){
						mysqli_query($con,"update giohang set SL='$sl' where MAKH='$makh' and MASP ='$masp' ");
						echo "<script> alert ('Sản Phẩm Đã Tồn Tại !! Sửa Số Lượng Sản Phẩm Thành Công');</script>";
						echo "<script>window.location = 'qlsp.php'</script>";
					}
					else{
						mysqli_query($con,"update giohang set SL='$sl',MAKH='$makh',MASP='$masp' where MAKH='$mak' and MASP ='$masp'");
						echo "<script> alert ('Sửa Thành Công');</script>";
						echo "<script>window.location = 'qlsp.php'</script>";
					}
				}
				else{
					echo "<script>alert ('Khách Hàng Không Tồn Tại');</script>";
				}
			}
		}
	?>
</head>
<body>
	<div class="c">
		<form method="post">
			<h1> GIỎ HÀNG </h1>
			<div class="t">
				<label> Mã Khách Hàng </label></br>
				<input type="text" class="txt" name="makh" value=<?php if(isset($_GET['masp'])){echo $mak;} ?>>
			</div>
			<div class="t">
				<label> Số Lượng </label></br>
				<input type="number" class="ha" name="soluong" value=<?php if(isset($_GET['masp'])){echo $r3['SL'];} ?>>
			</div>
			<?php
			if(isset($_GET['masp'])){
 				
 				
 				echo   "<table style='margin-top:25px;'>
							<tr>
								<th> Mã Khách Hàng </th>
								<th> Mã Sản Phẩm </th>
								<th> Tên Sản Phẩm </th>
								<th> Hình Ảnh </th>
								<th> Giá </th>
								<th> Số Lượng </th>
								<th> Thay Đổi Sản Phẩm </th>
							</tr>
							<tr>
								<td>";echo $r3['MAKH']; echo"</td>
								<td>";echo $r3['MASP']; echo"</td>
								<td>";echo $r3['TENSP']; echo"</td>
								<td><img src='../"; echo $r3['HINHANH']; echo"'></td>
								<td>";echo $r3['GIA']; echo" đ</td>
								<td>";echo $r3['SL']; echo"</td>
								<td><button class='them1' name='sua'>Thay Đổi</button></td>
							</tr>
						</table>
						<button class='them' name='xn'>Xác Nhận</button>";
 			} 
			else{
			echo "<button class='them' name='them'>Xác Nhận</button>";
			}
			?>
			<button class="them" name="reset"> Reset </button>
			<button class="them" name="back"><a href="qlsp.php" style="color: white;text-decoration: none;"> Trở Về </a></button>
		</form>
	</div>
</body>
</html>