<?php
include 'core/utilites/popup.php';
$popup = PopupNotValue($style, $option);
echo $popup;
?>
<div class="body_popup"></div>
<form action="" id="date_form" method="GET">
    <label align="center" for=""><?= $error ?></label>
    <input type="hidden" name="modules" value="home">
    <div style="margin: 30px 0px" align="center"><input id="date" name="date" class="date_input" value="<?= $date ?>"
                                                        type="date"></div>
</form>
<?php
while ($row = $sql->fetch_array(MYSQLI_ASSOC)) {
    $id = even($row['id']);
    $time = date('H:i', strtotime($row['time']));
    $datesql = "$time";
    $sqlContact = "SELECT id, c.lastname FROM `health` as h\n"

        . "LEFT JOIN clients as c ON c.ClientID = h.ClientID \n"

        . "WHERE time = '$datesql' AND date = '$date'";
    $valiContact = validatesql("$sqlContact");
    if ($valiContact == true) {
        $sqlContactWhile = queryset($sqlContact);
        $div = '';
        while ($contact = $sqlContactWhile->fetch_array(MYSQLI_ASSOC)) {
            $div .= '<button onclick="showcontact(' . $contact["id"] . ')" style="margin-right: 5px">' . $contact["lastname"] . '</button>';
        }
    } else if ($valiContact == false) {
        $div = "";
    }
    if (even($row['id']) == false) { ?>
        <div class="row">
        <div class="col-md-6 mb-3">
            <label><?= $time ?></label>
            <div class="form-control contact"><?= $div ?><i onclick="addhealth('<?= $time ?>')" style="cursor:pointer;"
                                                            class="far fa-plus-square"></i></div>
        </div>
    <?php } else { ?>
        <div class="col-md-6 mb-3">
            <label><?= $time ?></label>
            <div class="form-control contact"><?= $div ?><i onclick="addhealth('<?= $time ?>')" style="cursor:pointer;"
                                                            class="far fa-plus-square"></i></div>
        </div>
        </div>
    <?php }
}
?>
<script>
    function makeid(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() *
                charactersLength));
        }
        return result;
    }
    $("#valikey").val(makeid(50));

    $(document).mouseup(function (click) { // событие клика по веб-документу
        var div = $('.popup_content'); // тут указываем ID элемента
        var popup = $(".popup");
        if (!div.is(click.target) // если клик был не по нашему блоку
            &&
            div.has(click.target).length === 0 && popup.is(click.target)) { // и не по его дочерним элементам
            $('.popup').fadeOut(300, 'linear');
            $(".popupvalue").remove();  // скрываем его
        }
    });
    $("#clientid").select2(
    )
    $("#date").change(function () {
        $("#date_form").submit();
    })

    function showpopup() {
        $("#popupcreate").fadeIn(300, 'linear')
    }

    function hidepopup() {
        $("#popupcreate").fadeOut(300, 'linear')
    }

    function showcontact(x) {
        var url = "core/ajax.php";
        var id = x;
        $.ajax({
            url: url,
            type: "POST",
            dataType: "json",
            data: {
                id,
                query: 'showcontact'
            },
            error: function () {
                alert("Ошибка:(");
            },
            success: function (data) {
                $(".body_popup").append(data)
                $("#popup"+x).fadeIn(300, 'linear')
                console.log('privet')
            }
        })
    }
    function hidepopupvalue(x) {
        $("#"+x).remove();
    }
    function deletehealth(x) {
        var validate = confirm("Вы действительно хотите удалить?")
        if (validate == true) {
            $("#update").attr('name', 'delete')
            $("#popupvalue").submit()
        }
    }
    function addhealth(x) {
        var time = '<?=$popupdate?>';
        $("#popup_time").text(time + ' ' + x)
        $("#timestamp").val(x);
        showpopup()
    }
</script>
