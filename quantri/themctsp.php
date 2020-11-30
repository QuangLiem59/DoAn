<!DOCTYPE html>
<html>
<head>
	<title> Thêm Sản Phẩm </title>
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
        $chitiet=NULL;
        $masp=$_GET['ma'];
		$k="";
		if(isset($_POST['them'])){
			
			if($_POST['chitiet']==NULL){
				$k=$k.'Bạn Chưa Nhập Chi Tiết Sản Phẩm \n';
			}
			else{
				$chitiet=$_POST['chitiet'];
			}
			
			if($masp!=NULL&$chitiet!=NULL){
				mysqli_query($con,"insert into chitietsp values('','$masp','$chitiet')");
				echo "<script>alert ('Thêm Chi Tiết Sản Phẩm Thành Công !!!');</script>";
				$lc="chitietsp.php?ma=".$masp;
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
			<h1> THÊM CHI TIẾT SẢN PHẨM</h1>
			<div class="t">
				<label> Chi Tiết </label></br>
				<input type="text" class="txt" name="chitiet">
			</div>
			
			<button class="them" name="them"> Thêm </button>
			<button class="them" name="reset"> Reset </button>
			<button class="them" name="back"><a href="chitietsp.php?ma=<?php echo $masp ?>" style="color: white;text-decoration: none;"> Trở Về </a></button>
		</form>
	</div>
</body>
</html>