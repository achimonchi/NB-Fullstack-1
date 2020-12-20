<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Data Makanan</h1>
                    <p class="lead">Ini adalah table data makanan</p>
                    <?php
                        if(check_role($role, 'admin')) :
                        // if(check_role($this, 'admin')) :
                    ?>
                        <a href="<?= site_url('/foods/add') ?>" class="btn btn-primary btn-sm">Tambah Makanan</a>
                    <?php
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="makanan">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <?php if($this->session->flashdata('success')) : ?>
                    
                    <div class="alert alert-success" role="alert">
                        <?= $this->session->flashdata('success') ?>
                    </div>
                
                <?php elseif($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $this->session->flashdata('error') ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
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
                        <div class="float-right">
                            <?php if(check_role($role, "admin")) : ?>
                                <a href="<?= site_url('foods/detail/').$food->_id ?>" class="btn btn-success btn-sm">Ubah</a>
                                <a href="<?= site_url('foods/delete/').$food->_id ?>" class="btn btn-danger btn-sm">Hapus</a>
                            <?php else : ?>
                                <a href="<?= site_url('foods/detail/').$food->_id ?>" class="btn btn-success btn-sm">Ubah</a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>