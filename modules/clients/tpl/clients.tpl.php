<?php
if (empty($_GET['client']) && empty($_GET['create'])) {
    include 'table.php';
} else if (isset($_GET['client']) && empty($_GET['create'])) {
    include 'card.php';
} else if (empty($_GET['client']) && isset($_GET['create'])) {
    include 'create.php';
} else {
    include 'table.php';
}