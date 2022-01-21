<div class="col-md-8 order-md-1 center">
    <h4 class="mb-3">Карточка клиента <h4 class="red"><?=$validate?></h4></h4>
    <form method="POST" id="formclient" class="needs-validation">
        <input type="hidden" name="ClientID" id="ClientID" value="<?=$infosql['ClientID']?>">
        <div class="row">
            <div class="col-md-6 mb-3 w33">
                <label for="firstName">Имя</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Имя" value="<?=$infosql['firstname']?>" required>
            </div>
            <div class="col-md-6 mb-3 w33">
                <label for="lastName">Фамилия</label>
                <input type="text" class="form-control" id="lastName" placeholder="Фамилия" name="lastName" value="<?=$infosql['lastname']?>" required>
            </div>
            <div class="col-md-6 mb-3 w33">
                <label for="patronymic">Отчество</label>
                <input type="text" class="form-control" id="patronymic" placeholder="Отчество" name="patronymic" value="<?=$infosql['patronymic']?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3 w33">
                <label for="gender">Пол</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option <?php echo ($infosql['gender'] == 1) ? 'selected' : ''?> value="1">Мужской</option>
                    <option <?php echo ($infosql['gender'] == 2) ? 'selected' : ''?> value="2">Женский</option>
                </select>
            </div>
            <div class="col-md-6 mb-3 w33">
                <label for="datebirth">Дата рождение</label>
                <input type="date" class="form-control" id="datebirth" name="datebirth" value="<?=$infosql['datebirth']?>" required>
            </div>
            <div class="col-md-6 mb-3 w33">
                <label for="address">Адрес</label>
                <input type="text" class="form-control" id="address" value="<?=$infosql['address']?>" placeholder="Адрес" name="address">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="professhion">Профессия</label>
                <input type="text" class="form-control" id="professhion" placeholder="Профессия" value="<?=$infosql['proffesion']?>" name="professhion">
            </div>
            <div class="col-md-6 mb-3">
                <label for="diagnos">Диагноз</label>
                <input type="text" class="form-control" id="diagnos" name="diagnos" placeholder="Диагноз" value="<?=$infosql['diagnos']?>" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="report">Жалобы</label>
            <div class="input-group">
                <input type="text" class="form-control" id="report" placeholder="Жалобы" name="report" value="<?=$infosql['report']?>" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="olddiseases">Перенесенные и сопутствующие заболевания</label>
            <textarea name="olddiseases" id="olddiseases" cols="3" class="form-control" rows="3"><?=$infosql['olddiseases']?></textarea>
        </div>

        <div class="mb-3">
            <label for="newdiseases">Развитие настоящего заболевания</label>
            <textarea name="newdiseases" id="newdiseases" cols="3" class="form-control" rows="3"> <?=$infosql['newdiseases']?></textarea>
        </div>

        <div class="mb-3">
            <label for="showresult">Результаты осмотра</label>
            <textarea name="showresult" id="showresult" cols="3" class="form-control" rows="3"><?=$infosql['showresult']?></textarea>
        </div>

        <div class="mb-3">
            <label for="prikus">Вид прикуса</label>
            <input type="text" class="form-control" id="prikus"  value="<?=$infosql['prikus']?>" placeholder="Прикус" name="prikus" required>
        </div>

        <div class="mb-3">
            <label for="rot">Описание полости рта и слизистой оболочки</label>
            <textarea name="rot" id="rot" cols="3" class="form-control" rows="3"><?=$infosql['rot']?></textarea>
        </div>

        <div class="mb-3">
            <label for="rengen">Результаты ренгеновского обследования</label>
            <textarea name="rengen" id="rengen" cols="3" class="form-control" rows="3"><?=$infosql['rengen']?></textarea>
        </div>
        <input type="hidden" name="update" id="update" value="1">
        <button class="btn btn-primary btn-lg btn-bloc">Сохранить</button>
        <button onclick="deleteperson()" class="btn btn-danger btn-lg btn-bloc">Удалить клиента</button>
    </form>
</div>
<script>
    function deleteperson() {
        var validate = confirm("Действительно хотите удалить?")
        if (validate == true) {
            $("#update").attr('name', 'delete')
            $("#formclient").submit()
        }
    }
</script>