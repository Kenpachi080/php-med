<?php
include 'core/core.php';
include "core/utilites/utilites.php";
if (isset($_GET['modules'])) {
    $modules = $_GET['modules'];
}
$modulesPath = "modules/$modules/$modules.php";
if (!file_exists("$modulesPath")) {
//    http_response_code(404);
    include('core/404.php');
} else {
    include "$modulesPath";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Эстедент</title>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                crossorigin="anonymous"></script>
        <link rel="stylesheet" href="core/tpl/css/style.css">
        <script src="core/jquery.min.js"></script>
        <?php include "modules/$modules/header.tpl.php" ?>
    </head>
    <body>
        <?php include  "core/constructor/header.php" ?>
    <section>
        <?php
        include "modules/$modules/tpl/$modules.tpl.php";
        ?>
    </section>
    </body>
    </html>
<?php }
?>