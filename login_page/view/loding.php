<?php 

session_start();
if( $_SESSION['BLOQUER']=="0") {



if( $_SESSION['TYPE']=="administrateur") {
  echo '      <meta http-equiv="refresh" content="7 http://localhost/login_page/back/index.php" >   '   ;

}
else {

  echo '      <meta http-equiv="refresh" content="7  profil.php" >   '   ;

}
}
else {

  echo '      <meta http-equiv="refresh" content="7  no.php" >   '  ;
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pace JS | Preloader</title>
    <link rel="stylesheet" href="stylel.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="pace.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
</head>
<body>
       
<h1 class="title"># Welcome <?php   echo $_SESSION['NOM'] ?> </h1>

        <div id="preloader">
            <div class="p">LOADING</div>
        </div>

        <script>

        paceOptions = {
        ajax: true,
        document: true,
        eventLag: false
        };

        Pace.on('done', function() {
        $('.p').delay(500).animate({top: '30%', opacity: '0'}, 73000, $.bez([0.19,1,0.22,1]));


        $('#preloader').delay(1500).animate({top: '-100%'}, 2000, $.bez([0.19,1,0.22,1]));

        TweenMax.from(".title", 2, {
             delay: 1.8,
                  y: 10,
                  opacity: 0,
                  ease: Expo.easeInOut
            })
       });

      </script>

</body>
</html>
