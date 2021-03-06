<?php

print_r($_POST);
$message_sent= false;
  if(isset($_POST['envoyer'])){

     $fullName = htmlspecialchars($_POST['name']);
     $email = trim(htmlspecialchars($_POST['email']));
     $subject = htmlspecialchars($_POST['subject']);
     $message = htmlspecialchars($_POST['message']);

      $to = "contact@gateway-academy.com";
      $content = "From : ".$fullName. "\r\n";
      $content .= "Email : ".$email. "\r\n";
      $content .= "Message : ".$message. "\r\n";
      
       
     if( mail($to,$subject,$content)){
       $message_sent= true;
     }else{
       $message_sent=false;
     }
   
    
  }
  




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - Gateway Academy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favs -->
  <link href="assets/img/favicon.png" rel="">
  <link href="assets/img/apple-touch-.png" rel="apple-touch-">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxs/css/boxs.min.css" rel="stylesheet">
  <link href="assets/vendor/remix/remix.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Gateway Academy</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo mr-auto"><img src="assets/img/favicon.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Accueil</a></li>
          <li class="drop-down"><a href="courses.html">Formations</a>
            <ul>
              <li class="drop-down"><a href="#">Accueil Dans le Transport Aérien et Maritime(ATAM)</a>
                <ul>
                  <li><a href="steward-detail.html">Hôtesse de L'air et Steward</a></li>
                  <li><a href="agent-accueil-detail.html">Agent d'accueil</a></li>
                  <li><a href="agent-escale-detail.html">Agent d'escale aèropor</a></li>
                
                </ul>
              </li>
              <li><a href="assist-market-hotel-detail.html">Assistant En Marketing touristique et hôtelier</a></li>
              <li><a href="tech-recep-detail.html">Technicien En Réception D'Hôtel</a></li>
            </ul>
          </li>
          <li><a href="./preinscription/preinscription.php">Préinscription </a></li>
          <li><a href="gallery.html">Galerie</a></li>

          <li><a href="contact.php">Contact</a></li>
 
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

 
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
    <h3>Contact</h3>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
 
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13585.653413473294!2d-7.9999909!3d31.6499091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8176c43122db9437!2sGateway%20Academy%20Marrakech!5e0!3m2!1sen!2sma!4v1612219264715!5m2!1sen!2sma" frameborder="0"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="container" data-aos="fade-up">
      <!-- si le message est envoyé -->
      <?php
      if($message_sent):
      ?>
                <div class="row mt-5">
                <div class="col-lg-4">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>Message Envoyé</strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
              
                </div>
     <?php
     endif;
     ?>
          
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Emplacement</h4>
                <p>Résidence Kawtar
                  2ème Etage N° 8 Et 14 Boulevard Allal Al Fassi
                  <br>Marrakech</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>gatewayacademyrak@gmail.com</p>
              </div>
         
              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Téléphone</h4>
                <p>(+212)524-292459 <br>
                  (+212)681-600620</p>
              </div>

            </div>

          </div>
      
          <div class="col-lg-8 mt-5 mt-lg-0">
      
          <form action="contact.php" method="post">
         <div class="form-row">
             <div class="col-md-6 form-group">
             <label for="name">Nome t Prénom</label>
             <input class="form-control" name="name" type="text">
             </div>
             <div class="col-md-6 form-group">
             <label for="email">E-mail</label>
             <input class="form-control" name="email" type="email">
             </div>            
         </div>
         <div class="form-group">
              <label for="subject">Sujet</label>
             <input class="form-control" name="subject" type="text">
             </div>
         <div class="form-group">
         <label for="message">Message</label>
             <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
             </div>
             <div class="text-center">
              <button type="submit" name="envoyer">Envoyer</button>
              <button type="reset">Reset</button>
             </div>
   
    
    </form>
           
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Gateway Academy</h3>
              <div class="info">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h5>Adresse:</h5>
                  <p>Résidence Kawtar
                    2ème Etage N° 8 Et 14 Boulevard Allal Al Fassi<br>Marrakech</p>
                </div>
  
                <div class="email">
                  <i class="icofont-envelope"></i>
                  <h5>Email:</h5>
                  <p>gatewayacademyrak@gmail.com
                  </p>
                </div>
  
                <div class="phone">
                  <i class="icofont-phone"></i>
                  <h5>Call:</h5>
                  <p>(+212)524-292459 <br>
                    (+212)681-600620</p>
                </div>
  
              </div>
              
            </div>
  
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Liens</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="index.html">Accueil</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="courses.html">Formation</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="inscription.html">Dossier d'inscription</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="gallery.html">Galerie</a> </li>
                <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Nos Formations</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil Dans le Transport Aérien Et Maritime (ATAM)</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="assist-market-hotel-detail.html">Assistanct En Marketing Touristique Et Hôtelier</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="tech-recep-detail.html">Technicien En Réception d'Hôtel</a></li>
              </ul>
            </div>
  
            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Abonnez-Vous À Notre Newsletter</h4>
              <p>POUR PLUS INFORMATIONS
              </p>
              <form action="" method="post">
                <input class="form-control" type="email" name="email"><input type="submit" value="Abonner">
              </form>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="container d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright"> 
            &copy; Droits d'auteur <strong><span>Gateway Academy </span></strong>. Tous les droits sont réservés
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="https://www.facebook.com/GatewayAcademyMarrakech" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/gateway_academy_marrakech/?hl=fr" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>
    </footer><!-- End Footer -->


  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>