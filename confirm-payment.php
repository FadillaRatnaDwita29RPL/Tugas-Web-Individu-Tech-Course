<?php 
    include "koneksi.php";
    session_start();

    $id=$_GET['id'];
    $qry_coding= mysqli_query($conn,  "select * from coding where id = '" . $id . "'");
    $dt_coding=mysqli_fetch_array($qry_coding);

    $qry_user= mysqli_query($conn, "select * from user where email = '" . $_SESSION['email'] . "'");
    $dt_user = mysqli_fetch_array($qry_user);

    $name_user = $dt_user['name'];
    $email = $dt_user['email'];
    $id_class = $dt_coding['id_class'];
    $id_course = $dt_coding['id'];
    $harga = $dt_coding['harga'];

    $sql = "insert into detail_pembayaran (name_user, email, id_class, id_course, harga)
            values ('" . $name_user . "', '" . $email . "', '" . $id_class . "', '" . $id_course . "', '" . $harga . "');
    ";

    


    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>location.href='upload-bukti-pembayaran.php';</script>";
    }else{
        printf('Failed payment: ' . mysqli_error($conn));
    }
?>