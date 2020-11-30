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
        $masp=$_GET['ma'];
		$ct=mysqli_query($con,"select * from chitietsp where MaSP='$masp'");
	?>
	<script type="text/javascript" src="../jquery-ui/jquery-3.3.1.js"></script>
	
</head>
<body>
	
	<div class="chinh">
		<!-- sanpham -->
				<div class="sp">
					<form method="post">
						<h1> CHI TIẾT SẢN PHẨM</h1>
						<table>
							<tr>
								<th> Mã Sản Phẩm </th>
								<th> Chi Tiết </th>
								<th> Sửa </th>
								<th> Xóa </th>
							</tr>
							<?php while ($r=mysqli_fetch_array($ct)){ ?>
							<tr>
								<td><?php echo $r['MaSP']; ?></td>
								<td><?php echo $r['CHITIET'] ?></td>
								<td><button name="sua"><a href="<?php echo'suactsp.php'.'?ma='.$r['MaCT'].'&masp='.$masp ?>"> Sửa </a></button></td>
								<td><button name="xoa"><a href="<?php echo'xoa.php'.'?ma='.$r['MaCT'].'&bang=chitietsp'.'&cot=MaCT' ?>"> Xóa </a></button></td>
								
							</tr>
							<?php } ?>
							<tr>
								<td colspan="2" ><button class="them"><a href="<?php echo'themctsp.php'.'?ma='.$masp ?>"> Thêm </a></button></td>
								<td colspan="2"><button class="them" name="back"><a href="qlsp.php" style="color: white;text-decoration: none;"> Trở Về </a></button></td>
							</tr>
						</table>
					</form>
				</div>
	</div>
	
</body>
</html>