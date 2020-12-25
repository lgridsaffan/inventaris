<?php
require_once '../func.php';
if (!isset($_SESSION['nama'])) {
    header("location:" . base_url());
}

$id = $_GET['id'];
$query = "DELETE FROM inventaris
    WHERE id_inventaris = '{$id}'";
mysqli_query($conn, $query);

header("location:" . base_url() . "/page/index.php?laman=inventaris");
