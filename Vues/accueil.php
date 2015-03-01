<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Ma Réponse</title>

    <!-- Bootstrap core CSS -->
    <link href="Vues/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Vues/assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="Vues/assets/css/font-awesome.min.css">

   <!--<script src="Vues/assets/js/jquery.min.js"></script>
	<script src="Vues/assets/js/modernizr.custom.js"></script>-->
	

	
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
		
	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.html#home">Ma Réponse</a></h1>
			<i class="icon-remove menu-close"></i>
			<a href="#home" class="smoothScroll">Home</a>
			<a href="#about" class="smoothScroll">Réponse</a>
			<a href="#portfolio" class="smoothScroll">Portfolio</a>
			<a href="#contact" class="smoothScroll">Contact</a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-envelope"></i></a>
		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="icon-reorder"></i></div>
	</nav>


	
	<!-- ========== HEADER SECTION ========== -->
	<section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
			<div class="logo">
				<!-- <img src="Vues/assets/img/logo.png"> -->
			</div>
			<br>
			<div class="row">
				<h1>Ma Réponse</h1>
				<br>
				<form >
					<div class="row col-lg-12 col-lg-offset-2">
						<div class="form-group col-lg-2 ">
							<label for="titre">Titre:</label>
							<input type="text" class="form-control" id="titre"  name="titre">
						</div>
						<div class="form-group col-lg-2">
							<label for="nom">Nom:</label>
							<input type="text" class="form-control" id="nom"  name="nom">
						</div>
						<div class="form-group col-lg-2">
							<label for="prenom">Prénom:</label>
							<input type="text" class="form-control" id="prenom" name="prenom">
						</div>
						<div class="form-group col-lg-2">
							<label >Sexe</label><br/>
							<label class="radio-inline"><input type="radio" name="sexe" value="H">H</label>
							<label class="radio-inline"><input type="radio" name="sexe" value="F">F</label>
						</div>
					</div>
					<div class="row col-lg-8 col-lg-offset-2">
						
							<label >Présence à la soirée: </label>
							<label class="radio-inline"><input type="radio" name="presence">oui</label>
							<label class="radio-inline"><input type="radio" name="presence">non</label>
						
					</div>
					<div class="row col-lg-12 col-lg-offset-2">
						<div class="form-group col-lg-8 ">
							<label for="invitant">Invitant:</label>
							<input type="text" class="form-control" id="invitant"  name="invitant">
						</div>
					</div>
					<div class="row">
						<input type="button" class="btn btn-lg" value="Créer ma réponse" onclick="creerReponse()"/>
					</div>
				</form>
				<br>
				<br>
				<div class="col-lg-6 col-lg-offset-3">
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	
	
	
	<!-- ========== ABOUT SECTION ========== -->
	<section id="about" name="about"></section>
	<div id="f">
		<div class="container">
			<div class="row">
				<h3>Ma Réponse</h3>
				<p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
				
				<!-- INTRO INFORMATIO-->
				<!-- <div class="col-lg-6 col-lg-offset-3">
					<p>A full time theme crafter based in Madrid, Spain. I love designing beautiful, clean and user-friendly interfaces for websites.</p>
					<p>My passion is turning good ideas and products into eye-catching sites.</p>
					<p>Sometimes I blog about design and web trends. Also I share links and my thoughts on <a href="http://twitter.com/BlackTie_co">Twitter</a>. Need a free handsome bootstrap theme? <a href="http://blacktie.co">Done!</a></p>
					<p>I'm available for freelance jobs. Contact me now.</p>
					<p><button type="button" class="btn btn-warning">I HAVE A FREELANCE JOB</button></p>
				</div>			 -->
				<div class="col-lg-6 col-lg-offset-3" id="reponse">
				</div>					
			</div>
		</div><!-- /container -->
	</div><!-- /f -->
	

	<!-- ========== CAROUSEL SECTION ========== -->	
	<section id="portfolio" name="portfolio"></section>
	<div id="f">
		<div class="container">
			<div class="row centered">
				<h3>SOME PROJECTS</h3>
				<p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
				
				<div class="col-lg-6 col-lg-offset-3">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active centered">
								<img class="img-responsive" src="Vues/assets/img/c1.png" alt="">
							</div>
							<div class="item centered">
								<img class="img-responsive" src="Vues/assets/img/c2.png" alt="">
							</div>
							<div class="item centered">
								<img class="img-responsive" src="Vues/assets/img/c3.png" alt="">
							</div>
						</div>
						<br>
						<br>
						<ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
					</div>
				</div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</div>	<!-- f -->

	<!-- ========== CONTACT SECTION ========== -->
	<section id="contact" name="contact"></section>
	<div id="f">
		<div class="container">
			<div class="row">
				<h3>CONTACT ME</h3>
				<p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
				
				<div class="col-lg-6 col-lg-offset-3">
					<p>Some Avenue, 987<br/>Madrid, Spain<br/>+34 8984-4343</p>
					<p>iam@awesomemail.com</p>
					<p><button type="button" class="btn btn-warning">YEAH! CONTACT ME NOW!</button></p>
				</div>
			</div>
		</div>
	</div>

	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Vues/JS/javaScript.js"></script>
	<!--<script src="Vues/assets/js/classie.js"></script>
    <script src="Vues/assets/js/bootstrap.min.js"></script>
    <script src="Vues/assets/js/smoothscroll.js"></script>
	<script src="Vues/assets/js/main.js"></script>-->
</body>
</html>
