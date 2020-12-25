<?php
session_start();
require '../func.php';
if (!isset($_SESSION['nama'])) {
    header("location:" . base_url());
}

require_once '../template/header.php';
if (isset($_GET['laman'])) {
    $laman = $_GET['laman'];
    require_once file_exists("{$laman}.php") ? "{$laman}.php" : "404.php";
} else {
    require_once 'beranda.php';
}
require_once '../template/footer.php';
