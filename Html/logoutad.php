<?php 
session_start();
if (isset($_SESSION['usernamea'])){
    unset($_SESSION['usernamea']); 
    echo "<script>window.history.back()</script>";
}
?>