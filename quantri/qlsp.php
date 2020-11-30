<!DOCTYPE html>
<html>
<head>
	<title> Quản Lý Sản Phẩm </title>
	<meta charset="utf-8">
	<style type="text/css">
		}
		div{
			margin: auto;
	
			width: 100%;
		}
		h1{
			text-align: center;
			color: gray;

		}
		table{
			border-collapse: collapse;
			margin: auto;
			
		}
		.sp,.kh,.qt.gh,.ddh{
			max-width: 100%;
			overflow:scroll;
			
		}
		
		.sp table th,.kh table th,.qt table th,.gh table th,.ddh table th{
			padding: 5px 30px;
			text-align: center;
			vertical-align: center;
			background: green;
			color:white;
			font-size: 16px;
			font-weight: bold;
			font-family: MV Boli;
			border-radius:30px;
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
    	tr:last-child{
    		background: none;
    	}
    	button{
    		text-align: center;
    		font-size: 20px;
    		font-weight: bold;
    		padding: 5px 20px;
    		background: red;
    		color: white;
    		border-radius: 15px;
    		outline: none;
    		font-family: MV Boli;
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
    		margin: auto;
    		font-family: MV Boli;
    	}
    	a{
    		text-decoration: none;
    		color: white;
    		font-family: MV Boli;
    	}
    	img{
    		width: 30px;
    		height: 30px;
    	}
    	div.chinh{
    		width: 100%;
    		
    	}
    	.ds{
    		width: 100%;
    	}
    	.ds tr>th{
    		border-radius: 30px;
    		padding:20px 0;
    		width: 20%;
    		cursor: pointer;
    	}

	</style>
	<?php
		$con=mysqli_connect("localhost","root","","linhkien") or die (" Không Thể Kết Nối !!! ");
		mysqli_query($con,"SET NAMES'utf8'");
		$sp=mysqli_query($con,"select * from sanpham inner join nhasx on sanpham.Manhasx = nhasx.Manhasx 
		inner join noisx on sanpham.mansx=noisx.mansx inner join hinhanh on hinhanh.masp = sanpham.masp ");
		$kh=mysqli_query($con,"select * from khachhang");
		$qtri=mysqli_query($con,"select * from quantri");
		$ddh=mysqli_query($con,"select * from donhang inner join khachhang on khachhang.tendn=donhang.tendn");
	?>
	<script type="text/javascript" src="../jquery-ui/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".chinh>div").hide();
			$(".sanpham").click(function(){
				$(".sp").toggle(300);
				$(".chinh>div").not($(".sp")).hide(300);
			});
			$(".khachhang").click(function(){
				$(".kh").toggle(300);
				$(".chinh>div").not($(".kh")).hide(300);
			});
			$(".quantri").click(function(){
				$(".qt").toggle(300);
				$(".chinh>div").not($(".qt")).hide(300);
			});
			$(".dondathang").click(function(){
				$(".ddh").toggle(300);
				$(".chinh>div").not($(".ddh")).hide(300);
			});
		});
	</script>
	<?php
	$con = mysqli_connect("localhost","root","","linhkien") or die ("Không Thể Kết Nối !!!");
	mysqli_query($con,"SET NAMES'utf8'");
	session_start();
	if(isset($_SESSION['usernamea'])&& $_SESSION['usernamea']){
		$tk=$_SESSION['usernamea'];
		$qt=mysqli_query($con,"select * from quantri where TK='$tk'");
		$ten=mysqli_fetch_array($qt);
	}
	?>
</head>
<body>
	
	<div class="chinh">
		<h1> QUẢN TRỊ WEB </h1>
		<button class="themghct" style="position:absolute;top:10px;left:10px;"><a href="../html/index.php " style="color:white;"><i class="fa fa-home"></i> Home </a></button>
		<h2 style="position:absolute;top:5px;right:30px;font-size:40px;margin:auto;color:#5f5f79"><?php if( isset($_SESSION['usernamea'])&& $_SESSION['usernamea']){echo $ten['TenQT'];} ?></h2>
		<a href="../html/logoutad.php" style="position:absolute;top:35px;right:30px;font-size:25px;margin:auto;color:red"><?php if( isset($_SESSION['usernamea'])&& $_SESSION['usernamea']){echo 'Log Out';} ?></a>
		<table class="ds">
			<tr>
				<th class="sanpham"> SẢN PHẨM </th>
				<th class="khachhang"> KHÁCH HÀNG </th>
				<th class="quantri"> QUẢN TRỊ </th>
				<th class="dondathang"> ĐƠN ĐẶT HÀNG </th>
			</tr>
		</table>
		<!-- sanpham -->
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
								<th> Noi San Xuat </th>
								<th> Chi Tiết </th>
								<th> Hot </th>
								<th> New </th>
								<th> Sửa </th>
								<th> Xóa </th>
							</tr>
							<?php while ($r=mysqli_fetch_array($sp)){ ?>
							<tr>
								<td><?php echo $r['MaSP']; ?></td>
								<td><?php echo $r['TenSP']; ?></td>
								<td><?php echo $r['TenNSX']; ?></td>
								<td><?php echo $r['LoaiSP']; ?></td>
								<td><?php echo $r['Gia']; ?> $</td>
								<td><img src="../img/sanpham/<?php echo $r['LinkHA']; ?>"></td>
								<td><?php echo $r['DienGiai']; ?></td>
								<td><button><a href="<?php echo'chitietsp.php'.'?ma='.$r['MaSP'] ?>"> Chi Tiết </a></button></td>
								<td> <?php if($r['Hot']==1){echo 'X';} ?> </td>
								<td> <?php if($r['New']==1){echo 'X';} ?> </td>
								<td><button name="sua"><a href="<?php echo'sua.php'.'?ma='.$r['MaSP'] ?>"> Sửa </a></button></td>
								<td><button name="xoa"><a href="<?php echo'xoa.php'.'?ma='.$r['MaSP'].'&bang=sanpham'.'&cot=MaSP' ?>"> Xóa </a></button></td>
								
							</tr>
							<?php } ?>
							<tr>
								<td colspan="12"><button class="them"><a href="them.php"> Thêm </a></button></td>
							</tr>
						</table>
					</form>
				</div>
		
			<!-- khachhang -->
			
				<div class="kh">
					<form method="post">
						<h1> DANH SÁCH KHÁCH HÀNG</h1>
						<table>
							<tr>
								<th> Mã Khách Hàng </th>
								<th> Tên Khách Hàng </th>
								<th> Tên Dang Nhap </th>
								
								<th> Địa Chỉ </th>
								<th> SDT </th>
								
								<th> Mật Khẩu </th>
								<th> Sửa </th>
								<th> Xóa </th>
							</tr>
							<?php while ($r1=mysqli_fetch_array($kh)){ ?>
							<tr>
								<td><?php echo $r1['MAKH']; ?></td>
								<td><?php echo $r1['TENKH']; ?></td>
								<td><?php echo $r1['TENDN']; ?></td>
								
								<td><?php echo $r1['DIACHI']; ?></td>
								<td><?php echo $r1['SDT']; ?></td>
								
								<td><?php echo $r1['MATKHAU']; ?></td>
								<td><button name="sua"><a href="<?php echo'suakh.php'.'?ma='.$r1['MAKH'] ?>"> Sửa </a></button></td>
								<td><button name="xoa"><a href="<?php echo'xoa.php'.'?ma='.$r1['MAKH'].'&bang=khachhang'.'&cot=MAKH' ?>"> Xóa </a></button></td>
								
							</tr>
							<?php } ?>
							<tr>
								<td colspan="11"><button class="them"><a href="themkh.php"> Thêm </a></button></td>
							</tr>
						</table>
					</form>
				</div>
			
			<!-- quantri -->
		
				<div class="qt">
					<form method="post">
						<h1> THÔNG TIN QUẢN TRỊ VIÊN </h1>
						<table>
							<tr>
								
								<th> Tên Quản Trị Viên </th>
								<th> Tài Khoản</th> 
								<th> Mật Khẩu </th>
								<th> Sửa </th>
								<th> Xóa </th>
							</tr>
							<?php while ($r2=mysqli_fetch_array($qtri)){ ?>
							<tr>
								<td><?php echo $r2['TenQT']; ?></td>
								<td><?php echo $r2['TK']; ?></td>
								<td><?php echo $r2['MK']; ?></td>
								<td><button name="sua"><a href="<?php echo'suaqt.php'.'?ma='.$r2['TK'] ?>"> Sửa </a></button></td>
								<td><button name="xoa"><a href="<?php echo'xoa.php'.'?ma='.$r2['TK'].'&bang=quantri'.'&cot=TK' ?>"> Xóa </a></button></td>
								
							</tr>
							<?php } ?>
							<tr>
								<td colspan="7"><button class="them"><a href="themqt.php"> Thêm </a></button></td>
							</tr>
						</table>
					</form>
				</div>
			
			
			<!-- dondathang -->
		
				<div class="ddh">
					<form method="post">
						<h1> DANH SÁCH ĐƠN ĐẶT HÀNG</h1>
						<table>
							<tr>
								<th> Mã Đơn </th>
								<th> Tên Khách Hàng </th>
								<th> Ngay Lap </th>
								<th> Tổng Giá </th>
								<th> Chi Tiet </th>
								<th> Sửa </th>
								<th> Xóa </th>
							</tr>
							<?php while ($r4=mysqli_fetch_array($ddh)){ ?>
							<tr>
								<td><?php echo $r4['MaDH']; ?></td>
								<td><?php echo $r4['TENKH']; ?></td>
								<td><?php echo $r4['NgayLap']; ?></td>
								<td><?php echo $r4['TongTien']; ?> $</td>
								<td><button><a href="<?php echo'chitietdh.php'.'?ma='.$r4['MaDH'] ?>"> Chi Tiết </a></button></td>
								<td><button name="sua"><a href="<?php echo'suaddh.php'.'?ma='.$r4['MaDH'] ?>"> Sửa </a></button></td>
								<td><button name="xoa"><a href="<?php echo'xoa.php'.'?ma='.$r4['MaDH'].'&bang=donhang'.'&cot=MaDH' ?>"> Xóa </a></button></td>
								
							</tr>
							<?php } ?>
							<tr>
								<td colspan="10"><button class="them"><a href="themddh.php"> Thêm </a></button></td>
							</tr>
						</table>
					</form>
				</div>
			
	</div>
	
</body>
</html>