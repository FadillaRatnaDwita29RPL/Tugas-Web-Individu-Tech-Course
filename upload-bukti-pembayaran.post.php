<?php 
    include "koneksi.php";
    session_start();

    if($_FILES['file']['size'] > 0){
        $nama = $_FILES['file']['name'];
	    $ukuran	= $_FILES['file']['size'];
	    $file_tmp = $_FILES['file']['tmp_name'];
        move_uploaded_file($file_tmp, 'file/'.$nama);
        $upfile=mysqli_query($conn,"update detail_pembayaran set bukti_pembayaran='".$nama."' where email = '".$_SESSION['email']."' ") ;
        $today = date('Y-m-d');
        $result = $conn -> query('update detail_pembayaran set date = "' . $today . '" where email = "' . $_SESSION['email'] . '" ');
        if (!$result){
            var_dump($conn->query);
            exit();
        }
    }

       

        $qry_pembayaran= mysqli_query($conn, "select * from detail_pembayaran");
        $dt_pembayaran=mysqli_fetch_array($qry_pembayaran);

        header('Location: coding.php');
   
?>