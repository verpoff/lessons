<form method="post">
    логин <input type="text" name="login">
    пароль <input type="password" name="pass">
    <input type="submit" value="войти">
</form>


<?php
$login = $_POST['login'];
$pass = $_POST['pass'];

if ($login=='Артем' and $pass==7207)
{
    echo $login.', добро пожаловать на сайт';
}
else
{
    echo 'неправильный логин или пароль';
}