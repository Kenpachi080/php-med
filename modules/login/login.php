<?php
//$date = date('Y.m.d', time());
if (isset($_GET['logout'])) {
    setcookie('user', "", time()-60*60*60*365*365, "/");
    setcookie('role', "", time()-60*60*60*365*365, "/");
}
if (isset($_COOKIE['user'])) {
    header("Location: $home");
}
if (isset($_POST['login']) && isset($_POST['password'])) {
    $username = trim($_POST['login']);
    $pass = md5(trim($_POST['password']));
    $validate = queryset("SELECT login, id, role FROM users WHERE login = '$username' AND password = '$pass'");
    $result = mysqli_fetch_assoc($validate);
    if (count($result) < 1) {
        $exception = 'Не правильный логин или пароль';
    } else {
        $exception = '';
        setcookie('user', $result['id'], time()+60*60*60*365*365, "/");
        setcookie('role', $result['role'], time()+60*60*60*365*365, "/");
        header("Location: $home");
    }
}
?>

