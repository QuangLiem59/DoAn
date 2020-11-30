<!DOCTYPE html>
<html>
<head>
	<title> Thêm Sản Phẩm Vào Giỏ Hàng </title>
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
		$sp=mysqli_query($con,"select * from sanpham");
		$makh=$_GET['makh'];
		$sl=$_GET['sl'];
		$url=$_GET['url'];
		$mak=$mas=NULL;
		if(isset($_GET['mak'])){
 			$mak=$_GET['mak'];
 		}
 		if(isset($_GET['mas'])){
 			$mas=$_GET['mas'];
 		}
	?>
	
</head>
<body>
	<div class="c">
					<div class="sp">
						<form method="post">
							<h1> DANH SÁCH SẢN PHẨM</h1>
							<table>
								<tr>
									<th> Mã Sản Phẩm </th>
									<th> Tên Sản Phẩm </th>
									<th> Nhà Cung Cấp </th>
									<th> Loại Sản Phẩm </th>
									<th> Giá </th>
									<th> Hình Ảnh </th>
									<th> Mô Tả </th>
									<th> Chi Tiết </th>
									<th> Sửa </th>
								</tr>
								<?php while ($r=mysqli_fetch_array($sp)){ ?>
								<tr>
									<td><?php echo $r['MASP']; ?></td>
									<td><?php echo $r['TENSP']; ?></td>
									<td><?php echo $r['NHACC']; ?></td>
									<td><?php echo $r['LOAISP']; ?></td>
									<td><?php echo $r['GIA']; ?> đ</td>
									<td><img src="../<?php echo $r['HINHANH']; ?>"></td>
									<td><?php echo $r['MOTA']; ?></td>
									<td><?php echo $r['CHITIET']; ?></td>
									<td><button class="them1" name="chon"><a href="<?php echo $url.'?masp='.$r['MASP'].'&makh='.$makh.'&sl='.$sl.'&mak='.$mak.'&mas='.$mas ?>"> Chọn </a></button></td>
								</tr>
								<?php } ?>
							</table>
						</form>
					</div>
			<button class="them" name="back"><a href="qlsp.php" style="color: white;text-decoration: none;"> Trở Về </a></button>
	</div>
</body>
</html>