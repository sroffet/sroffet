<<<<<<< Updated upstream
=======
<?php 
include_once '../../controller/produitC.php';
include_once '../../model/produit.php';
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';

  $inf1= new produitC();
  $liste=$inf1->afficherProduits();
  $inf2= new categorieC();
  $liste2=$inf2->afficherCategories();
?>


>>>>>>> Stashed changes
<!DOCTYPE html>
<html lang="en">

  <head>
<<<<<<< Updated upstream

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>le bazar culturel</title>
    <link rel="shortcut icon" href="images/logo.png">
  
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
=======
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>le bazar culturel</title>
    <link rel="shortcut icon" href="images/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
>>>>>>> Stashed changes
  
  </head>
  
  <body>
  
<<<<<<< Updated upstream
    <!-- Navigation -->
    <nav class="navbar-expand-lg navbar-light badge-light fixed-top">
      <div class="login">
        
        <a style="color:black;" href="#">s'inscrire</a>
        <a style="color:black;" >/</a>
        <a style="color:black" href="#">se connecter</a>
  
        
      
    </div>
        <div class="titre">
        <a href="#"><img class="logo" src="images/logo.png" >
        <a  class="nav-link" href="index.php">Le bazar culturel</a>
      </div>
       
       <!-- <a href="#"><img class="card-img-top" src="images/logo.png" alt=""></a>-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="about.php">A propos de nous</a>
            </li>
  
            <li class="nav-justified dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catégories
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="Instrument.php">Instrument</a>
                <a class="dropdown-item" href="Livres.php">Livres</a>
                <a class="dropdown-item" href="sculptures.php">sculptures</a>
                <a class="dropdown-item" href="Peintures.php">Peintures</a>
                <a class="dropdown-item" href="Photographies.php">Photographies</a>
                <a class="dropdown-item" href="Consomi_tounsi.php">Consomi_tounsi</a>
                <a class="dropdown-item" href="tickets.php">tickets</a>
                
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="Evenements.php">Evenements</a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Articles</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Artiste
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
               <a class="dropdown-item" href="Tous les artistes.php">Tous les artistes</a>
                <!-- <a class="dropdown-item" href="sidebar.php">Sidebar Page</a>
                <a class="dropdown-item" href="faq.php">FAQ</a>
                <a class="dropdown-item" href="404.php">404</a>
                <a class="dropdown-item" href="pricing.php">Pricing Table</a>-->
              </div>
            </li>
                  <!-- Sidebar Widgets Column -->
        <div class="col-md-3">
  
          <!-- Search Widget -->
          <div class="card mb-3">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="recherche...">
                <span class="input-group-append">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
          </ul>
        </div>
      </div>
    </nav>
  

=======
  <?php
        foreach($liste2 as $a) {
    ?>
    <?php include_once 'header.php'; ?>
    <?php
    }
    ?>
  
>>>>>>> Stashed changes
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Portfolio Item
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Portfolio Item</li>
    </ol>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="http://placehold.it/750x500" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">Project Description</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
        <h3 class="my-3">Project Details</h3>
        <ul>
          <li>Lorem Ipsum</li>
          <li>Dolor Sit Amet</li>
          <li>Consectetur</li>
          <li>Adipiscing Elit</li>
        </ul>
      </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Related Projects</h3>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

</div>
<<<<<<< Updated upstream
<!-- contacter nous! -->
  
    <!-- Footer -->
    <footer class="py-5 badge-info">
      <div class="container"> 
        <div class="contact-header">
          <h3> Suivez nous sur :</h3>
          
        </div>
      <div class="social-icon">
        <a href="https://twitter.com/?lang=fr"><i class="icon1"></i></a>
        <a href="https://fr-fr.facebook.com/"><i class="icon2"></i></a>
        <a href="https://www.google.com/webhp?authuser=0"><i class="icon3"></i></a>
        <a href="https://www.youtube.com/"><i class="icon4"></i></a>
        <a href="#"><i class="icon5"></i></a>
        <a href="#"><i class="icon6"></i></a>
        <a href="https://www.pinterest.fr/"><i class="icon7"></i></a>
        <a href="#"><i class="icon8"></i></a>
      </div>
      <!-- /.container -->
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="contact.php">Contact</a>
      </div>
      <div class="container">
        <p class="m-0 text-center text-white">CopyRight FreeDev 2021</p>
      </div>
    </footer>
  
    <!--  core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <div class="footer-bottom">
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
          /*
          var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
           };
          */
          
          $().UItoTop({ easingType: 'easeOutQuart' });
          
        });
      </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>
=======
<?php include_once 'footer.php'; ?>
>>>>>>> Stashed changes

</body>

</html>
