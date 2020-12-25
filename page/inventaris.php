<div class="card border-secondary">
    <div class="card-body">
        <h5 class="card-title">Data Inventaris</h5>
        <hr>
        <a class="btn btn-primary" href="<?= base_url(); ?>/page/index.php?laman=form_tambah_inventaris">Tambah Data</a>
        <?php
        $query = "SELECT * FROM inventaris 
            INNER JOIN lokasi
            ON lokasi.id_lokasi = inventaris.id_lokasi";
        $arr = fetch_data($conn, $query);
        $i = 1;
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kondisi</th>
                    <th scope="col">Aksi</th>
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
                        <td>
                            <a href="<?= base_url(); ?>/page/index.php?laman=form_edit_inventaris&id=<?= $data['id_inventaris']; ?>" class="btn btn-info text-white">Edit</a>
                            <a href="<?= base_url(); ?>/page/index.php?laman=hapus_inventaris&id=<?= $data['id_inventaris']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>