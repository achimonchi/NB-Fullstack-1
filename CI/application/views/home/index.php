<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Data Makanan</h1>
                    <p class="lead">Ini adalah table data makanan</p>
                    <a href="<?= site_url('/foods/add') ?>" class="btn btn-primary btn-sm">Tambah Makanan</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="makanan">
    <div class="container">
        <div class="row">
            <?php 
                $no = 1;
                foreach($foods as $food) :
            ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        <?= $food->mk_nama ?>
                    </div>
                    <div class="card-body">
                        <?= $food->mk_deskripsi ?>
                        <div class="sub-header">
                            <?= $food->mk_harga ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>