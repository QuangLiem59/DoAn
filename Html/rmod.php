<?php 
	$con = mysqli_connect("localhost","root","","linhkien") or die ("Không Thể Kết Nối !!!");
    mysqli_query($con,"SET NAMES'utf8'");
    session_start();
    $madh=$_GET['id'];
    mysqli_query($con,"DELETE FROM donhang WHERE MaDH='$madh'");
    mysqli_query($con,"DELETE FROM chitietdh WHERE MaDH='$madh'");
    echo "<script>window.history.back()</script>";
?>