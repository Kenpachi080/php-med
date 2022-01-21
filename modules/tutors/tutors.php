<?php
//visualize($_POST);
if ($superuser == true) {
    if (isset($_POST['firstName'])) {
        $firstName = trim($_POST['firstName']);
        $lastName = trim($_POST['lastName']);
        $patronymic = trim($_POST['patronymic']);
        $username = trim($_POST['username']);
        $password = md5(trim($_POST['password']));
        $member = trim($_POST['member']);
        $role = trim($_POST['role']);
    }
    if (isset($_POST['create'])) {
        if ($role == '' || $role == null) {
            $sqlrole = "1";
        } else {
            $sqlrole = $role;
        }
        $sql = queryset("INSERT INTO `users`(`login`, `password`, `role`, `firstname`, `lastname`, `patronymic`, `member`)
 VALUES ('$username','$password',$sqlrole,'$firstName','$lastName','$patronymic','$member')");
        $row = rowquery("SELECT id FROM `users` ORDER BY datebd DESC LIMIT 1");
        if ($sql) {
            header('Location: http://stoml/?modules=tutors&tutor=' . $row['id'] . '');
        } else {
            $validate = "Произошла ошибка, проверьте правильность заполнения полей";
        }
    }
    if (isset($_POST['delete'])) {
        $user = $_GET['tutor'];
        $sql = queryset("DELETE FROM `users` WHERE id = $user");
        header('Location: http://stoml/?modules=tutors');
    }
    if (isset($_POST['update'])) {
        if ($_POST['password'] == '' || $_POST['password'] == null) {
            $sqlpassword = '';
        } else {
            $sqlpassword = "`password`='$password',";
        }
        $sqlrole = '';
        $sql = queryset("UPDATE `users` SET `login`='$username',
                 $sqlpassword
                 $sqlrole
                 `firstname`='$firstName',
                 `lastname`='$lastName',
                 `patronymic`='$patronymic',
                 `member`='$member'
                  WHERE id = $_GET[tutor]");
        if ($sql) {
            header('Location: http://stoml/?modules=tutors&tutor=' . $_GET['tutor'] . '');
        } else {
            $validate = "Произошла ошибка. Проверьте правильность заполнения полей";
        }
    }
    if (isset($_GET['tutor'])) {
        $infosql = rowquery("SELECT * FROM `users` WHERE id = $_GET[tutor]");
    } else {
        $infosql = queryset("SELECT CONCAT(firstname, ' ', lastname, ' ', patronymic) as FIO, id FROM `users`");
    }
} else {
    include('core/404.php');
}