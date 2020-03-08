<html>
  <head>
    <title>ciblog</title>
    
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

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
          </ul>
        </div>

      </div>
    </nav>

    <div class="container mt-4">