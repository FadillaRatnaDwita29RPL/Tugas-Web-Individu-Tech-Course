<?php 
    include "koneksi.php";
    session_start();
    // $name=$_POST['name'];
    $date_birth=$_POST['date_birth'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $phone_number=$_POST['phone_number'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email'];

    $nama = $_FILES['file']['name'];
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];

    move_uploaded_file($file_tmp, 'file/'.$nama);

    

    $update=mysqli_query($conn,"update admin set date_birth='".$date_birth."',address='".$address."', age='".$age."', gender='".$gender."', phone_number='".$phone_number."', photo='".$nama."' where email = '".$email."' ") ;
    
    if($update){
        echo "<script>alert('Success set your profile');location.href='signin.php';</script>";
    }else{
        echo "<script>alert('Fail set your profile');location.href='set-profile.php';</script>";
    }

?>