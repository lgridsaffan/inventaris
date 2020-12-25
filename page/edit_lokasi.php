<?php
if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $lokasi = mysqli_real_escape_string($conn, filter_var($_POST['lokasi'], FILTER_SANITIZE_STRING));
    $penanggung_jawab = mysqli_real_escape_string($conn, filter_var($_POST['penanggung_jawab'], FILTER_SANITIZE_STRING));
    if ($id != "" && $lokasi != "" && $penanggung_jawab != "") {
        $query = "UPDATE lokasi SET
            nama_lokasi = '{$lokasi}',
            penanggung_jawab = '{$penanggung_jawab}'
            WHERE id_lokasi = '{$id}'";
        if (!mysqli_query($conn, $query)) {
            die("error" . mysqli_error($conn));
        }
    }
}
header("location:" . base_url() . "/page/index.php?laman=lokasi");
