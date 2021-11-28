<?php 
    include "koneksi.php";
    session_start();

    $sql_user = "delete from user where email = '" . $_SESSION['email'] . "'; ";
    $sql_admin = "delete from admin where email = '" . $_SESSION['email'] . "'; ";

    $result = mysqli_query($conn, $sql_user);
    $results = mysqli_query($conn, $sql_admin);

    if($result){
        // echo "<script>alert('Success delete your account');</script>";
        unset($_SESSION['email']);
        header('Location: index.php');
    }elseif($results){
        unset($_SESSION['email']);
        header('Location: index.php');
    }else{
        echo "<script>alert('Fail delete your account');location.href='tampil_profile.php';</script>";
    }
?>
