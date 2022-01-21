<?php
function even($x)
{
    if ($x % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
$sql = queryset("SELECT * FROM `timestamp`");
if (isset($_GET['date'])) {
    $date = date('Y-m-d', strtotime($_GET['date']));
    $popupdate = date('d.m.Y', strtotime($_GET['date']));
} else {
    $date = date('Y-m-d', time());
    $popupdate = date('d.m.Y', time());
}
if (isset($_GET['date'])) {
    $getdate = "&date=$_GET[date]";
} else {
    $getdate = '';
}
if (isset($_POST['create'])) {
    $timestamp = $_POST['timestamp'];
    $sqlvalidate = validatesql("SELECT * FROM `health` where valikey = '$_POST[valikey]'");
    if ($sqlvalidate == false) {
        $error = '';
        queryset("INSERT INTO `health`(`ClientID`, `dnevnik`, `tutorFIO`, `Plan`, `naznachenie`, `Doc`, `Menegment`, `date`, `time`, valikey)
 VALUES ($_POST[clientid],'$_POST[dnevnik]','$_POST[tutorFIO]','$_POST[Plan]','$_POST[naznachenie]','$_POST[Doc]','$_POST[Menegment]'
 ,'$date','$timestamp', '$_POST[valikey]')");
        header("Location: http://stoml/?modules=home$getdate");
    } else {
        $error = "Повторите еще раз";
    }
}
if (isset($_POST['update'])) {
    queryset("UPDATE `health` SET
    `dnevnik`='$_POST[dnevnik]',`tutorFIO`='$_POST[tutorFIO]',`Plan`='$_POST[Plan]',`naznachenie`='$_POST[naznachenie]',
   `Doc`='$_POST[Doc]',`Menegment`='$_POST[Menegment]' WHERE id = $_POST[id]");
    header("Location: http://stoml/?modules=home$getdate");
}
if (isset($_POST['delete'])){
    queryset("DELETE FROM `health` WHERE id = $_POST[id]");
    header("Location: http://stoml/?modules=home$getdate");
}

$sqlclients = queryset("SELECT CONCAT(lastname, ' ', firstname, ' ', patronymic) as FIO, ClientID as id FROM `clients`");
$style = "style='
display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
'";
$option = "<option $style value=''>---</option>";
while ($clients = $sqlclients->fetch_array(MYSQLI_ASSOC)) {
    $option .= "<option $style value='$clients[id]'>$clients[FIO]</option>";
}
