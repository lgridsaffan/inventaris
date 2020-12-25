<div class="card">
    <div class="card-body">
        <h5 class="card-title">Form Tambah Data Lokasi</h5>
        <hr>
        <?php
        if (!isset($_GET['id'])) {
            header("location:" . base_url() . "/page/index.php?laman=lokasi");
        }
        $id = $_GET['id'];
        $query = "SELECT nama_lokasi, penanggung_jawab
            FROM lokasi
            WHERE id_lokasi = '{$id}'";
        $data = fetch_row($conn, $query);
        ?>
        <form action="<?= base_url(); ?>/page/index.php?laman=edit_lokasi" method="POST">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="row mb-3">
                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <input type="text" name="lokasi" class="form-control" id="lokasi" value="<?= $data['nama_lokasi']; ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="penganngung_jawab" class="col-sm-2 col-form-label">Penanggung Jawab</label>
                <div class="col-sm-10">
                    <input type="text" name="penanggung_jawab" class="form-control" id="penganngung_jawab" value="<?= $data['penanggung_jawab']; ?>" required>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url(); ?>/page/index.php?laman=lokasi" class="btn btn-success">Kembali</a>
        </form>
    </div>
</div>