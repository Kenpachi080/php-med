<?php
//visualize($_POST);
if (isset($_POST['firstName'])) {
    $firstname = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $patronymic = trim($_POST['patronymic']);
    $gender = trim($_POST['gender']);
    $datebirth = trim($_POST['datebirth']);
    $address = trim($_POST['address']);
    $professhion = trim($_POST['professhion']);
    $diagnos = trim($_POST['diagnos']);
    $report = trim($_POST['report']);
    $olddiseases = trim($_POST['olddiseases']);
    $newdiseases = trim($_POST['newdiseases']);
    $showresult = trim($_POST['showresult']);
    $prikus = trim($_POST['prikus']);
    $rot = trim($_POST['rot']);
    $rengen = trim($_POST['rengen']);
}
if (isset($_POST['update'])) {
    $ClientID = $_GET['client'];
    $sql = queryset("UPDATE `clients` SET
                   `lastname`='$lastName',
                   `firstname`='$firstname',
                   `patronymic`='$patronymic',
                   `datebirth`='$datebirth',
                   `gender`=$gender,
                   `address`='$address',
                   `proffesion`='$professhion',
                   `diagnos`='$diagnos',
                   `report`='$report',
                   `olddiseases`='$olddiseases',
                   `newdiseases`='$newdiseases',
                   `showresult`='$showresult',
                   `prikus`='$prikus',
                   `rot`='$rot',
                   `rengen`='$rengen'
                    WHERE ClientID = $ClientID");
    if ($sql) {
        header("Location: http://stoml/?modules=clients&client=$ClientID");
    } else {
        $validate = "Произошла ошибка. Проверьте правильность заполнения полей";
    }
}
if (isset($_POST['create'])) {
    $sql = queryset("INSERT INTO
    `clients`
    (`lastname`, `firstname`, `patronymic`,`datebirth`, `gender`, `address`, `proffesion`,
     `diagnos`, `report`, `olddiseases`, `newdiseases`, `showresult`, `prikus`, `rot`, `rengen`)
    VALUES ('$lastName','$firstname','$patronymic','$datebirth',$gender,'$address','$professhion',
    '$diagnos','$report','$olddiseases','$newdiseases','$showresult','$prikus','$rot','$rengen')");
    $row = rowquery("SELECT ClientID FROM `clients` ORDER BY datebd DESC LIMIT 1");
    if ($sql) {
        header('Location: http://stoml/?modules=clients&client=' . $row["ClientID"] . '');
    } else {
        $validate = "Произошла ошибка. Проверьте правильность заполнения полей";
    }
}
if (isset($_POST['delete'])){
    queryset("DELETE FROM `clients` WHERE ClientID = $_POST[ClientID]");
    header('Location: http://stoml/?modules=clients');
}
if (isset($_GET['client'])) {
    $infosql = rowquery("SELECT * FROM `clients` WHERE ClientID = $_GET[client]");
    if (isset($infosql) < 1) {
        include('core/404.php');
    }
} else {
    $infosql = queryset("SELECT ClientID, CONCAT(lastname, ' ', firstname, ' ', patronymic) as FIO FROM `clients`");
}
?>