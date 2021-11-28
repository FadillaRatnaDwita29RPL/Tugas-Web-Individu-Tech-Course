<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
    </style>
</head>
<body>
    <div class="animate__animated animate__backInRight animate__slow">
        <div class="container col-md-6" style="margin-top: 12%;">
            <div class="card" style="margin-top: 2%; box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);">
                <div class="card-header bg-light">
                    <h3 style="text-align: center;">Reset Your Password</h3>
                </div>
                <div class="card-body">
                    <form action="forgot-pass.post.php" method="post" >
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label>Email</label>
                                <input type="email" name="email" value="" class="form-control">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label>New Password</label>
                                <input type="password" name="password" value="" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="submit" onclick="return confirm('Are you sure to reset your password?')">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>