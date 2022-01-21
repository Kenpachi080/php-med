<?php
if (!isset($_POST['query']) || !$_POST['query']) {
    exit("Нет данных определяющих тип запроса");
} else {
    $query = trim($_POST['query']); // Очищаем от лишних пробелов
    // Определяем тип запроса
    switch ($query) {
        /* получаем через аджакс search */
        case 'showcontact':
            $id = trim($_POST['id']);
            $popup = rowquery("SELECT * FROM `health`");
            $result = 1;
            break;
    }
}

echo json_encode($result);
?>
