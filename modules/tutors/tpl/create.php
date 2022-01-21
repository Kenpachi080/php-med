<div class="col-md-8 order-md-1 center">
    <h4 class="mb-3">Создание карточки клиента <h4 class="red"><?=$validate?></h4></h4>
    <form method="POST" class="needs-validation">
        <div class="row">
            <div class="col-md-6 mb-3 w33">
                <label for="firstName">Имя</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Имя" value="" required>
            </div>
            <div class="col-md-6 mb-3 w33">
                <label for="lastName">Фамилия</label>
                <input type="text" class="form-control" id="lastName" placeholder="Фамилия" name="lastName" value="" required>
            </div>
            <div class="col-md-6 mb-3 w33">
                <label for="patronymic">Отчество</label>
                <input type="text" class="form-control" id="patronymic" placeholder="Отчество" name="patronymic" value="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="username">Логин</label>
                <input type="text" class="form-control" id="username" placeholder="Логин" name="username" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="password">Пароль</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Пароль" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="member">Должность</label>
                <input type="text" class="form-control" id="member" placeholder="Должность" name="member">
            </div>
            <div class="col-md-6 mb-3">
                <label for="role">Доступ к разделу "Сотрудники"</label>
                <input type="checkbox" class="form-control" value="4" id="role" name="role">
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-bloc">Сохранить</button>
        <input type="hidden" name="create" id="create" value="1">
    </form>
</div>