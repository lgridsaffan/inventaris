<?php
if (isset($_POST['submit'])) {
    $lokasi = mysqli_real_escape_string($conn, filter_var($_POST['lokasi'], FILTER_SANITIZE_STRING));
    $penanggung_jawab = mysqli_real_escape_string($conn, filter_var($_POST['penanggung_jawab'], FILTER_SANITIZE_STRING));

    if ($lokasi != "" && $penanggung_jawab != "") {
        $query = "INSERT INTO lokasi
            (nama_lokasi, penanggung_jawab)
            VALUES
            ('{$lokasi}','{$penanggung_jawab}')";
        if (!mysqli_query($conn, $query)) {
            die("error");
        }
    }
}
header("location:" . base_url() . "/page/index.php?laman=lokasi");
