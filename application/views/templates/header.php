<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">

    <link rel="favicon" type="image/png" href="<?php echo base_url(); ?>assets/images/codeigniter1.png">

    <title>Hello!</title>
  </head>

  <body>
    <div class="glass">
      <div class="fixed-top">
        <div class="nav col-md-12">
          <div class="col-md-4 text-center">
            <a class="nav-brand" href="<?php echo base_url(); ?>blogs">
              <h1 class="animated bounceInDown pt">PHP Emailing</h1>
            </a>
          </div>
          <div class="col-md-4 offset-md-4 text-right">
            <p class="animated bounceInDown pt">
              <?php
                if (isset($_SESSION['user_loggedin']) == FALSE) {
                  echo '<i class="fas fa-user"></i>'; echo anchor("blogs", ' SIGN IN');
                } else {
                  echo '<i class="fas fa-user"></i>'; echo anchor("blogs/logout", ' SIGN OUT');
                }
               ?>
            </p>
          </div>
        </div>
      </div>
