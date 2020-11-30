<?php
$con = mysqli_connect("localhost","root","","linhkien") or die ("Không Thể Kết Nối !!!");
mysqli_query($con,"SET NAMES'utf8'");
session_start();
$masp=$_GET['masp'];
$sp=mysqli_query($con,"select * from sanpham where MaSP='$masp'");
$gsp=mysqli_fetch_array($sp);
$giasp=$gsp['Gia'];
$makh=$_SESSION['username'];

$getgh=mysqli_query($con,"select * from giohang where TenDN='$makh'");
    $g=mysqli_fetch_array($getgh);
    $magh=$g['MaGH'];
    $ktrsl=mysqli_query($con,"select * from chitietgh where MaGH='$magh'");
if(mysqli_num_rows($ktrsl)==1){
    $ktslsp=mysqli_query($con,"select * from chitietgh where MaSP='$masp' and MaGH='$magh'");
        $k=mysqli_fetch_array($ktslsp);
        $sl=$k['SLmua'];
    if($sl==1){
    mysqli_query($con,"DELETE FROM chitietgh WHERE MaGH='$magh'");
    mysqli_query($con,"DELETE FROM giohang WHERE TenDN='$makh'");
				echo "<script>window.history.back()</script>";
    }
    else{
        mysqli_query($con,"UPDATE chitietgh SET SLmua=SLmua-1,ThanhTien=$giasp*SLmua WHERE MaSP='$masp' ");
        $tong=mysqli_query($con,"select sum(ThanhTien) as T from chitietgh where MaGH='$magh'");
        $t=mysqli_fetch_array($tong);
        $tt=$t['T'];
        mysqli_query($con,"UPDATE giohang SET TongTien=$tt WHERE TenDN='$makh'");
				echo "<script>window.history.back()</script>";
    }
}
else{
    $ktslsp=mysqli_query($con,"select * from chitietgh where MaSP='$masp' and MaGH='$magh'");
        $k=mysqli_fetch_array($ktslsp);
        $sl=$k['SLmua'];
    if($sl==1){
    mysqli_query($con,"DELETE FROM chitietgh WHERE MaSP='$masp' and MaGH='$magh'");
    $tong=mysqli_query($con,"select sum(ThanhTien) as T from chitietgh where MaGH='$magh'");
        $t=mysqli_fetch_array($tong);
        $tt=$t['T'];
        mysqli_query($con,"UPDATE giohang SET TongTien=$tt WHERE TenDN='$makh'");
				echo "<script>window.history.back()</script>";
    }
    else{
        mysqli_query($con,"UPDATE chitietgh SET SLmua=SLmua-1,ThanhTien=$giasp*SLmua WHERE MaSP='$masp' and MaGH='$magh' ");
        $tong=mysqli_query($con,"select sum(ThanhTien) as T from chitietgh where MaGH='$magh'");
        $t=mysqli_fetch_array($tong);
        $tt=$t['T'];
        mysqli_query($con,"UPDATE giohang SET TongTien=$tt WHERE TenDN='$makh'");
				echo "<script>window.history.back()</script>";
    }
}
                          
?>