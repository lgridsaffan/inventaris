<div class="card border-secondary">
    <div class="card-body">
        <h5 class="card-title">Cetak Laporan</h5>
        <hr>
        <form action="<?= base_url(); ?>/page/exportpdf.php" method="POST" class="mt-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="tanggal1" class="form-label">Mulai Tanggal</label>
                        <input type="date" class="form-control" name="tanggal1" id="tanggal1">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal2" class="form-label">Sampai Tanggal</label>
                        <input type="date" class="form-control" name="tanggal2" id="tanggal2">
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Cetak</button>
                </div>
            </div>
        </form>
    </div>
</div>