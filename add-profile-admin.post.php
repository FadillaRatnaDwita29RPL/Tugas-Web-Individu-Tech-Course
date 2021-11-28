<?php 
    include "koneksi.php";
    session_start();
    if($_FILES['file']['size'] > 0){
        $nama = $_FILES['file']['name'];
	    $ukuran	= $_FILES['file']['size'];
	    $file_tmp = $_FILES['file']['tmp_name'];
        move_uploaded_file($file_tmp, 'file/'.$nama);
        $upfile=mysqli_query($conn,"update admin set photo='".$nama."' where email = '".$_SESSION['email']."' ") ;
    }

    if($upfile){
        echo "<script>alert('Success set your photo profile');location.href='tampil_profile-admin.php';</script>";
    }else{
        echo "<script>alert('Fail set your photo profile');location.href='tampil_profile-admin.php';</script>";
    }
    

?>