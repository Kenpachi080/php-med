<?php
include 'core.php';
include 'utilites/utilites.php';
include 'utilites/popup.php';
if (!isset($_POST['query']) || !$_POST['query']) {
    exit("Нет данных определяющих тип запроса");
} else {
    $query = trim($_POST['query']); // Очищаем от лишних пробелов
    // Определяем тип запроса
    switch ($query) {
        /* получаем через аджакс search */
        case 'showcontact':
            $style = "style='
            display: block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            '";
            $id = trim($_POST['id']);
            $popup = rowquery("SELECT * FROM `health` WHERE id = $id");
            $sqlclients = rowquery("SELECT * FROM `clients` WHERE ClientID = $popup[ClientID]");
            $result = PopupValue($sqlclients['firstname'], $sqlclients['lastname'], $sqlclients['patronymic'], $popup['id'], $popup['dnevnik'], $popup['tutorFIO'],
                $popup['Plan'],
                $popup['naznachenie'], $popup['Doc'], $popup['Menegment']);
            break;
        case 'showclient':
            $args = trim($_POST['args']);
            $sqlclients = queryset("SELECT ClientID, CONCAT(lastname, ' ', firstname, ' ', patronymic) as FIO
            FROM `clients` WHERE CONCAT(lastname, ' ',firstname, ' ',patronymic) LIKE '%$args%'");
//            visualize("SELECT * FROM `clients` WHERE CONCAT(lastname, ' ',firstname, ' ',patronymic) LIKE '%$args%'");
            $result = '';
            while ($clients = $sqlclients ->fetch_array(MYSQLI_ASSOC)) {
                $result .= '    <div class="align-center">
        <div>'.$clients['FIO'].'</div>
        <div>
            <button id="'.$clients['ClientID'].'"  onclick="redirect('.$clients['ClientID'].')" class="redirect btn btn-primary">Посмотреть профиль</button>
        </div>
    </div>';
//                $result .= "$clients[lastname]";
            }
            break;

    }
}

echo json_encode($result);
?>
