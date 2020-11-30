<!DOCTYPE html>
<html>
<head>
	<title> Chỉnh Sửa Sản Phẩm </title>
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
		.hinhanh{
			position:relative;
			width:520px;
			height:520px;
		}
		.hinhanh>img{
			width:500px;
			height:500px;
			position:absolute;
			top:10px;

		}
		.hinhanh>input{
			width:500px;
			height:500px;
			position:absolute;
			top:10px;
			z-index:2;
			opacity:0;
			cursor:pointer;
		}
    </style>
    	<?php
		$con=mysqli_connect("localhost","root","","linhkien") or die (" Không Thể Kết Nối !!! ");
		mysqli_query($con,"SET NAMES'utf8'");
        $ma=$_GET['ma'];
        $masp=$_GET['masp'];
		$ct=mysqli_query($con,"select * from chitietdh where MaDH='$ma' && MaSP='$masp'");
		$r=mysqli_fetch_array($ct);
        $sl=$r['SLmua'];
        
		if(isset($_POST['sua'])){
                $sl=$_POST['sl'];
                $sp=mysqli_query($con,"select Gia from sanpham where MaSP='$masp'");
                $fsp=mysqli_fetch_array($sp);
                $gia=$fsp['Gia'];
                $tt=$sl*$gia;
			if($sl!=NULL){
				mysqli_query($con,"update chitietdh set SLmua='$sl',ThanhTien='$tt' where MaDH='$ma' && MaSP='$masp'");
				$tongt=mysqli_fetch_array(mysqli_query($con,"select sum(ThanhTien) as tt from chitietdh where MaDH='$ma'"));
				mysqli_query($con,"update donhang set TongTien='".$tongt['tt']."' where MaDH='$ma'");
				echo "<script>alert ('Chỉnh Sửa Thành Công !!!');</script>";
                $lc="chitietdh.php?ma=".$ma;
				echo "<script>window.location = '$lc'</script>";
			}
			else{
				echo "<script>alert ('$k');</script>";
			}
		}
	?>
</head>
<body>
	<div class="c">
		<form method="post">
			<h1> CHỈNH SỬA CHI TIẾT ĐƠN HÀNG</h1>
			
			<div class="t">
				<label> Số Lượng </label></br>
				<input type="number" min="1" class="txt" name="sl" value="<?php echo $r['SLmua'] ?>">
			</div>
			<button class="them" name="sua"> Chỉnh Sửa </button>
			<button class="them" name="reset"> Reset </button>
			<button class="them" name="back"><a href="chitietsp.php?ma=<?php echo $masp ?>" style="color: white;text-decoration: none; "> Trở Về </a></button>
		</form>
	</div>
</body>
</html>