<html>
  <head>
    <title>ciblog</title>
    
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a href="<?php echo base_url(); ?>" class="navbar-brand">ciblog</a>
        <button 
          class="navbar-toggler" 
          type="button" 
          data-toggle="collapse" 
          data-target="#navbarColor02" 
          aria-controls="navbarColor02" 
          aria-expanded="false" 
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>">
                Home <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>about">
                About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>posts">
                Posts
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>posts/create">
                Create Posts
              </a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-right">
            <?php if (!$this->session->userdata('logged_in')) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/login">
                Login
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/register">
                Register
              </a>
            </li>
            <?php endif; ?>
            <?php if ($this->session->userdata('logged_in')) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/logout">
                Logout
              </a>
            </li>
            <?php endif; ?>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container mt-4">
      <!-- flash messages -->
      <?php if($this->session->flashdata('user_registered')) : ?>
        <p class="alert alert-primary">
          <?= $this->session->flashdata('user_registered'); ?>
        </p>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_success')) : ?>
        <p class="alert alert-primary">
          <?= $this->session->flashdata('login_success'); ?>
        </p>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')) : ?>
        <p class="alert alert-danger">
          <?= $this->session->flashdata('login_failed'); ?>
        </p>
      <?php endif; ?>

      <?php if($this->session->flashdata('logout_success')) : ?>
        <p class="alert alert-primary">
          <?= $this->session->flashdata('logout_success'); ?>
        </p>
      <?php endif; ?>
