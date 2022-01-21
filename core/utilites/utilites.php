<?php
//$password = 'AzMamed';
//$passwordsql = md5($password);
//$user = $mysql -> query("INSERT INTO `users`(`login`, `password`, `datebd`, `role`) VALUES ('Mamed','$passwordsql','$date', 5)");
function visualize($Arr)//Чисто для удобства
{
    echo '<div style="border : 1px dotted navy;"><pre>';
    print_r($Arr);
    echo "</div>";
    return true;
}
function visp($Arr)//Чисто для удобства
{
    echo '<div style="border : 1px dotted navy;"><pre>';
    print_r($Arr);
    echo "</div>";
    return true;
}
function visd($Arr)//Чисто для удобства
{
    echo '<div style="border : 1px dotted navy;"><pre>';
    var_dump($Arr);
    echo "</div>";
    return true;
}
function vis($txt)//Чисто для удобства
{
    echo '<div style="border : 1px dotted navy;"><pre>';
    echo $txt;
    echo "</div>";
    return true;
}
?>