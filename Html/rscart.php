<?php 
	$con = mysqli_connect("localhost","root","","linhkien") or die ("Không Thể Kết Nối !!!");
    mysqli_query($con,"SET NAMES'utf8'");
    session_start();
    $magh=$_GET['ma'];
    mysqli_query($con,"DELETE FROM giohang WHERE MaGH='$magh'");
    mysqli_query($con,"DELETE FROM chitietgh WHERE MaGH='$magh'");
    echo "<script>window.history.back()</script>";
?>