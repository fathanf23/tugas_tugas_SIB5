<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="
padding: 200px;
background-image: URL('bg.jpg');
background-size: cover;
color: white;
">
    <form method="POST" style="
background-color: rgba(21, 41, 71, 0.5); 
padding: 20px; 
border-radius: 10px;
width: 100%;">
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="text" placeholder="Masukan Username Anda!" class="form-control" id="exampleInputEmail1"
                name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Masukan Password Anda!" name="password">
        </div>
        <button type="submit" class="btn btn-primary">login</button>
    </form>

    <?php
    function cek_login($username, $password){
        if($username === 'admin' && $password === 'mimin'){
            header('location: admin.html');
            exit;
        }else {
            echo "<h2>Username dan Password Anda Salah!";
        }
    }
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    cek_login($username, $password);
 }
 ?>
</body>

</html>