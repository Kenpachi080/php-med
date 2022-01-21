<div class="header_flex">
    <div class=""><h1>Сотрудники</h1>
    </div>
    <div class="">
        <button class="create btn btn-secondary">Создать профиль Сотрудника</button>
    </div>
</div>
<?php
while ($row = $infosql->fetch_array(MYSQLI_ASSOC)) {
    ?>
    <div style="margin: 5px" class="align-center">
        <div><?= $row['FIO'] ?></div>
        <div>
            <button id="<?= $row['id'] ?>" class="redirect btn btn-primary">Посмотреть профиль</button>
        </div>
    </div>
    <?php
} ?>
<script>
    $(".redirect").click(function (e) {
        e.preventDefault();
        var id = $(this).attr('id')
        window.location.href = 'http://stoml/?modules=tutors&tutor=' + id
    })
    $(".create").click(function (e) {
        e.preventDefault();
        window.location.href = 'http://stoml/?modules=tutors&create=1';
    })
</script>
