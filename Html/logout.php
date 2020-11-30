<?php session_start();
    if (isset($_SESSION['username'])){
        unset($_SESSION['username']); 
        $URL="http://localhost/lk/Html/index.php";
                    header("location: $URL");
    }
?>