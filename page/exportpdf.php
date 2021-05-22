<?php
session_start();
require '../func.php';
if (!isset($_SESSION['nama']) || !isset($_POST['submit'])) {
	header("location:" . base_url());
}

// mpdfnya
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

ob_start();

$tanggal1 = $_POST['tanggal1'];
$tanggal2 = $_POST['tanggal2'];

$query = "SELECT * FROM inventaris 
            INNER JOIN lokasi
            ON lokasi.id_lokasi = inventaris.id_lokasi
            WHERE tanggal BETWEEN '{$tanggal1}' AND '{$tanggal2}'";
$arr = fetch_data($conn, $query);
$i = 1;

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<table>
	<tr>
		<td>
			<img src="<?= base_url(); ?>/page/img/sma1-logo.png" width="85" height="85">
		</td>
		<td>
			<h4>Laporan Inventaris</h4>
			<h4>SMAN 1 Probolinggo<br>Jalan Raya Soekarno-Hatta No. 137, Kota Probolinggo, Jatim</h4>
		</td>
	</tr>
</table>
<br>
<div class="text-center"><b>Periode : <?php echo $tanggal1 . " - " . $tanggal2 ?></b></div>
<hr>
<table class="table table-bordered">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nama Barang</th>
			<th scope="col">Lokasi</th>
			<th scope="col">Jumlah</th>
			<th scope="col">Tanggal</th>
			<th scope="col">Kondisi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($arr as $data) : ?>
			<tr>
				<td><?= $i++; ?></td>
				<td><?= $data['nama_barang']; ?></td>
				<td><?= $data['nama_lokasi']; ?></td>
				<td><?= $data['jumlah']; ?></td>
				<td><?= $data['tanggal']; ?></td>
				<td><?= $data['kondisi']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output();
?>