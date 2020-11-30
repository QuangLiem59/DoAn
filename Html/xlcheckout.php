<?php 
	$con = mysqli_connect("localhost","root","","linhkien") or die ("Không Thể Kết Nối !!!");
    mysqli_query($con,"SET NAMES'utf8'");
    session_start();
    $tkkh=$_SESSION['username'];
    $dh=mysqli_query($con,"select * from giohang inner join chitietgh on giohang.magh=chitietgh.magh inner join sanpham on chitietgh.masp=sanpham.masp inner join khachhang on giohang.tendn=khachhang.tendn where giohang.TenDN='$tkkh'");
    $donh=mysqli_fetch_array($dh);
    $chitietgh=mysqli_query($con,"select * from chitietgh inner join giohang on chitietgh.MaGH=giohang.MaGH where TenDN='$tkkh'");
    $tim  = mysqli_query($con,"SELECT CURDATE() as t");
    $time=mysqli_fetch_array($tim);
    $tt=$donh['TongTien'];
    if(mysqli_num_rows($dh)>0){
        $ktr=mysqli_query($con,"select * from donhang where TenDN='$tkkh'");
        if(mysqli_num_rows($ktr)>0){
            echo "<script>alert ('Đơn Hàng Đang Được Xủ Lý !!!');</script>";
    $lc="checkout.php";
				echo "<script>window.location = '$lc'</script>";
        }
        else{
        mysqli_query($con,"INSERT INTO donhang VALUES ('','$tkkh','".$time['t']."',$tt)");
        $getdh=mysqli_query($con,"select * from donhang where TenDN='$tkkh'");
    $g=mysqli_fetch_array($getdh);
    $madh=$g['MaDH'];
    $ar="";
    while($r2=mysqli_fetch_array($chitietgh)){
        $ar="('$madh','".$r2['MaSP']."','".$r2['SLmua']."','".$r2['ThanhTien']."')";
        mysqli_query($con,"INSERT INTO chitietdh VALUES $ar");
	};
    echo "<script>alert ('Dat Hang Thành Công !!!');</script>";
    $lc="checkout.php";
                echo "<script>window.location = '$lc'</script>";
}
    }
    else{
        echo "<script>alert ('Gio Hang Rong !!!');</script>";
    $lc="checkout.php";
				echo "<script>window.location = '$lc'</script>";
    
    }
?>