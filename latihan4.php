<form action="" method="post">
    <label for="">Username</label><br>
    <input type="text" name="username"><br>
    <label for="">Password</label><br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" id="">

</form>

<?php
$username = $_POST ['username'];
$password = $_POST ['password'];
$login = $_POST ['login'];
if(isset ($login)){
    echo 'Hallo '.$username.'<br> dan Password anda '.$password;
}
?>