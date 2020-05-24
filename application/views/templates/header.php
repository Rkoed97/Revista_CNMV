<html>
  <head>
      <title>Revista_CNMV</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
      <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Revista CNMV</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>">Acasa <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Despre
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url(); ?>about/revista">Revista</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>about/redactie">Redactie</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>posts">Reviste</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>categories">Categorii</a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <?php if(!$this->session->userdata('logged_in')) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/login">Autentificare</a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Upload postare</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Creare categorie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/register">Creare user</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Deautentificare</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
    <main>
        <div class="container-xl">
          <!-- Flash messages -->
          <?php if($this->session->tempdata('user_registered')): ?>
            <?php echo '<div class="alert alert-success alert-dismissable fade show" role="alert">'.$this->session->tempdata('user_registered').'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'; ?>
          <?php endif; ?>

          <?php if($this->session->tempdata('post_created')): ?>
            <?php echo '<div class="alert alert-success alert-dismissable fade show" role="alert">'.$this->session->tempdata('post_created').'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'; ?>
          <?php endif; ?>

          <?php if($this->session->tempdata('post_updated')): ?>
            <?php echo '<div class="alert alert-success alert-dismissable fade show" role="alert">'.$this->session->tempdata('post_updated').'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'; ?>
          <?php endif; ?>

          <?php if($this->session->tempdata('category_created')): ?>
            <?php echo '<div class="alert alert-success alert-dismissable fade show" role="alert">'.$this->session->tempdata('category_created').'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'; ?>
          <?php endif; ?>

          <?php if($this->session->tempdata('post_deleted')): ?>
            <?php echo '<div class="alert alert-success alert-dismissable fade show" role="alert">'.$this->session->tempdata('post_deleted').'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'; ?>
          <?php endif; ?>

          <?php if($this->session->tempdata('login_failed')): ?>
            <?php echo '<div class="alert alert-success alert-dismissable fade show" role="alert">'.$this->session->tempdata('login_failed').'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'; ?>
          <?php endif; ?>

          <?php if($this->session->tempdata('user_loggedin')): ?>
            <?php echo '<div class="alert alert-success alert-dismissable fade show" role="alert">'.$this->session->tempdata('user_loggedin').'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'; ?>
          <?php endif; ?>

          <?php if($this->session->tempdata('user_loggedout')): ?>
            <?php echo '<div class="alert alert-success alert-dismissable fade show" role="alert">'.$this->session->tempdata('user_loggedout').'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'; ?>
          <?php endif; ?>

          <?php if($this->session->tempdata('category_deleted')): ?>
            <?php echo '<div class="alert alert-success alert-dismissable fade show" role="alert">'.$this->session->tempdata('category_deleted').'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'; ?>
          <?php endif; ?>