<div class="card">
    <div class="card-body">
        <h5 class="card-title">Form Tambah Data Lokasi</h5>
        <hr>
        <form action="<?= base_url(); ?>/page/index.php?laman=tambah_lokasi" method="POST">
            <div class="row mb-3">
                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <input type="text" name="lokasi" class="form-control" id="lokasi" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="penganngung_jawab" class="col-sm-2 col-form-label">Penanggung Jawab</label>
                <div class="col-sm-10">
                    <input type="text" name="penanggung_jawab" class="form-control" id="penganngung_jawab" required>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url(); ?>/page/index.php?laman=lokasi" class="btn btn-success">Kembali</a>
        </form>
    </div>
</div>