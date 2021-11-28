<?php 

    include './koneksi.php';
    session_start();

    $name = $_POST['name'];
    $quota = $_POST['quota'];
    $harga = $_POST['harga'];
    $id_class = $_POST['id_class'];
    $description = $_POST['description'];

    $nama = $_FILES['file']['name'];
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];

    move_uploaded_file($file_tmp, 'file/'.$nama);

    $materials = $_FILES['materials']['name'];
	$ukuran1	= $_FILES['materials']['size'];
	$file_tmp1 = $_FILES['materials']['tmp_name'];

    move_uploaded_file($file_tmp1, 'file/'.$materials);
  
    $sql = "insert into coding (name, quota, harga, id_class, photo, description, materi)
            values ('" . $name . "', '" . $quota . "', '" . $harga . "', '" . $id_class . "', '" . $nama . "', '" . $description . "', '" . $materials . "');
    ";

  
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>location.href='coding-admin.php';</script>";
    }else{
        printf('Failed add coding: ' . mysqli_error($conn));
    }
 ?>