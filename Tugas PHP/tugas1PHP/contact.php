<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<?php
    $no = "089636005936";
    $email = "20210910062@uniku.ac.id";
?>

<body style="background: url('background.jpg') no-repeat center center fixed;
background-size: cover;
color: #D0E7D2;
padding: 20px;  ">

<div style="margin-top: 60px; ">
    <div class="page-header">
        <h1 style="
        font-weight: bolder;
        text-shadow: 2px 2px 3px #040D12;
        text-align: center;
        ">Contact</h1>
    </div>
        <div style="">
            <div style="background-color: rgba(70, 33, 105, 0.5); 
            border-radius: 5px;text-align: center; margin-left: 500px; margin-right: 500px;
        padding-top: 10px;
        padding-bottom: 10px;
        box-shadow: 5px 5px 10px #040D12;
        ">
                <img src="ig.webp" style="
                width: 60px; 
                " alt=""style="text-align: center; border-radius: 5px; background-color: #93B1A6;"><a
                        href="https://www.instagram.com/fathann23/">@fathann23</a>
            </div>
        </div>
        <br>
        <div>
            <div style=" border-radius: 5px;text-align: center; margin-left: 500px; margin-right: 500px;
        padding-top: 20px;
        padding-bottom: 20px;
        box-shadow: 5px 5px 10px #040D12;
        background-color: rgba(70, 33, 105, 0.5); 

        ">
                <img src="wa.png" style="
                width: 40px;
                " alt=""
                    style="text-align: center; border-radius: 5px;"><?= $no?>
            </div>
            <br>
            <div style="background-color: rgba(70, 33, 105, 0.5); 
            border-radius: 5px; text-align: center; margin-left: 500px; margin-right: 500px;
        padding-top: 20px;
        padding-bottom: 20px;
        box-shadow: 5px 5px 10px #040D12;
        ">
                <img src="email.png" style="
                width: 40px;
                " alt=""
                    style="text-align: center; border-radius: 5px;"><?= $email?>
            </div>
            <button style="border: none; box-shadow: 0px 0px 8px 2px #040D12;
            margin-top: 190px; border-top-left-radius: 30px; border-bottom-left-radius: 30px; background:transparent; "><a
                    href="profile.php">Back to Profile</a></button>
            
        </div>

    

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>