<?php
 
 $message_sent = false;
 if(isset($_POST['submit'])){
	
	 $lastName = trim(htmlspecialchars($_POST['lastName']));
	 $firstName = trim(htmlspecialchars($_POST('firstName')));
	 $email = trim(htmlspecialchars($_POST['email']));
	 $phone = htmlspecialchars($_POST['phone']);
	 $sexe = htmlspecialchars($_POST['sexe']);
	 $date= htmlspecialchars($_POST['date']);
	 $code_massar = htmlspecialchars($_POST['code_massar']);
	//  $photo = htmlspecialchars($_POST['photo']);
	 $adresse = htmlspecialchars($_POST['adresse']);
	 $country = htmlspecialchars($_POST['country']);
	 $niveau = htmlspecialchars($_POST['niveau']);
	 $formation = htmlspecialchars($_POST['formation']);
      
	 $to = "nazha.ouafir@gmail.com";
	 $subject = "Préinscription";
	 $inscription = "Nom et prénom :".$lastName." ".$firstName."\r\n";
	 $inscription .= "E-mail :".$email."\r\n";
	 $inscription .= "Téléphone : ".$phone."\r\n";
	 $inscription .= "Sexe : ".$sexe."\r\n";
	 $inscription .= "Date de Naissance :".$date."\r\n";
	 $inscription .="Code Massar".$code_massar."\r\n";
	 $inscription .= "Adresse : ".$adresse."\r\n";
	 $inscription .= "Pays :".$country."\r\n";
	 $inscription .= "Niveau d'etudes :".$niveau."\r\n";
	 $inscription .= "Formation Choisis :".$formation."\r\n";
	//  $inscription .= "Photo du condidat : ".$photo;

	 if(mail($to,$subject,$inscription)){
		$message_sent= true;
	  }else{
		$message_sent=false;
	  }
	
	
	}


?>




<!DOCTYPE html>
<html lang="fr"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Gateway Academy - préinscription </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- Site Icons -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="css/classic.css">    
	<link rel="stylesheet" href="css/classic.date.css">    
	<link rel="stylesheet" href="css/classic.time.css">    
    <!-- Responsive CSS -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

 

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="../index.html">Gateway Academy</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="../index.html" class="logo mr-auto"><img src="../assets/img/favicon.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="../index.html">Accueil</a></li>
          <li class="drop-down"><a href="courses.html">Formations</a>
            <ul>
              <li class="drop-down"><a href="#">Accueil Dans le Transport Aérien et Maritime(ATAM)</a>
                <ul>
                  <li><a href="../steward-detail.html">Hôtesse de L'air et Steward</a></li>
                  <li><a href="../agent-accueil-detail.html">Agent d'accueil</a></li>
                  <li><a href="../agent-escale-detail.html">Agent d'escale aèropor</a></li>
                
                </ul>
              </li>
              <li><a href="../assist-market-hotel-detail.html">Assistant En Marketing touristique et hôtelier</a></li>
              <li><a href="../tech-recep-detail.html">Technicien En Réception D'Hôtel</a></li>
            </ul>
          </li>
          <li class="active"><a href="preinscription.html">Préinscription </a></li>
          <li> <a href="../gallery.html">Galerie</a></li>

          <li><a href="../contact.hphp">Contact</a></li>
 
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1 ><strong>GATEWAY ACADEMY</strong> est votre occasion pour découvrir le monde 
					</h1>
				</div>
			</div>
			<div >
				<h1>Let's Do it <i class='bx bx-wink-smile' ></i></h1>
			   </div> 
		</div>
	</div>
	
	 <!-- ======= register Section ======= -->
	 <section id="about" class="about">
		<div class="container" data-aos="fade-up">
		  <div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<!-- <h2>La Préinscription</h2> -->
					</div>
				</div>
			</div>
		  <div class="row">
			<div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
			  <img src="../assets/img/inscription.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
			 <p class="font-italic">
				L'inscription n'est pas définitive que sous condition de fournir les documents exigés.
			  </p> 
			  <h3>Pièces À Joindre Au Dossier D'inscription :
			  </h3>
			  <ul>
				<li><i class="icofont-check-circled"></i> 01 Demande de candidature à compléter  </li>
				<li><i class="icofont-check-circled"></i>04 Photocopies certifiées du baccalauréat (bacheliers)</li>
				<li><i class="icofont-check-circled"></i> 04 certificats de scolarité originaux du niveau d’étude, datée au 10 juillet de l’année en cours pour les candidats du niveau bac</li>
				<li><i class="icofont-check-circled"></i> 05 Photocopies légalisées de la carte d’identité nationale</li>
				<li><i class="icofont-check-circled"></i> 16 Photos d’identité format passeport</li>
				<li><i class="icofont-check-circled"></i> 04 Extraits de l’acte de naissance</li>
				<li><i class="icofont-check-circled"></i> 01 Reçu de règlement des frais d’inscription</li>
				<li><i class="icofont-check-circled"></i> 10 Enveloppes ( 10 Timbres - tarif en vigueur )</li>
				<li><i class="icofont-check-circled"></i> 01 Certificat d’aptitude physique (pour la filiére ATAM)</li>
  
			  </ul>
			  
			 </div>
		  </div>
		  <div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
			<?php
      if($message_sent):
      ?>
                <div class="row mt-5">
                <div class="col-lg-4">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>préinscription terminée</strong> 
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
              
                </div>

     <?php
	 else:
	 ?>
			<p class="font-italic">
					Pour valider votre inscription, veuillez tout d'abord remplis le formulaire de <strong>préinscription</strong> suivant :
				  </p>
				  <?php
     endif;
     ?>	
			</div>
		</div>
  
		</div>
	  </section>
	  <!-- End register Section -->
	
	<!-- Start Préinscription -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form action="preinscription.php" method="POST" id="contactForm">
							<div class="row">
								<div class="col-md-6">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nom" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Prénom" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="E-mail" id="email" class="form-control" name="email" required data-error="Please enter your email">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Téléphone" id="phone" class="form-control" name="phone" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<div class="form-group">
												<select class="custom-select d-block form-control" name="sexe" id="sexe" required data-error="Please select Person Sexe">
												  <option disabled selected>Sexe*</option>
												  <option value="Femme">Femme</option>
												  <option value="Homme">Homme</option>
												 
												</select>
												<div class="help-block with-errors"></div>
											</div> 
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input min="01-01-1900" max="01-01-2020" id="input_date" class="datepicker picker__input form-control" placeholder="Date Naissance" name="date" type="date" value="" equired data-error="Please enter Date">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									
								</div>
								<div class="col-md-6">
				
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" 
											placeholder="Code Massar" 
											id="code Massar" 
											class="form-control"
											 name="code_massar"
											  required data-error="Please enter your MAssar Code">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group file-area">
											<input type="file" 
											placeholder="Votre photo" 
											id="photo" 
											class="form-control "
											 name="photo"
											  required data-error="Please enter your picture">
											<div class="help-block with-errors"></div>
											
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" 
											placeholder="Adresse" 
											id="Adresse" 
											class="form-control"
											 name="adresse"
											  required data-error="Please enter your Adress">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
			
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="country" name="country" required data-error="Please select Country">
											  <option disabled selected>Nationalité</option>
											  <option value="Afghanistan">Afghanistan</option>
											  <option value="Åland Islands">Åland Islands</option>
											  <option value="Albania">Albania</option>
											  <option value="Algeria">Algeria</option>
											  <option value="American Samoa">American Samoa</option>
											  <option value="Andorra">Andorra</option>
											  <option value="Angola">Angola</option>
											  <option value="Anguilla">Anguilla</option>
											  <option value="Antarctica">Antarctica</option>
											  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
											  <option value="Argentina">Argentina</option>
											  <option value="Armenia">Armenia</option>
											  <option value="Aruba">Aruba</option>
											  <option value="Australia">Australia</option>
											  <option value="Austria">Austria</option>
											  <option value="Azerbaijan">Azerbaijan</option>
											  <option value="Bahamas">Bahamas</option>
											  <option value="Bahrain">Bahrain</option>
											  <option value="Bangladesh">Bangladesh</option>
											  <option value="Barbados">Barbados</option>
											  <option value="Belarus">Belarus</option>
											  <option value="Belgium">Belgium</option>
											  <option value="Belize">Belize</option>
											  <option value="Benin">Benin</option>
											  <option value="Bermuda">Bermuda</option>
											  <option value="Bhutan">Bhutan</option>
											  <option value="Bolivia">Bolivia</option>
											  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
											  <option value="Botswana">Botswana</option>
											  <option value="Bouvet Island">Bouvet Island</option>
											  <option value="Brazil">Brazil</option>
											  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
											  <option value="Brunei Darussalam">Brunei Darussalam</option>
											  <option value="Bulgaria">Bulgaria</option>
											  <option value="Burkina Faso">Burkina Faso</option>
											  <option value="Burundi">Burundi</option>
											  <option value="Cambodia">Cambodia</option>
											  <option value="Cameroon">Cameroon</option>
											  <option value="Canada">Canada</option>
											  <option value="Cape Verde">Cape Verde</option>
											  <option value="Cayman Islands">Cayman Islands</option>
											  <option value="Central African Republic">Central African Republic</option>
											  <option value="Chad">Chad</option>
											  <option value="Chile">Chile</option>
											  <option value="China">China</option>
											  <option value="Christmas Island">Christmas Island</option>
											  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
											  <option value="Colombia">Colombia</option>
											  <option value="Comoros">Comoros</option>
											  <option value="Congo">Congo</option>
											  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
											  <option value="Cook Islands">Cook Islands</option>
											  <option value="Costa Rica">Costa Rica</option>
											  <option value="Cote D'ivoire">Cote D'ivoire</option>
											  <option value="Croatia">Croatia</option>
											  <option value="Cuba">Cuba</option>
											  <option value="Cyprus">Cyprus</option>
											  <option value="Czech Republic">Czech Republic</option>
											  <option value="Denmark">Denmark</option>
											  <option value="Djibouti">Djibouti</option>
											  <option value="Dominica">Dominica</option>
											  <option value="Dominican Republic">Dominican Republic</option>
											  <option value="Ecuador">Ecuador</option>
											  <option value="Egypt">Egypt</option>
											  <option value="El Salvador">El Salvador</option>
											  <option value="Equatorial Guinea">Equatorial Guinea</option>
											  <option value="Eritrea">Eritrea</option>
											  <option value="Estonia">Estonia</option>
											  <option value="Ethiopia">Ethiopia</option>
											  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
											  <option value="Faroe Islands">Faroe Islands</option>
											  <option value="Fiji">Fiji</option>
											  <option value="Finland">Finland</option>
											  <option value="France">France</option>
											  <option value="French Guiana">French Guiana</option>
											  <option value="French Polynesia">French Polynesia</option>
											  <option value="French Southern Territories">French Southern Territories</option>
											  <option value="Gabon">Gabon</option>
											  <option value="Gambia">Gambia</option>
											  <option value="Georgia">Georgia</option>
											  <option value="Germany">Germany</option>
											  <option value="Ghana">Ghana</option>
											  <option value="Gibraltar">Gibraltar</option>
											  <option value="Greece">Greece</option>
											  <option value="Greenland">Greenland</option>
											  <option value="Grenada">Grenada</option>
											  <option value="Guadeloupe">Guadeloupe</option>
											  <option value="Guam">Guam</option>
											  <option value="Guatemala">Guatemala</option>
											  <option value="Guernsey">Guernsey</option>
											  <option value="Guinea">Guinea</option>
											  <option value="Guinea-bissau">Guinea-bissau</option>
											  <option value="Guyana">Guyana</option>
											  <option value="Haiti">Haiti</option>
											  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
											  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
											  <option value="Honduras">Honduras</option>
											  <option value="Hong Kong">Hong Kong</option>
											  <option value="Hungary">Hungary</option>
											  <option value="Iceland">Iceland</option>
											  <option value="India">India</option>
											  <option value="Indonesia">Indonesia</option>
											  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
											  <option value="Iraq">Iraq</option>
											  <option value="Ireland">Ireland</option>
											  <option value="Isle of Man">Isle of Man</option>
											  <option value="Israel">Israel</option>
											  <option value="Italy">Italy</option>
											  <option value="Jamaica">Jamaica</option>
											  <option value="Japan">Japan</option>
											  <option value="Jersey">Jersey</option>
											  <option value="Jordan">Jordan</option>
											  <option value="Kazakhstan">Kazakhstan</option>
											  <option value="Kenya">Kenya</option>
											  <option value="Kiribati">Kiribati</option>
											  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
											  <option value="Korea, Republic of">Korea, Republic of</option>
											  <option value="Kuwait">Kuwait</option>
											  <option value="Kyrgyzstan">Kyrgyzstan</option>
											  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
											  <option value="Latvia">Latvia</option>
											  <option value="Lebanon">Lebanon</option>
											  <option value="Lesotho">Lesotho</option>
											  <option value="Liberia">Liberia</option>
											  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
											  <option value="Liechtenstein">Liechtenstein</option>
											  <option value="Lithuania">Lithuania</option>
											  <option value="Luxembourg">Luxembourg</option>
											  <option value="Macao">Macao</option>
											  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
											  <option value="Madagascar">Madagascar</option>
											  <option value="Malawi">Malawi</option>
											  <option value="Malaysia">Malaysia</option>
											  <option value="Maldives">Maldives</option>
											  <option value="Mali">Mali</option>
											  <option value="Malta">Malta</option>
											  <option value="Marshall Islands">Marshall Islands</option>
											  <option value="Martinique">Martinique</option>
											  <option value="Mauritania">Mauritania</option>
											  <option value="Mauritius">Mauritius</option>
											  <option value="Mayotte">Mayotte</option>
											  <option value="Mexico">Mexico</option>
											  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
											  <option value="Moldova, Republic of">Moldova, Republic of</option>
											  <option value="Monaco">Monaco</option>
											  <option value="Mongolia">Mongolia</option>
											  <option value="Montenegro">Montenegro</option>
											  <option value="Montserrat">Montserrat</option>
											  <option value="Morocco">Morocco</option>
											  <option value="Mozambique">Mozambique</option>
											  <option value="Myanmar">Myanmar</option>
											  <option value="Namibia">Namibia</option>
											  <option value="Nauru">Nauru</option>
											  <option value="Nepal">Nepal</option>
											  <option value="Netherlands">Netherlands</option>
											  <option value="Netherlands Antilles">Netherlands Antilles</option>
											  <option value="New Caledonia">New Caledonia</option>
											  <option value="New Zealand">New Zealand</option>
											  <option value="Nicaragua">Nicaragua</option>
											  <option value="Niger">Niger</option>
											  <option value="Nigeria">Nigeria</option>
											  <option value="Niue">Niue</option>
											  <option value="Norfolk Island">Norfolk Island</option>
											  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
											  <option value="Norway">Norway</option>
											  <option value="Oman">Oman</option>
											  <option value="Pakistan">Pakistan</option>
											  <option value="Palau">Palau</option>
											  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
											  <option value="Panama">Panama</option>
											  <option value="Papua New Guinea">Papua New Guinea</option>
											  <option value="Paraguay">Paraguay</option>
											  <option value="Peru">Peru</option>
											  <option value="Philippines">Philippines</option>
											  <option value="Pitcairn">Pitcairn</option>
											  <option value="Poland">Poland</option>
											  <option value="Portugal">Portugal</option>
											  <option value="Puerto Rico">Puerto Rico</option>
											  <option value="Qatar">Qatar</option>
											  <option value="Reunion">Reunion</option>
											  <option value="Romania">Romania</option>
											  <option value="Russian Federation">Russian Federation</option>
											  <option value="Rwanda">Rwanda</option>
											  <option value="Saint Helena">Saint Helena</option>
											  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
											  <option value="Saint Lucia">Saint Lucia</option>
											  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
											  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
											  <option value="Samoa">Samoa</option>
											  <option value="San Marino">San Marino</option>
											  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
											  <option value="Saudi Arabia">Saudi Arabia</option>
											  <option value="Senegal">Senegal</option>
											  <option value="Serbia">Serbia</option>
											  <option value="Seychelles">Seychelles</option>
											  <option value="Sierra Leone">Sierra Leone</option>
											  <option value="Singapore">Singapore</option>
											  <option value="Slovakia">Slovakia</option>
											  <option value="Slovenia">Slovenia</option>
											  <option value="Solomon Islands">Solomon Islands</option>
											  <option value="Somalia">Somalia</option>
											  <option value="South Africa">South Africa</option>
											  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
											  <option value="Spain">Spain</option>
											  <option value="Sri Lanka">Sri Lanka</option>
											  <option value="Sudan">Sudan</option>
											  <option value="Suriname">Suriname</option>
											  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
											  <option value="Swaziland">Swaziland</option>
											  <option value="Sweden">Sweden</option>
											  <option value="Switzerland">Switzerland</option>
											  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
											  <option value="Taiwan, Province of China">Taiwan, Province of China</option>
											  <option value="Tajikistan">Tajikistan</option>
											  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
											  <option value="Thailand">Thailand</option>
											  <option value="Timor-leste">Timor-leste</option>
											  <option value="Togo">Togo</option>
											  <option value="Tokelau">Tokelau</option>
											  <option value="Tonga">Tonga</option>
											  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
											  <option value="Tunisia">Tunisia</option>
											  <option value="Turkey">Turkey</option>
											  <option value="Turkmenistan">Turkmenistan</option>
											  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
											  <option value="Tuvalu">Tuvalu</option>
											  <option value="Uganda">Uganda</option>
											  <option value="Ukraine">Ukraine</option>
											  <option value="United Arab Emirates">United Arab Emirates</option>
											  <option value="United Kingdom">United Kingdom</option>
											  <option value="United States">United States</option>
											  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
											  <option value="Uruguay">Uruguay</option>
											  <option value="Uzbekistan">Uzbekistan</option>
											  <option value="Vanuatu">Vanuatu</option>
											  <option value="Venezuela">Venezuela</option>
											  <option value="Viet Nam">Viet Nam</option>
											  <option value="Virgin Islands, British">Virgin Islands, British</option>
											  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
											  <option value="Wallis and Futuna">Wallis and Futuna</option>
											  <option value="Western Sahara">Western Sahara</option>
											  <option value="Yemen">Yemen</option>
											  <option value="Zambia">Zambia</option>
											  <option value="Zimbabwe">Zimbabwe</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="niveau" name="niveau" required data-error="Please select your level">
											  <option disabled selected>Votre Niveau d'Etudes*</option>
											  <option>Baccalauréat en cours de preparation</option>
											  <option>Niveau Baccalauréat</option>
											  <option>Baccalauréat</option>
											  <option>Bac +</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="formation" name="formation" required data-error="Please select formation">
											  <option disabled selected>Choisissez Votre Formation*</option>
											  <option value="Hôtesse De L'air Et Steward">Hôtesse De L'air Et Steward</option>
											  <option value="Technicien En Réception D'Hôtel">Technicien En Réception D'Hôtel</option>
											  <option value="Agent D'accueil">Agent D'accueil</option>
											  <option value="Agent D'escale Aéroport">Agent D'escale Aéroport</option>
											  <option value="Assistant En Marketing Touristique Et Hôtelier">Assistant En Marketing Touristique Et Hôtelier</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" name="submit" id="submit" type="submit">Envoyer</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>            
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Reservation -->
	

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
                  <li><i class="bx bx-chevron-right"></i> <a href="../index.html">Accueil</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="../courses.html">Formation</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="../preinscription.php">Préinscription</a></li>
                  <li><i class="bx bx-chevron-right"></i><a href="../gallery.html">Galerie</a> </li>
                  <li><i class="bx bx-chevron-right"></i> <a href="../contact.php">Contact</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Nos Formations</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil Dans le Transport Aérien Et Maritime (ATAM)</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="../assist-market-hotel-detail.html">Assistanct En Marketing Touristique Et Hôtelier</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="../tech-recep-detail.html">Technicien En Réception d'Hôtel</a></li>
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
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/picker.js"></script>
	<script src="js/picker.date.js"></script>
	<script src="js/picker.time.js"></script>
	<script src="js/legacy.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>