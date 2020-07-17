<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<title>Area Riservata - Richieste Informazioni</title>

<meta content="width=device-width, initial-scale=1.0" name="viewport">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<!-- Favicons -->
<link href="img/favicon.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link
	href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
	rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="css/style.css" rel="stylesheet">




</style>

</head>


<body style="background: rgba(89, 179, 0);">

	<header id="header">
		<div class="container">

			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="index.html">Home</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="cabreo.html">Cabreo</a></li>
					<li><a
						href="https://www.ausl.re.it/biblioteca-scientifica-carlo-livi">Sito
							Istituzionale</a></li>

					<li class="menu-has-children"><a href="padiglioni.html">Padiglioni</a>
						<ul>
							<li><a href="#">Bertolani</a></li>
							<li><a href="#">Besta</a></li>
							<!--  
							<li class="menu-has-children"><a href="#">Morselli</a>
								 
								<ul>
									<li><a href="#">Deep Drop Down 1</a></li>
									<li><a href="#">Deep Drop Down 2</a></li>
									<li><a href="#">Deep Drop Down 3</a></li>
									<li><a href="#">Deep Drop Down 4</a></li>
									<li><a href="#">Deep Drop Down 5</a></li>
								</ul></li>
								-->
							<li><a href="buccola.html">Buccola</a></li>
							<li><a href="#">De Sanctis</a></li>
							<li><a href="#">Domaggio</a></li>
							<li><a href="#">Golgi</a></li>
							<li><a href="#">Guicciardi</a></li>
							<li><a href="#">Livi</a></li>
							<li><a href="lombroso.html">Lombroso</a></li>
							<li><a href="#">Morel</a></li>
							<li><a href="#">Morselli</a></li>
							<li><a href="#">Tamburini</a></li>
							<li><a href="#">Tanzi</a></li>
							<li><a href="#">Villa Marchi</a></li>
							<li><a href="#">Villa Rossi</a></li>
							<li><a href="#">Vittorio Marchi</a></li>
							<li><a href="#">Ziccardi</a></li>

						</ul></li>
					<li class="menu-has-children"><a href="parco.html">Il Parco</a>
						<ul>
							<li><a href="parcolastoria.html">La Storia</a></li>
							<li><a href="attrezzi.html">Sport</a></li>

						</ul></li>

					<br class="solomobile">
					<br class="solomobile">
						<li><a href="itinerari.html">Itinerari</a></li>
					<li><a href="contatti.html">Contatti</a></li>
					<button class="buttonlogin"
						onclick="window.location.href='login.html'" style="width: auto;">Login</button>


					<div class="socialcentrati solomobile ">
						<a href="https://www.facebook.com/livicarlo/"
							class="fa fa-facebook facebookmenu"></a> <a
							href="https://www.youtube.com/channel/UC6PtGmvhd8eyY6S4xM5gKvQ"
							class="fa fa-youtube youtubemenu"></a> <a
							href="https://instagram.com/bibliotecalivi?igshid=12imk6h7q5i5v"
							class="fa fa-instagram instagrammenu"></a>
					</div>

				</ul>
			</nav>
		</div>

	</header>

<section id="hero">

		<h2 class="titoloitinerari" style="color:#ffff00">Richieste Informazioni</h2>
		<br>

    <div align="center">
    
   <h2 style="color: #ffd700; text-align:center; font-size:30px;">App Parco San Lazzaro</h2>

	<?php

		$hostname = "localhost";

		$dbname = "my_parcosanlazzaro";

		$user = "parcosanlazzaro";

		$pass = "";

		$conn = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass);

		//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		

			$sql = 'SELECT id, nome, cognome, telefono, mail, messaggio FROM contatti_form'; //scrivo query

			$stmt = $conn->prepare($sql); //la preparo(traduco)

			$stmt->execute();//eseguo

			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

			foreach($rows as $row)

			{

				echo '

				<br><h3 style="color: red; font-size:15px;"> Messaggio #'.$row['id'].'</h3> 

            <p style="color: ffffff; font-size:15px;"> Nome: <b> '.$row['nome'].'</b> - Cognome: <b>'.$row['cognome'].' </b></p> 
            <p style="color: ffffff; font-size:15px;"> Mail: <b> '.$row['mail'].'</b> - Telefono: <b>'.$row['telefono'].' </b></p> 
            <p style="color: ffffff; font-size:15px;"> Messaggio: <b> '.$row['messaggio'].' </b></p> <br>

				';

			}

		

		$conn = null;

	?>
<a href="login-ok.html" type="button" class="buttonformlogin">Indietro</a>

		</div>
		
		

	</section>



	


	<!-- JavaScript Libraries -->
	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/jquery/jquery-migrate.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="lib/easing/easing.min.js"></script>
	<script src="lib/wow/wow.min.js"></script>
	<script src="lib/waypoints/waypoints.min.js"></script>
	<script src="lib/counterup/counterup.min.js"></script>
	<script src="lib/superfish/hoverIntent.js"></script>
	<script src="lib/superfish/superfish.min.js"></script>

	<!-- Contact Form JavaScript File -->
	<script src="contactform/contactform.js"></script>

	<!-- Template Main Javascript File -->
	<script src="js/main.js"></script>

</body>
</html>








