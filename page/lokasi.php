<div class="card border-secondary">
    <div class="card-body">
        <h5 class="card-title">Data Lokasi</h5>
        <hr>
        <a class="btn btn-primary" href="<?= base_url(); ?>/page/index.php?laman=form_tambah_lokasi">Tambah Data</a>
        <?php
        $s = isset($_GET['s']) ? $_GET['s'] : '';
        $query = "SELECT * FROM lokasi
                WHERE nama_lokasi LIKE '%{$s}%'
                OR penanggung_jawab LIKE '%{$s}%'";
        $arr = fetch_data($conn, $query);
        $i = 1;
        ?>
        <form action="<?= base_url(); ?>/page/index.php" method="GET" class="mt-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <input type="hidden" text="" name="laman" value="lokasi">
                        <input type="text" class="form-control" placeholder="Cari ..." aria-describedby="button-addon2" name="s">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </div>
        </form>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Penanggung Jawab</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arr as $data) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $data['nama_lokasi']; ?></td>
                        <td><?= $data['penanggung_jawab']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>/page/index.php?laman=form_edit_lokasi&id=<?= $data['id_lokasi']; ?>" class="btn btn-info text-white">Edit</a>
                            <a href="<?= base_url(); ?>/page/index.php?laman=hapus_lokasi&id=<?= $data['id_lokasi']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>