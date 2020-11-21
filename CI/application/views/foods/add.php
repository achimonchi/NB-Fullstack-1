<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a href="<?= site_url() ?>" class="btn btn-dark btn-sm">Back</a>
            <h1>Form Add Foods</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="<?= site_url('/foods/processAdd') ?>" method="POST">
                        <label for="">Nama Makanan</label>
                        <input type="text" name="mk_nama" class="form-control mb-3">
                        <label for="">Harga Makanan</label>
                        <input type="text" name="mk_harga" class="form-control mb-3">
                        <label for="">Deskripsi</label>
                        <input type="text" name="mk_deskripsi" class="form-control mb-3">
                        <button type="submit" name="addFood" class="btn btn-primary btn-sm btn-block">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>