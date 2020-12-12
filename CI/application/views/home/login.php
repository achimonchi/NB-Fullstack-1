<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bg-white">
                <h3 class="text-center">Login</h3>
                <form method="POST" action="<?= site_url('/home/processLogin') ?>">
                    <label for="">username</label>
                    <input type="text" class="form-control mb-3" placeholder="username ..." name="username">
                    <label for="">password</label>
                    <input type="password" placeholder="*****" class="form-control mb-3" name="password">
                    <button class="btn btn-success btn-sm btn-block" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>