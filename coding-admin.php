<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Class Tech Course</title>
    <link rel="stylesheet" type="text/css" href="coding.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    
 
    <div class="coding-container">
        <h2>Coding Class</h2>
        <h4>Learn the latest knowledge about coding with professional mentors and experts in their fields</h4>
        <div class="row">
        <?php   
            include "koneksi.php";
            
                //jika tidak ada keyword pencarian
                $qry_coding= mysqli_query($conn, "select * from coding");
                
                while($dt_coding=mysqli_fetch_array($qry_coding)){

            ?>
        <div class="col-md-4" style="margin-left: -20px;">
        <div class="coding-box" >
            <div class="box">
                <div class="coding">
                    <img src="<?php echo "file/".$dt_coding['photo']; ?>" alt="Coding Class" height="200px" width="250px" class="illus">
                    <h3><?php echo $dt_coding['name'] ?></h3>
                    <h4>Rp <?php echo $dt_coding['harga'] ?> ,-</h4>
                    <div class="text">
                        <img src="star.png" alt="Star" class="star" width="150" height="25">
                        <p><?php echo $dt_coding['quota'] ?></p>
                    </div>
                    <div class="button" style="margin-left: 20px; margin-top: 10px;">
                        <a href="edit_coding.php?id=<?=$dt_coding['id']?>" ><button class="btn btn-primary">EDIT</button></a>
                        <a href="delete_coding.post.php?id=<?=$dt_coding['id']?>"><button class="btn btn-dark"onclick="return confirm('Are you sure to delete this class?')"> DELETE</button></a>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
        <?php
            }
            ?>
        </div>

    <div class="sosbar">
        <a href="index-admin.php"><i class="fas fa-home"></i></a>
        <a href="catalog-admin.php"><i class="fas fa-book-open"></i></a>
        <a href="tambah-coding.php"><i class="fas fa-plus"></i></i></a>
    </div>

</body>
</html>