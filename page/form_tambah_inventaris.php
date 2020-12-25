<div class="card">
    <div class="card-body">
        <h5 class="card-title">Form Tambah Data Inventaris</h5>
        <hr>
        <?php
        $query = "SELECT id_lokasi , nama_lokasi 
        FROM lokasi";
        $arr = fetch_data($conn, $query);
        ?>
        <form action="<?= base_url(); ?>/page/index.php?laman=tambah_inventaris" method="POST">
            <div class="row mb-3">
                <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" name="namaBarang" class="form-control" id="namaBarang" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <select class="form-select" name="lokasi" id="lokasi" required>
                        <option value="" selected>Pilih lokasi</option>
                        <?php foreach ($arr as $data) : ?>
                            <option value="<?= $data['id_lokasi']; ?>"><?= $data['nama_lokasi']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                    <input type="number" name="jumlah" class="form-control" id="jumlah" min="1" required>
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Kondisi</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kondisi" id="baik" value="baik" checked>
                        <label class="form-check-label" for="baik">
                            Baik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kondisi" id="rusak" value="rusak">
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