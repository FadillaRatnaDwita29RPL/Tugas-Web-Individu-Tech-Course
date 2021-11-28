<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Add Coding Class</title>
    <style>
        body{
            background: linear-gradient( to right, #0A0849, #240E63, #0550CE);
            height: auto;
        }

        .submit{
            width: 90px;
            height: 35px;
            border-radius: 20px;
            font-family: calibri;
            font-size: 14px;
            font-weight: bold;
            outline: none;
            margin-right: 20px;
            align-items: center;
            background: #0550CE;
            border-color: transparent;
            color: white;
            margin-top: 20px;
            box-shadow: 3px 3px 10px #6c757d;
        }

        .card{
            width: 70%;
            margin-left: 15%;
        }

      
    </style>

</head>
<body>
    <?php 
        include "koneksi.php";
       
    ?>

    <div class="animate__animated animate__backInRight animate__slow">
     <div class="container">
         <div class="card" style="margin-top: 7%; box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);">
             <div class="card-header bg-light">
                 <h3 style="text-align: center;">Add Coding Class</h3>
             </div>
             <div class="card-body">
                 <form action="tambah-coding.post.php" method="post" enctype="multipart/form-data">
                     <div class="row g-3">
                         <div class="col-md-12">
                             <label>Name Class Coding</label>
                             <input type="text" name="name" value="" class="form-control">
                         </div>
                     </div>
                     <br>
                     <div class="row g-3">
                        <div class="col-md-6">
                            <label>Quota</label>
                            <input type="number" name="quota"  class="form-control" value="">
                        </div>
                        <div class="col-md-6">
                            <label>Class</label>
                            <select name="id_class" class="form-control">
                            <option></option>
                            <?php
                                include "koneksi.php";
                                $qry_kelas=mysqli_query($conn,"select * from class");
                                while($data_kelas=mysqli_fetch_array($qry_kelas)){
                                echo '<option
                                value="'.$data_kelas['id_class'].'">'.$data_kelas['name_class'].'</option>';
                                }
                            ?>
                             </select>
                        </div>
                     </div>

                     <br>

                     <div class="row g-3">
                         <div class="col-md-6">
                            <label>Price</label>
                            <input type="number" name="harga"  class="form-control">
                        </div>
                         <div class="col-md-6">
                             <label>Photo</label>
                             <input type="file" name="file"  class="form-control">
                         </div>
                     </div>
                     
                     <div class="row g-3">
                         <div class="col-md-6">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                         </div>
                         <div class="col-md-6">
                             <label>Learning Materials</label>
                             <input type="file" name="materials"  class="form-control">
                         </div>
                     </div>
                    
                    <button type="submit" class="submit">SUBMIT</button>
                 </form>
             </div>
         </div>
        </div>
        </div>
</body>
</html>