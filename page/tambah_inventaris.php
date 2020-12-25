<?php
if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $nama_barang = mysqli_real_escape_string($conn, filter_var($_POST['namaBarang'], FILTER_SANITIZE_STRING));
    $lokasi = mysqli_real_escape_string($conn, $_POST['lokasi']);
    $jumlah = mysqli_real_escape_string($conn, $_POST['jumlah']);
    $kondisi = mysqli_real_escape_string($conn, $_POST['kondisi']);

    if ($nama_barang != "" && $lokasi != "" && $jumlah != "" && $kondisi != "") {
        $query = "INSERT INTO inventaris
            (nama_barang, id_lokasi, jumlah, tanggal, kondisi)
            VALUES
            ('{$nama_barang}','{$lokasi}','{$jumlah}',now(),'{$kondisi}')";
        if (!mysqli_query($conn, $query)) {
            die("error");
        }
    }
}
header("location:" . base_url() . "/page/index.php?laman=inventaris");
