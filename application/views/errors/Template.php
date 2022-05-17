<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Energy</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo css_loader('bootstrap.min') ;?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo css_loader('shop-homepage') ;?>" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Client
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
        </ul>
      
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-9">
        <div class="row">

          <div class="col-md-12">
          <?php include($template); ?>

          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; levent 2022</p>
    </div>
    <!-- /.container -->
  </footer>

 

</body>

</html>
