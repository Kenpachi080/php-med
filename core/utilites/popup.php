<?php
function PopupNotValue($style, $option)
{
    $result = '<div class="popup" id="popupcreate">
    <div class="popup_content">
        <form action="" method="POST">
            <p id="incident" align="center">Создание плана лечения</p>
            <div onclick="hidepopup()" class="close">X</div>
            <p id="popup_time" align="center"></p>
            <input type="hidden" name="timestamp" id="timestamp">
            <div class="row">
                <div class="col-md-12 popup-flex">
                    <label for="" class="">Пациент</label>
                    <select '.$style.' name="clientid" required class="form-control"
                                          id="clientid">'.$option.'</select>
                </div>
                <div class="col-md-6 popup-flex">
                    <label for="" class="">Дневник лечения</label>
                    <input type="text" placeholder="Дневник лечения" required name="dnevnik" class="form-control">
                </div>
                <div class="col-md-6 popup-flex">
                    <label for="" class="">Фамилия лечащего врача</label>
                    <input type="text" placeholder="Фамилия лечащего врача" required name="tutorFIO"
                           class="form-control">
                </div>
                <div class="col-md-12 popup-flex">
                    <label for="Plan" class="">План лечения</label>
                    <textarea name="Plan" id="Plan" cols="5" class="form-control" required rows="5"></textarea>
                </div>
                <div class="col-md-12 popup-flex">
                    <label for="" class="">Назначение</label>
                    <textarea name="naznachenie" id="naznachenie" required cols="5" class="form-control"
                              rows="5"></textarea>
                </div>
                <div class="col-md-6 popup-flex">
                    <label for="" class="">Врач</label>
                    <input type="text" placeholder="Врач" required name="Doc" class="form-control">
                </div>
                <div class="col-md-6 popup-flex">
                    <label for="" class="">Заведующий отделом</label>
                    <input type="text" placeholder="Заведующий отделом" required name="Menegment" class="form-control">
                </div>
                <input type="hidden" name="valikey" id="valikey">
                <input type="hidden" name="create" id="job">
                <button class="job btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
</div>';
    return $result;
}

function PopupValue($firstname, $lastname, $patronymic, $id, $dnevnik, $tutorFIO, $Plan, $naznachenie, $Doc, $Menegment) {
        $result = '<div class="popup popupvalue" id="popup'.$id.'">
    <div class="popup_content">
        <form action="" id="popupvalue" method="POST">
            <p id="incident" align="center">План лечения</p>
            <div onclick="hidepopupvalue()" class="close">X</div>
            <p id="popup_time" align="center"></p>
            <input type="hidden" name="timestamp" id="timestamp">
            <input type="hidden" name="id" id="id" value="'.$id.'">
            <div class="row">
                <div class="col-md-12 popup-flex">
                    <label for="" class="">Пациент</label>
                    <input type="text" name="FIO" id="FIO" value="'.$lastname.' '.$firstname.' '.$patronymic.'" disabled class="form-control">
                </div>
                <div class="col-md-6 popup-flex">
                    <label for="" class="">Дневник лечения</label>
                    <input type="text" placeholder="Дневник лечения" value="'.$dnevnik.'" required name="dnevnik" class="form-control">
                </div>
                <div class="col-md-6 popup-flex">
                    <label for="" class="">Фамилия лечащего врача</label>
                    <input type="text" placeholder="Фамилия лечащего врача" value="'.$tutorFIO.'" required name="tutorFIO"
                           class="form-control">
                </div>
                <div class="col-md-12 popup-flex">
                    <label for="Plan" class="">План лечения</label>
                    <textarea name="Plan" id="Plan" cols="5" class="form-control" required rows="5">'.$Plan.'</textarea>
                </div>
                <div class="col-md-12 popup-flex">
                    <label for="" class="">Назначение</label>
                    <textarea name="naznachenie" id="naznachenie" required cols="5" class="form-control"
                              rows="5">'.$naznachenie.'</textarea>
                </div>
                <div class="col-md-6 popup-flex">
                    <label for="" class="">Врач</label>
                    <input type="text" placeholder="Врач" value="'.$Doc.'" required name="Doc" class="form-control">
                </div>
                <div class="col-md-6 popup-flex">
                    <label for="" class="">Заведующий отделом</label>
                    <input type="text" placeholder="Заведующий отделом" value="'.$Menegment.'" required name="Menegment" class="form-control">
                </div>
                <input type="hidden" name="valikey" id="valikey">
                <input type="hidden" name="update" id="update" value="1">
                <button class="job btn btn-primary">Сохранить</button>
                <button onclick="deletehealth('.$id.')" class="job btn btn-danger">Удалить</button>
            </div>
        </form>
    </div>
</div>';
        return $result;
}