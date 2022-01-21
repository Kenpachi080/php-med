<div class="col-md-8 order-md-1 center">
    <h4 class="mb-3">Карточка сотрудника <h4><?=$validate?></h4></h4>
    <form method="POST" class="needs-validation">
        <div class="row">
            <div class="col-md-6 mb-3 w33">
                <label for="firstName">Имя</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Имя"
                       value="<?= $infosql['firstname'] ?>" required>
            </div>
            <div class="col-md-6 mb-3 w33">
                <label for="lastName">Фамилия</label>
                <input type="text" class="form-control" id="lastName" placeholder="Фамилия" name="lastName"
                       value="<?= $infosql['lastname'] ?>" required>
            </div>
            <div class="col-md-6 mb-3 w33">
                <label for="patronymic">Отчество</label>
                <input type="text" class="form-control" id="patronymic" placeholder="Отчество" name="patronymic"
                       value="<?= $infosql['patronymic'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="username">Логин</label>
                <input type="text" class="form-control" id="username" value="<?= $infosql['login'] ?>"
                       placeholder="Логин" name="username" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="password">Пароль</label>
                <input type="text" class="form-control" id="password" name="password" value=""
                       placeholder="ПЕРЕСОЗДАТЬ ПАРОЛЬ">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="member">Должность</label>
                <input type="text" class="form-control" id="member" value="<?= $infosql['member'] ?>"
                       placeholder="Должность" name="member">
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-bloc">Сохранить</button>
        <?php if ($admin == true && $_COOKIE['user'] != $_GET['tutor']) {?>
        <button id="delete_button" style="padding: 0.5rem 1rem; font-size: 1.25rem" class="btn btn-danger">Удалить аккаунт</button>
        <?php } ?>
        <input type="hidden" name="update" id="update" value="1">
    </form>
</div>
<script>
    $("#delete_button").click(function (e) {
        var validate = confirm("Вы точно хотите удалить аккаунт?");
        if (validate == true) {
            $("#update").attr("name", "delete");
        }
    })
</script>