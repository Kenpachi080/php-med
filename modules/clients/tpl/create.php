<div class="col-md-8 order-md-1 center">
    <h4 class="mb-3">Создание карточки клиента <h4 class="red"><?=$validate?></h4></h4>
    <form method="POST" class="needs-validation">
        <div class="row">
            <div class="col-md-6 mb-3 w33">
                <label for="firstName">Имя</label>
                <input type="text" class="form-control" value="<?=$_POST['firstName']?>" id="firstName" name="firstName" placeholder="Имя" value="<?=$_POST['']?>"required>
            </div>
            <div class="col-md-6 mb-3 w33">
                <label for="lastName">Фамилия</label>
                <input type="text" class="form-control" id="lastName" placeholder="Фамилия" name="lastName" value="<?=$_POST['lastName']?>" required>
            </div>
            <div class="col-md-6 mb-3 w33">
                <label for="patronymic">Отчество</label>
                <input type="text" class="form-control" id="patronymic" placeholder="Отчество" name="patronymic" value="<?=$_POST['patronymic']?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3 w33">
                <label for="gender">Пол</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option <?php echo $_POST['gender'] == 1 ? 'selected' : '' ?> value="1">Мужской</option>
                    <option <?php echo $_POST['gender'] == 2 ? 'selected' : '' ?> value="2">Женский</option>
                </select>
            </div>
            <div class="col-md-6 mb-3 w33">
                <label for="datebirth">Дата рождение</label>
                <input type="date" class="form-control" value="<?=$_POST['datebirth']?>" id="datebirth" name="datebirth" required>
            </div>
            <div class="col-md-6 mb-3 w33">
                <label for="address">Адрес</label>
                <input type="text" class="form-control" value="<?=$_POST['address']?>" id="address" placeholder="Адрес" name="address">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="professhion">Профессия</label>
                <input type="text" class="form-control" value="<?=$_POST['professhion']?>" id="professhion" placeholder="Профессия" name="professhion">
            </div>
            <div class="col-md-6 mb-3">
                <label for="diagnos">Диагноз</label>
                <input type="text" class="form-control" value="<?=$_POST['diagnos']?>" id="diagnos" name="diagnos" placeholder="Диагноз" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="report">Жалобы</label>
            <div class="input-group">
                <input type="text" class="form-control" value="<?=$_POST['report']?>" id="report" placeholder="Жалобы" name="report" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="olddiseases">Перенесенные и сопутствующие заболевания</label>
            <textarea name="olddiseases" id="olddiseases"  cols="3" class="form-control" rows="3"><?=$_POST['olddiseases']?></textarea>
        </div>

        <div class="mb-3">
            <label for="newdiseases">Развитие настоящего заболевания</label>
            <textarea name="newdiseases" id="newdiseases" cols="3" class="form-control" rows="3"><?=$_POST['newdiseases']?></textarea>
        </div>

        <div class="mb-3">
            <label for="showresult">Результаты осмотра</label>
            <textarea name="showresult" id="showresult" cols="3" class="form-control" rows="3"><?=$_POST['showresult']?></textarea>
        </div>

        <div class="mb-3">
            <label for="prikus">Вид прикуса</label>
            <input type="text" class="form-control" id="prikus" value="<?=$_POST['prikus']?>" placeholder="Прикус" name="prikus" required>
        </div>

        <div class="mb-3">
            <label for="rot">Описание полости рта и слизистой оболочки</label>
            <textarea name="rot" id="rot" cols="3" class="form-control" rows="3"><?=$_POST['rot']?></textarea>
        </div>

        <div class="mb-3">
            <label for="rengen">Результаты ренгеновского обследования</label>
            <textarea name="rengen" id="rengen" cols="3" class="form-control" rows="3"><?=$_POST['rengen']?></textarea>
        </div>
        <input type="hidden" name="create" id="create" value="1">
        <button class="btn btn-primary btn-lg btn-bloc">Сохранить</button>
    </form>
</div>