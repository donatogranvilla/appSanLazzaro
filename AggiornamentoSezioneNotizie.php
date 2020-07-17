<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<title>Area Riservata - Aggiornamento Notizie</title>

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

    <div align="center">

   
    <h2 style="color: #ffd700; text-align:center; font-size:30px;margin-top:30%">Aggiornamento sezione Notizie</h2>

	<form id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="submit" class="buttonformlogin" name="submit1" value="Visualizza"><br><br>
		<input type="submit" class="buttonformlogin" name="submit2" value="Modifica"><br><br>
		<input type="number" class="InserisciValori" name="codid"  rows="4" cols="100"placeholder="Inserisci ID notizia" style="margin-bottom:20px"><br>
		<input type="text" class="InserisciValori" name="title" rows="4" cols="80" placeholder="Inserisci nuovo titolo"><br>
	</form>
	<br>
    <textarea class="InserisciNuovoTesto" name="newtext" rows="4" cols="30" form="form1" placeholder="Inserisci nuovo testo notizia..."></textarea><br>
   <br>
   <h5>Visualizzazione elenco notizie:</h5>
	<?php
		$hostname = "localhost";
		$dbname = "my_parcosanlazzaro";
		$user = "parcosanlazzaro";
		$pass = "";
		$conn = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass);
		if(isset($_POST['submit1']))
		{
			$sql = 'SELECT numero_id, titolo_notizia FROM notizie'; //scrivo query
			$stmt = $conn->prepare($sql); //la preparo(traduco)
			$stmt->execute();//eseguo
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			foreach($rows as $row)
			{
				echo '
				<p style="background-color:#B8B8B8"> '.$row['numero_id'].' - '.$row['titolo_notizia'].'</p>
            
				';
			}
		}
		
		if(isset($_POST['submit2']))
		{
			try 
			{
				$codice=$_POST['codid'];
            $codice=(int)$codice;
				$testonuovo=$_POST['newtext'];
				$titolonuovo=$_POST['title'];
				$appoggio=$conn->prepare('UPDATE notizie SET testo_notizia = :txtnuovo, titolo_notizia = :titnuovo WHERE numero_id = :cod');
				$appoggio->bindValue(':cod', $codice);
				$appoggio->bindValue(':txtnuovo', $testonuovo);
				$appoggio->bindValue(':titnuovo', $titolonuovo);
				$appoggio->execute();
			/*		$query='UPDATE notizie SET testo_notizia = $testonuovo,titolo_notizia = $titolonuovo WHERE id = $codice';
				$conn->exec($query);  */
				echo "Modifica avvenuta con successo!!!";
			} 
			catch(PDOException $e) 
			{
				echo ' '.$e->getMessage().' ';
			}
		}
		$conn = null;
	?>

  <br><a href="login-ok.html" type="button" class="buttonformlogin">Indietro</a>

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