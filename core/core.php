<?php
$home = "http://stoml/?modules=home";
error_reporting(1);
if (isset($_COOKIE['role'])) {
    if ($_COOKIE['role'] == 4 || $_COOKIE['role'] == 5) {
        $superuser = true;
    } else {
        $superuser = false;
    }
    if ($_COOKIE['role'] == 5) {
        $admin = true;
    } else {
        $admin = false;
    }
} else {
    $admin = false;
    $superuser = false;
}
$mysql = new mysqli('localhost','root','root','med');
if (empty($_COOKIE['user']) && $_GET['modules'] != 'login') {
    header('Location: http://stoml/?modules=login');
}
function rowquery($sql) {
    $mysql = new mysqli('localhost','root','root','med');
    $get = $mysql -> query($sql);
    $return = $get ->fetch_array(MYSQLI_ASSOC);
    return $return;
}

function queryset($sql) {
    $mysql = new mysqli('localhost','root','root','med');
    $get = $mysql -> query($sql);
        return $get;
}
function validatesql($sql) {
    $mysql = new mysqli('localhost','root','root','med');
    $get = $mysql -> query($sql);
    $return = $get ->fetch_array(MYSQLI_ASSOC);
    if ($return) {
        return true;
    } else {
        return false;
    }
}