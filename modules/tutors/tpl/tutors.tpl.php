<?php
if (empty($_GET['tutor']) && empty($_GET['create'])) {
    include 'card.php';
} else if (isset($_GET['tutor']) && empty($_GET['create'])) {
    include 'getcard.php';
} else if (empty($_GET['tutor']) && isset($_GET['create'])) {
    include 'create.php';
} else {
    include 'card.php';
}