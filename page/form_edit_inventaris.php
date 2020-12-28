<div class="card">
    <div class="card-body">
        <h5 class="card-title">Form Edit Data Inventaris</h5>
        <hr>
        <?php
        if (!isset($_GET['id'])) {
            header("location:" . base_url() . "/page/index.php?laman=inventaris");
        }
        $id = $_GET['id'];
        $query1 = "SELECT id_lokasi , nama_lokasi
            FROM lokasi";
        $query2 = "SELECT * FROM inventaris 
            WHERE id_inventaris = '{$id}'";
        $arr1 = fetch_data($conn, $query1);
        $data2 = fetch_row($conn, $query2);
        ?>
        <form action="<?= base_url(); ?>/page/index.php?laman=edit_inventaris" method="POST">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="row mb-3">
                <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" name="namaBarang" class="form-control" id="namaBarang" value="<?= $data2['nama_barang']; ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <select class="form-select" name="lokasi" id="lokasi" required>
                        <?php foreach ($arr1 as $data1) : ?>
                            <option value="<?= $data1['id_lokasi']; ?>" <?= $data1['id_lokasi'] == $data2['id_lokasi'] ? "selected" : "" ?>><?= $data1['nama_lokasi']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                    <input type="number" name="jumlah" class="form-control" id="jumlah" min="1" value="<?= $data2['jumlah']; ?>" required>
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Kondisi</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kondisi" id="baik" value="baik" <?= $data2['kondisi'] == "baik" ? "checked" : "" ?>>
                        <label class="form-check-label" for="baik">
                            Baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kondisi" id="rusak" value="rusak" <?= $data2['kondisi'] == "rusak" ? "checked" : "" ?>>
                        <label class="form-check-label" for="rusak">
                            Rusak
                        </label>
                    </div>
                </div>
            </fieldset>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url(); ?>/page/index.php?laman=inventaris" class="btn btn-success">Kembali</a>
        </form>
    </div>
</div>