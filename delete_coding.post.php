<?php 
    include "koneksi.php";
    $id = $_GET['id'];


    $sql= "delete from coding where id = '" . $id. "'";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Success delete coding class');</script>";
        header('Location: coding-admin.php');
    }
?>
