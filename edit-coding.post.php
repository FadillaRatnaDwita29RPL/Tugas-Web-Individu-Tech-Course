<?php 
    include "koneksi.php";

    $quota=$_POST['quota'];
    $id_class=$_POST['id_class'];
    $name=$_POST['name'];
    $harga=$_POST['harga'];
    $id= $_GET['id'];
    $description = $_POST['description'];


    if($_FILES['file']['size'] > 0){
        $nama = $_FILES['file']['name'];
	    $ukuran	= $_FILES['file']['size'];
	    $file_tmp = $_FILES['file']['tmp_name'];
        move_uploaded_file($file_tmp, 'file/'.$nama);
        $upfile=mysqli_query($conn,"update coding set photo='".$nama."' where id = '".$id."' ") ;
    }

    if($_FILES['material']['size'] > 0){
        $nama1 = $_FILES['material']['name'];
        $size = $_FILES['material']['size'];
        $file_tmp1 = $_FILES['material']['tmp_name'];
        move_uploaded_file($file_tmp1, 'file/'.$nama1);
        $upfile=mysqli_query($conn,"update coding set materi='".$nama1."' where id = '".$id."' ") ;
    }

    $update=mysqli_query($conn,"update coding set name='".$name."',quota='".$quota."', harga='".$harga."', id_class='".$id_class."', description='".$description."' where id = '".$id."' ") ;

    

    if($update){
        echo "<script>alert('Success edit');location.href='coding-admin.php';</script>";
    }else{
        printf('Failed sign up: ' . mysqli_error($conn));
    }
    
?>