<div class="header_flex">
    <div class=""><h1>Пациенты</h1>
    </div>
    <div style="display: flex; align-items: center; justify-content: center; flex-direction: row;" class="search">
        <label style="margin-right: 15px" for="">Поиск</label>
        <input type="text" id="search" name="search" class="form-control">
    </div>
    <div class="">
        <button class="create btn btn-secondary">Создать профиль Пациента</button>
    </div>
</div>
<div class="contact">
    <?php
    while ($row = $infosql->fetch_array(MYSQLI_ASSOC)) {
        ?>
        <div class="align-center">
            <div><?= $row['FIO'] ?></div>
            <div>
                <button id="<?= $row['ClientID'] ?>" onclick="redirect(<?= $row['ClientID'] ?>)" class="redirect btn btn-primary">Посмотреть профиль</button>
            </div>
        </div>
        <?php
    } ?>
</div>
<script>
    function redirect(x){
        var id = x
        window.location.href = 'http://stoml/?modules=clients&client=' + id
    }
    $(".create").click(function (e) {
        e.preventDefault();
        window.location.href = 'http://stoml/?modules=clients&create=1';
    })
    $("#search").on('input', function () {
        var url = "core/ajax.php";
        var args = $("#search").val();
        $(".align-center").remove();
        $.ajax({
            url: url,
            type: "POST",
            dataType: "json",
            data: {
                args,
                query: 'showclient'
            },
            error: function () {
                alert("Ошибка:(");
            },
            success: function (data) {
                $(".contact").append(data);
                console.log('privet')
            }
        })
    })
</script>
