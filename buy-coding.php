<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">

    <style>
         body{
            background: linear-gradient( to right, #0A0849, #240E63, #0550CE);
            height: auto;
        }

        h2{
            text-align: center;
            font-family: calibri;
            font-weight: bolder;
            color: white;
            font-size: 30px;
            margin-top: 25px;
        }

        p{
            text-align: center;
            font-family: calibri;
            font-weight: inherit;
            color: white;
            font-size: 15px;
            margin-top: 8px;
            display: block;
        }

        .coding-box{
            /* margin-right: 10px;
            margin-left: 90px; */
            margin-bottom: 50px;
        }

        .coding-box .box {
            margin-top: -110px;
            width: 300px;
            height: 440px;
            background-color: white;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
            align-items: center;
            border-color: transparent;
            margin-left: 130px; 
            border-radius: 15px;
            margin-right: 20px;
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
            font-weight: bold;
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
            font-weight: lighter;
            font-size: 18px;
            text-align: left;
            margin-left: 25px;
            color: rgb(43, 43, 43);
            margin-top: 0px;
            margin-bottom: 10px;
        }



        hr{
            width: 250px;
            margin-top: 20px;
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

        .container{
            justify-content: flex;
            display: flex;
            align-items: center;
            margin-top: 50px;
            
        }

        h3{
            text-align: left;
            font-family: calibri;
            font-weight: bolder;
            color: #0A0849;
            font-size: 22px;
            margin-top: 10px;
            margin-left: 20px;
            margin-bottom: 10px;
        } 
        
        .poin{
            float: left;
            margin-left: 20px;
        }

        .poin p{
            text-align: left;
            font-family: calibri;
            font-weight: lighter;
            color: black;
            font-size: 20px;
            margin-top: 10px;
            /* margin-left: 20px; */
        }

        .poin2{
            float: right;
            margin-right: 20px;
            
        }

        .poin2 p{
            text-align: right;
            font-family: calibri;
            font-weight: bold;
            color: black;
            font-size: 20px;
            margin-top: 10px;
        }

        .bg{
            float: left;
            margin-left: 20px;
            width: 200px;
            height: 40px;
            background: #0550CE;
            text-align: center;
            font-family: calibri;
            font-weight: lighter;
            color: white;
            font-size: 20px;
            align-items: center;
            padding-top: 0.8%;
            border-radius: 25px;
        }

        button{
            margin-top: 20px;
            width: 400px;
            height: 50px;
            background: #0A0849;
            border-radius: 25px;
            border-color: transparent;
            color: white;
            font-family: calibri;
            font-weight: bold;
            margin-left: 50px;
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

        // $qry_user= mysqli_query($conn, "select * from user where email = '" . $_SESSION['email'] . "'");
        // $dt_user=mysqli_fetch_array($qry_user);
    ?>

    <h2>Checkout Class</h2>
    <p>Join us in Premium class and build a real-world project</p>

    <div class="container">
            <div class="coding-box" >
                    <div class="box">
                        <div class="coding">
                            <img src="<?php echo "file/".$dt_coding['photo']; ?>" alt="Coding Class" height="200px" width="250px" class="illus">
                            <h3><?php echo $dt_coding['name'] ?></h3>
                            <h4>Rp <?php echo $dt_coding['harga'] ?> ,-</h4>
                            <div class="text">
                                <img src="star.png" alt="Star" class="star" width="150" height="25">
                            </div>
                        </div>
                    </div>
            </div>

            <div class="checkout-box">
                <div class="container">
                <div class="card" style="box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22); width: 550px; height: 600px; border-radius: 15px; margin-bottom: 50px;">
                    <div class="card-body" style="margin-bottom: -50px;">
                        <div class="content">
                            <h3>Main Benefits</h3>
                            <div class="poin">
                                <p>Study Points</p>
                                <p>Acces Time</p>
                                <p>Consulting And Asset Bonuses</p>
                                <p>Class Certificate</p>
                            </div>
                            <div class="poin2">
                                <p>+75</p>
                                <p>Forever</p>
                                <p>Available</p>
                                <p>Available</p>
                            </div>
                        </div>
                        <div class="content">

                        </div>
                        
                    </div>
                    <div class="card-body">
                        <h3>Methode Payment</h3>
                            <div class="bg">
                                Manual Transfer
                            </div>
                    </div>
                    <div class="card-body" style="margin-top: -30px;">
                        <h3>Payment Details</h3>
                            <div class="poin">
                                <p>Class Price</p>
                                <p>Total Payment</p>
                            </div>
                            <div class="poin2">
                                <p>Rp <?php echo $dt_coding['harga'] ?>,-</p>
                                <p>Rp <?php echo $dt_coding['harga'] ?>,-</p>
                            </div>
                            <a href="confirm-payment.php?id=<?=$dt_coding['id']?>"><button onclick="return confirm('Are you sure to confirm your payment? Transfer to BCA Bank --> Tech-Course Company 0018928171910')">Payment Confirmation</button></a>
                    </div>

                    
         </div>
        </div>
            </div>

    </div>
    
</body>
</html>