<?php 
    include "koneksi.php";

    $email = $_GET['email'];
    $today = null;

    $result = $conn -> query('update user set absent = "' . $today . '" where email = "' . $email . '" ');

    if (!$result){
        var_dump($conn->query);
        exit();
    }

    header('Location: index.php')
    
?>