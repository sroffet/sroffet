<?php 
include_once '../../controller/categorieC.php';
include_once '../../model/categorie.php';
include_once '../../controller/produitC.php';
include_once '../../model/produit.php';
 $n=0;
$conn=mysqli_connect("localhost","dhia72","191JMT1252","bazarculturelle");
$sql="SELECT * FROM produits  ORDER BY QTE DESC ";
$result = $conn->query($sql) or die($conn->error);


  
  $inf1= new categorieC();
  $liste=$inf1->afficherCategories();
 
?>

<!DOCTYPE html>
<html lang="en">

<head>

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
    <link href="dark.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

    <style>
   
   .BC {
    position: relative;
    display: inline-block;
    padding: 15px 30px;
    color: #2196f3;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 24px;
    overflow: hidden;
    transition: 0.2s;
}



.BC:hover {
    color: #255784;
    background: #2196f3;
    box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
    transition-delay: 1s;
}


.BC span {
    position: absolute;
    display: block;
}




.BC span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #2196f3);
}


.BC:hover span:nth-child(1) {
    left: 100%;
    transition: 1s;
}


.BC span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #2196f3);
}

.BC:hover span:nth-child(3) {
    right: 100%;
    transition: 1s;
    transition-delay: 0.5s;
}



.BC  span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #2196f3);
}

.BC :hover span:nth-child(2) {
    top: 100%;
    transition: 1s;
    transition-delay: 0.25s;
}



.BC span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #2196f3);
}

.BC:hover span:nth-child(4) {
    bottom: 100%;
    transition: 1s;
    transition-delay: 0.75s;
}




    



    
    
    </style>
</head>

<body>

    <!-- Navigation -->
    <?php
        foreach($liste as $a) {
    ?>
    <?php include_once 'header2.php'; ?>
    <?php
    }
    ?>
    <header>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('images/banner.png')">

                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/banner3.jpg')">
                    <div class="banner-wrap">
                        <div class="banner_center">
                            <h1>Second Slide</h1>
                            <h2>This is a description for the second slide.</h2>
                        </div>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/banner2.jpg')">
                    <div class="banner-wrap">
                        <div class="banner_center">
                            <h1>Third Slide</h1>
                            <h2>This is a description for the third slide.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

     
        <script src="black.js"></script>
    </header>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Artistes</h1>

        <!-- artistes -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">artistes 1</h4>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="Tous les artistes.php">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">artiste 2</h4>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint
                            fuga.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="Tous les artistes.php">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">artiste 3</h4>
                    <div class="card-body">
                        <p class="card-text">..</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="Tous les artistes.php">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- vente -->
        <h2>Nos s??lections</h2>
       
        <div class="row">
        <?php
        $n=0;
       while($row = $result->fetch_assoc() ) {
           if($n<6) {
       echo' <div class="col-md-4">
       <div class="card mb-3 product-wap rounded-0">
           <div class="card rounded-0">
               <img  class="card-img rounded-0 img-fluid"  src="'.$row['IMAGE'].'" style="width: 400px; height: 400px;" >
               <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                   <ul class="list-unstyled">
                   <a style="color:white;" href="" class="h3 text-decoration-none"> '.$row['DESCP'].'</a>
                   
                   <a style="display: block;
                   text-align: center;"class="BC text-white mt-2"href="readmore.php?REFERENCE='.$row['REFERENCE'].'"id="REFERENCE" name="REFERENCE">
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   <i class="far fa-eye"></i></a>
                   <a style="display: block;
                   text-align: center;" class="BC text-white" href="favo.php?REFERENCE='.$row['REFERENCE'].'">
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   
                   <i class="far fa-heart"></i></a>
                   </ul>
               </div>
           </div>
           <div class="card-body">
               <a style="color:red;" href="" class="h3 text-decoration-none"> '.$row['NOM'].'</a>
               
              
              
           </div>
       </div>
       </div>


       ';

    
    }
     $n++; 
    }
    ?>

            
         
        </div>
  
        <!-- /.row -->

        <!-- evenement -->
        <div class="row">
            <div class="col-lg-6">
                <h4 class="card-title">
                    <a href="Evenements.php">Soir?? inobliable</a>
                </h4>
                <p>Ne rater pas notre soir?? Jazz.</p>
                <ul>
                    <li>
                        <strong>le 01/05/2021</strong>
                    </li>
                    <li>Hotel Badira Hammamet</li>

                </ul>

            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/img7.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- comment ??a marche -->

        <div class="services-section" id="services">
            <div class="container">
                <div class="services-header">
                    <h3 class="card-title">
                        <a>Essayez gratuitement l???oeuvre chez vous pendant 14 jours:</a>
                    </h3>
                </div>

                <div class="col-md-4 services-grid">
                    <img src="images/img8.png" alt="" />
                    <h5>Prix n??goci??s</h5>
                    <p>Le bazar culturel d??veloppe des relations durables,de confiance avec ses galeries partenaires. </p>

                </div>
                <div class="col-md-4 services-grid">
                    <img src="images/img9.png" alt="" />
                    <h5>Paiements s??curis??s</h5>
                    <p>Vous pouvez r??gler votre commande entoute s??curit?? par carte bancaire, Paypal ou virement bancaire.</p>

                </div>
                <div class="col-md-4 services-grid">
                    <img src="images/img10.png" alt="" />
                    <h5>Livraison</h5>
                    <p>le bazar culturel livre les oeuvres dans toute la Tunisie entier via des transporteurs sp??cialis??s. </p>
                    <p> </p>
                </div>
            </div>
            </div>
           
     <?php include_once 'footer.php'; ?>
     
     <script src="black.js"></script>
     <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>      
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/nivo-lightbox.js"></script>     
    <script src="js/jquery.magnific-popup.min.js"></script>     
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>
</body>

</html>