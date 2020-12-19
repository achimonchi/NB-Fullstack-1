<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a href="<?= site_url('foods') ?>" class="btn btn-dark btn-sm">Back</a>
            <h1>Form Update Foods</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="<?= site_url('/foods/processUpdate') ?>" method="POST">
                        <input type="hidden" name="_id" value="<?= $food->_id ?>" class="form-control mb-3">
                        <label for="">Nama Makanan</label>
                        <input type="text" name="mk_nama" value="<?= $food->mk_nama ?>" class="form-control mb-3">
                        <label for="">Harga Makanan</label>
                        <input type="text" name="mk_harga" value="<?= $food->mk_harga ?>" class="form-control mb-3">
                        <label for="">Deskripsi</label>
                        <input type="text" name="mk_deskripsi" value="<?= $food->mk_deskripsi ?>" class="form-control mb-3">
                        <button type="submit" name="updateFood" class="btn btn-success btn-sm btn-block">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>