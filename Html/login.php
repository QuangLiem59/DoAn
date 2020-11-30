<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    $con = mysqli_connect("localhost","root","","linhkien") or die ("Không Thể Kết Nối !!!");
			mysqli_query($con,"SET NAMES'utf8'");
    
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo  "<script>alert('Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu!');</script><br/>";
        echo "<script>window.location = 'http://localhost/lk/Html/index.php'</script>";
        exit;
    }
    //Kiểm tra tên đăng nhập có tồn tại không
    
     $admin = mysqli_query( $con,"SELECT * FROM quantri WHERE TK='$username'");
     $query = mysqli_query( $con,"SELECT * FROM khachhang WHERE TenDN='$username'");
    
    if (mysqli_num_rows($query) == 0 && mysqli_num_rows($admin) == 0) {
        echo  "<script>alert('Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.!');</script><br/>";
        echo "<script>window.location = 'http://localhost/lk/Html/index.php'</script>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
    $row2 = mysqli_fetch_array($admin);
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['MATKHAU'] && $password != $row2['MK']) {
        echo  "<script>alert('Mật khẩu không đúng!');</script><br/>";
        echo "<script>window.location = 'http://localhost/lk/Html/index.php'</script>";
        exit;
    }
     
    //Lưu tên đăng nhập
    
    if( $password==$row2['MK']&&$username==$row2['TK']){
        $_SESSION['usernamea'] = $username;
        $URL="http://localhost/lk/quantri/qlsp.php";
        header("location: $URL");
        die();
    }
    $_SESSION['username'] = $username;
    $URL="http://localhost/lk/Html/index.php";
    header("location: $URL");
    die();
}
?>