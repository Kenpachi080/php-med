<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="text-center">
    <form class="form-signin" method="POST">
        <!--        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
        <h1 class="h3 mb-3 font-weight-normal">Авторизируйтесь</h1>
        <div class="exception"><?= $exception ?></div>
        <label for="inputEmail" class="sr-only">Логин</label>
        <input type="text" id="login" name="login" class="form-control" placeholder="Логин" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Пароль" required="">
        <button style="margin-top: 10px" class="btn btn-lg btn-primary btn-block" type="submit">Авторизироваться
        </button>
        <p class="mt-5 mb-3 text-muted">Эстедент©</p>
    </form>
</div>
</body>
