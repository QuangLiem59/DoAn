<?php
 
    if (!isset($_POST['dangky'])){
        die('');
    }
    $con = mysqli_connect("localhost","root","","linhkien") or die ("Không Thể Kết Nối !!!");
			mysqli_query($con,"SET NAMES'utf8'");
    header('Content-Type: text/html; charset=UTF-8');
          
    $username   = addslashes($_POST['tk']);
    $password   = addslashes($_POST['mk']);
    $rpassword   = addslashes($_POST['nlmk']);
    $fullname   = addslashes($_POST['ht']);
    $phone   = addslashes($_POST['sdt']);
    $add   = addslashes($_POST['dc']);

    if (!$username || !$password || !$rpassword || !$fullname || !$phone || !$add)
    {
        echo "<script>alert('Vui lòng nhập đầy đủ thông tin.')</script>";
        echo "<script>window.location = 'http://localhost/lk/Html/index.php'</script>";
        exit;
    }
          

if($rpassword!=$password)
    {
    echo "<script>alert('Mật khẩu nhập lại chưa đúng')</script>";
    echo "<script>window.location = 'http://localhost/lk/Html/index.php'</script>";
    exit;
    }
    if(is_numeric($phone)==false)
    {
    echo "<script>alert('Số điện thoại phải là kiểu số')</script>";
    echo "<script>window.location = 'http://localhost/lk/Html/index.php'</script>";
    exit;
    }  
    if (mysqli_num_rows(mysqli_query($con,"SELECT * FROM khachhang WHERE TENDN='$username'")) > 0){
        echo "<script>alert('Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác')</script>";
        echo "<script>window.location = 'http://localhost/lk/Html/index.php'</script>";
        exit;
    }
    @$addmember = mysqli_query($con,"INSERT INTO khachhang VALUES ('','$fullname','$phone','$add','$username','$password')");
                          
    if ($addmember){
        echo "<script>alert('Quá trình đăng ký thành công')</script>";
        echo "<script>window.location = 'http://localhost/lk/Html/index.php'</script>";}
    else{
        echo "<script>alert('Có lỗi xảy ra trong quá trình đăng ký')</script>";
        echo "<script>window.location = 'http://localhost/lk/Html/index.php'</script>";}
?>