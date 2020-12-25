<?php
if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $nama_barang = mysqli_real_escape_string($conn, filter_var($_POST['namaBarang'], FILTER_SANITIZE_STRING));
    $lokasi = mysqli_real_escape_string($conn, $_POST['lokasi']);
    $jumlah = mysqli_real_escape_string($conn, $_POST['jumlah']);
    $kondisi = mysqli_real_escape_string($conn, $_POST['kondisi']);

    if ($id != "" && $nama_barang != "" && $lokasi != "" && $jumlah != "" && $kondisi != "") {
        $query = "UPDATE inventaris SET
            nama_barang = '{$nama_barang}',
            id_lokasi = '{$lokasi}',
            jumlah = '{$jumlah}',
            kondisi = '{$kondisi}'
            WHERE id_inventaris = '{$id}'";
        if (!mysqli_query($conn, $query)) {
            die("error");
        }
    }
}
header("location:" . base_url() . "/page/index.php?laman=inventaris");
