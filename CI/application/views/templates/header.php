<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php if(!empty($this->session->userdata('login'))) : ?>
  <nav class="navbar mb-3 navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="<?= site_url('foods') ?>">Foods <span class="sr-only">(current)</span></a>
            <?php if(check_role($this, 'admin')) : ?>
              <a class="nav-link" href="<?= site_url('admin') ?>">Admin </a>
            <?php endif ?>
          
        </div>
        <div class="navbar-nav ml-auto">
          <?php if(!empty($this->session->userdata('login'))) echo '<a href="#" class="nav-link">Welcome,'. 
              ucfirst($this->session->userdata('login')->a_nama). 
              '('.$this->session->userdata('login')->a_role.')'.
              ' </a>'?>
          
          <a class="nav-link btn btn-danger btn-sm text-white" href="<?= site_url('home/logout') ?>" tabindex="-1" aria-disabled="true">Logout</a>
        
        </div>
      </div>
    </div>
  </nav>
  <?php endif ?>
  