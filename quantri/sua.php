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
		$sp=mysqli_query($con,"select * from sanpham where MaSP='$ma'");
		$hinhanh=mysqli_query($con,"select * from hinhanh where MaSP='$ma'");
		$rk=mysqli_fetch_array($hinhanh);
		$r=mysqli_fetch_array($sp);
		$nhsx=mysqli_query($con,"select * from nhasx");
		$nosx=mysqli_query($con,"select * from noisx");
		$masp=$tensp=$nhasx=$nsx=$loaisp=$gia=$sl=$tgbh=$ha=$hot=$new=NULL;
		$k="";
		if(isset($_POST['sua'])){
			
			if($_POST['tensp']==NULL){
				$k=$k.'Bạn Chưa Nhập Tên Sản Phẩm \n';
			}
			else{
				$tensp=$_POST['tensp'];
			}
			if($_POST['nhasx']==NULL){
				$k=$k.'Bạn Chưa Nhập Nhà Sản Xuất \n';
			}
			else{
				$nhasx=$_POST['nhasx'];
			}
			if($_POST['nsx']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Nơi Sản Xuất');</script>";
			}
			else{
				$nsx=$_POST['nsx'];
			}
			if($_POST['loaisp']==NULL){
				echo "<script>alert ('Bạn Chưa Nhập Loại Sản Phẩm ');</script>";
			}
			else{
				$loaisp=$_POST['loaisp'];
			}
			if($_POST['gia']==NULL){
				$k=$k.'Bạn Chưa Nhập Giá Sản Phẩm \n';
			}
			else{
				$gia=$_POST['gia'];
			}
			if($_POST['sl']==NULL){
				$k=$k.'Bạn Chưa Nhập Số Lượng Sản Phẩm \n';
			}
			else{
				$sl=$_POST['sl'];
			}
			if($_POST['tgbh']==NULL){
				$k=$k.'Bạn Chưa Nhập Thời Gian Bảo Hành \n';
			}
			else{
				$tgbh=$_POST['tgbh'];
			}
			
			if($_POST['ha']==NULL){
				$ha=$rk['LinkHA'];
			}
			else{
				$ha=$_POST['ha'];
			}
			if(isset($_POST['hot'])&&$_POST['hot']){
				$hot=1;
			}
			else{
				$hot=0;
			}
			if(isset($_POST['new'])&&$_POST['new']){
				$new=1;
			}
			else{
				$new=0;
			}
			if($tensp!=NULL&$nhasx!=NULL&$nsx!=NULL&$loaisp!=NULL&$gia!=NULL&$sl!=NULL&$tgbh!=NULL&$ha!=NULL){
				mysqli_query($con,"update sanpham set TenSP='$tensp',MaNhaSX='$nhasx',MaNSX='$nsx',LoaiSP='$loaisp',Gia='$gia',SL='$sl',TGBH='$tgbh',Hot=$hot,New=$new where MaSP='$ma'");
				mysqli_query($con,"update hinhanh set LinkHA='$ha' where MaSP='$ma'");
				echo "<script>alert ('Chỉnh Sửa Sản Phẩm Thành Công !!!');</script>";
				$lc="qlsp.php";
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
			<h1> CHỈNH SỬA SẢN PHẨM</h1>
			
			<div class="t">
				<label> Tên Sản Phẩm </label></br>
				<input type="text" class="txt" name="tensp" value="<?php echo $r['TenSP'] ?>">
			</div>
			<div class="t">
				<label> Nhà Sản Xuất </label></br>
				<select name="nhasx" class="h" >
				<?php while($nhs=mysqli_fetch_array($nhsx)){ ?>
					<option value="<?php echo $nhs['MaNhaSX'] ?>" <?php if($nhs['MaNhaSX']==$r['MaNhaSX']){echo "selected";} ?>><?php echo $nhs['TenNSX'] ?></option>
				<?php } ?>
				</select>
			</div>
			<div class="t">
				<label> Nơi Sản Xuất </label></br>
				<select name="nsx" class="h">
				<?php while($nos=mysqli_fetch_array($nosx)){ ?>
					<option value="<?php echo $nos['MaNSX'] ?>" <?php if($nos['MaNSX']==$r['MaNSX']){echo "selected";} ?>><?php echo $nos['DienGiai'] ?></option>
				<?php } ?>
				</select>
			</div>
			<div class="t">
				<label> Loại Sản Phẩm </label></br>
				<select name="loaisp" class="h" value="<?php echo $r['LoaiSP'] ?>">
					<option <?php if('CPU'==$r['LoaiSP']){echo "selected";} ?>>CPU</option>
					<option <?php if('Mainboard'==$r['LoaiSP']){echo "selected";} ?>>Mainboard</option>
					<option <?php if('VGA'==$r['LoaiSP']){echo "selected";} ?>>VGA</option>
					<option <?php if('Ram'==$r['LoaiSP']){echo "selected";} ?>>Ram</option>
					<option <?php if('HDD'==$r['LoaiSP']){echo "selected";} ?>>HDD</option>
					<option <?php if('SSD'==$r['LoaiSP']){echo "selected";} ?>>SSD</option>
				</select>
			</div>
			<div class="t">
				<label> Giá </label></br>
				<input type="number" min='1' class="txt" name="gia" value="<?php echo $r['Gia'] ?>">
			</div>
			<div class="t">
				<label> Số Lượng </label></br>
				<input type="number" min='1' class="txt" name="sl" value="<?php echo $r['SL'] ?>">
			</div>
			<div class="t">
				<label> Thời Gian Bảo Hành </label></br>
				<input type="number" min='1' class="txt" name="tgbh" value="<?php echo $r['TGBH'] ?>">
			</div>
			<div class="t">
				<label> Hình Ảnh </label></br>
				<div class="hinhanh">
				<img src="../img/sanpham/<?php echo $rk['LinkHA'] ?>" alt="ha">
				<input type="file" class="txt" name="ha">
				</div>
			</div>
			<div class="t">
				<label> Hot </label></br>
				<input type="checkbox" class="txt" name="hot" <?php if($r['Hot']==1){echo 'checked';} ?> >
			</div>
			<div class="t">
				<label> New </label></br>
				<input type="checkbox" class="txt" name="new" <?php if($r['New']==1){echo 'checked';} ?> >
			</div>
			<button class="them" name="sua"> Chỉnh Sửa </button>
			<button class="them" name="reset"> Reset </button>
			<button class="them" name="back"><a href="qlsp.php" style="color: white;text-decoration: none; "> Trở Về </a></button>
		</form>
	</div>
</body>
</html>