<?php 
    include "koneksi.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query_user=mysqli_query($conn,"update user set password='".md5($password)."' where email = '".$email."' ") ;
    $query_admin=mysqli_query($conn,"update admin set password='".md5($password)."' where email = '".$email."' ") ;

    if($query_user){
        echo "<script>alert('Success set your password');location.href='signin.php';</script>";
    }elseif($query_admin){
        echo "<script>alert('Success set your password');location.href='signin.php';</script>";
    }else{
        echo "<script>alert('Fail set your password');location.href='forgot-pass.php';</script>";
    }
?>