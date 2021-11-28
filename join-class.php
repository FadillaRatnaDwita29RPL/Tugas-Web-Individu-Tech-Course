<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Class</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body{
            background: linear-gradient( to right, #0A0849, #240E63, #0550CE);
            height: auto;
        }

        .premium{
            width: 200px;
            height: 40px;
            background: #0CB2C0;
            align-items: center;
            margin-left: 540px;
            border-radius: 20px;
            justify-content: center;
            text-align: center;
            font-family: calibri;
            font-weight: normal;
            color: white;
            font-size: 22px;
            border-color: transparent;
            margin-top: 20px;
        }

        h2{
            text-align: center;
            font-family: calibri;
            font-weight: bolder;
            color: white;
            font-size: 30px;
            margin-top: 50px;
        }

        p{
            text-align: center;
            font-family: calibri;
            font-weight: inherit;
            color: white;
            font-size: 15px;
            margin-top: 10px;
            display: block;
        }

        .coding-box .box {
            width: 800px;
            height: 480px;
            background-color: white;
            box-shadow: 3px 3px 10px #6c757d;
            align-items: center;
            border-color: transparent;
            margin-left: 225px;
            border-radius: 15px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .coding-box .box .coding .illus{
            margin-left: 25px;
            margin-top: 20px;
            border-radius: 20px;
            border-color: transparent;
            margin-right: 25px;
        }

        .coding-box .box .coding .text{
            justify-content: flex;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .coding-box .box .coding .button{
            justify-content: flex;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .coding-box .box .coding .button button{
            width: 100px;
            height: 40px;
            border-radius: 20px;
            font-family: calibri;
            font-size: 14px;
            font-weight: bold;
            outline: none;
            align-items: center;
            background: #0A0849;
            border-color: transparent;
            color: white;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.30) ;
            margin-left: 60px;   
            margin-top: 25px; 
        }

        .coding-box .box .coding .text .star{
            margin-left: 25px;
            margin-top: 10px;
            float: left;
        }

        .coding-box .box .coding .text p{
            float: right;
            margin-top: 20px;
            font-family: calibri;
            font-weight: lighter;
            color: rgb(43, 43, 43);
            margin-right: 30px;
            font-size: 100px;
        }

        .coding-box .box .coding h3{
            font-family: calibri;
            font-weight: bolder;
            font-size: 30px;
            text-align: left;
            margin-left: 25px;
            color: #0A0849;
            margin-bottom: 5px;
            margin-top: 10px;
            margin-right: 20%;
        }

        .coding-box .box .coding h4{
            font-family: calibri;
            font-weight: bold;
            font-size: 18px;
            text-align: left;
            margin-left: 25px;
            color: rgb(43, 43, 43);
            margin-top: 0px;
            margin-bottom: 10px;
        }

        /* .coding-container .coding-box{
            justify-content: flex;
            display: flex;
            align-items: center;
        } */

        hr{
            width: 300px;
            margin-top: 20px;
            margin-left: 25px;
        }

        .coding-box .box .coding p{
            font-family: calibri;
            font-weight: lighter;
            font-size: 20px;
            text-align: left;
            margin-left: 25px;
            color: #363636;
            margin-bottom: 5px;
            margin-top: 20px;   
        }

        .coding-box .box .coding h5{
            font-family: calibri;
            font-weight: lighter;
            font-size: 15px;
            text-align: left;
            margin-left: 25px;
            color: #363636;
            margin-bottom: 5px;
            margin-top: 10px;   
            margin-right: 20px;
        }

        .coding-box .box .coding{
            justify-content: flex;
            display: flex;
            align-items: center;
        }

        .coding-box .box .coding .coding-1{
            width: 350px;
        }

        .row1 i{
            color: #0CB2C0;
            font-size: 30px;
            margin-right: 20px;
            margin-bottom: 10px;
        }

        .coding-2{
            margin-left: 50px;
            margin-top: 30px;
            justify-content: flex;
            display: flex;
        }

        .row2 i{
            font-size: 19.1px;
            font-family: calibri;
        }

        .buy{
            width: 300px;
            height: 40px;
            border-radius: 20px;
            font-family: calibri;
            font-size: 14px;
            font-weight: bold;
            outline: none;
            align-items: center;
            background: #0A0849;
            border-color: transparent;
            color: white;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.30) ;
            margin-left: -20px;   
            margin-top: 50px; 
        }


    </style>

</head>
<body>
    <?php 
        include "koneksi.php";
        // session_start();
        $id = $_GET['id'];

        $qry_coding= mysqli_query($conn,  "select * from coding where id = '" . $id . "'");
        $dt_coding=mysqli_fetch_array($qry_coding);
    ?>
     
        <div class="title">
            <button class="premium">#BeyondPremium</button> 
            <h2><?php echo $dt_coding['name'] ?></h2>
            <p><?php echo $dt_coding['description'] ?></p>
        </div>
        
        <div class="coding-box" >
            <div class="box">
                <div class="coding">
                    <div class="coding-1">
                        <img src="<?php echo "file/".$dt_coding['photo']; ?>" alt="Coding Class" height="250px" width="300px" class="illus">
                        <h3>Rp <?php echo $dt_coding['harga'] ?>,-</h3>
                        <h4>Selamanya</h4>
                        <hr>
                        <h5>Have Premium class permanently and build a real project</h5>
                    </div>
                    <div class="coding-2">
                        <div class="row1">
                            <i class="fas fa-check-square"></i><br>
                            <i class="fas fa-check-square"></i><br>
                            <i class="fas fa-check-square"></i><br>
                            <i class="fas fa-check-square"></i><br>
                            <i class="fas fa-check-square"></i><br>
                            <i class="fas fa-check-square"></i><br>
                            <i class="fas fa-check-square"></i><br>
                        </div>
                        <div class="row2">
                            
                            <i>Access class forever</i><br><br>
                            <i>Assets & consulting group</i><br><br>
                            <i>Learning support tools</i><br><br>
                            <i>Graduation certificate</i><br><br>
                            <i>Free material updates</i><br><br>
                            <i>Free access to Freemium class</i><br><br>
                            <i>Job vacancy</i><br>

                            <a href="buy-coding.php?id=<?=$dt_coding['id']?>"><button class="buy" onclick="return confirm('Are you sure to buy this class?')">BUY CLASS</button></a>
                        </div>

                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
       
        
</body>
</html>