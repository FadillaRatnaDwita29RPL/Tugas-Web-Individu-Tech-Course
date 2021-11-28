<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Photo Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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

       

        .sosbar i{
            color: #240E63;
            font-size: 20px;
        }

        .sosbar a:hover{
            background-color: #0A0849;
            box-shadow:3px 3px 10px #6c757d ;
            border-color: transparent;
        }

        .sosbar i:hover{
            color: white;
        }

        .sosbar{
            position: fixed;
            top: 50%;
            right: 0px;
            transform: translateY(-50%);
        }

        .sosbar a{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            padding: 0px;
            margin: 0px;
            line-height: 0px;
            background-color: #FFFFFF;
            border: 1px solid #cbcbcb;
            box-shadow: 2px 2px 12px rgb(0, 0, 0, 0.2);
            text-decoration: none;
            cursor: pointer;
        }


    </style>
</head>
<body>
<div class="animate__animated animate__backInRight animate__slow">
     <div class="container col-md-6" style="margin-top: 15%;">
         <div class="card" style="margin-top: 2%; box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);">
             <div class="card-header bg-light">
                 <h3 style="text-align: center;">Add Your Photo Profile</h3>
             </div>
             <div class="card-body">
                 <form action="add-profile-admin.post.php" method="post" enctype="multipart/form-data">
                     <div class="row g-3">
                         <div class="col-md-12">
                             <label>Photo Profile</label>
                             <input type="file" name="file" value="" class="form-control">
                         </div>
                     </div>
                    <button type="submit" class="submit">SUBMIT</button>
                 </form>
             </div>
         </div>
        </div>
        </div>

    <div class="sosbar">
        <a href="index-admin.php"><i class="fas fa-home"></i></a>
        <a href="tampil_profile-admin.php"><i class="far fa-user-circle"></i></a>
    </div>
</body>
</html>