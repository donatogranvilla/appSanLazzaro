<?php
	session_start();
	$miamail = "info.parcosanlazzaro.re@gmail.com";
	$successo = $_POST['successo'];
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$mail = $_POST['mail'];
	$telefono = $_POST['telefono'];
	$messaggio = $_POST['messaggio'];
	$messaggiomail = "PARCO SAN LAZZARO - REGGIO EMILIA \n Richiesta informazioni ricevuta... \n Nome: " . $nome . "\n Cognome: ". $cognome . "\n Email: " . $mail . "\n Tel: " . $telefono . "\n Messaggio: " . $messaggio . "\n SARETE RICONTATTATI IL PRIMA POSSIBILE";
	
    try
	{
      $hostname = "";
      $dbname = "my_parcosanlazzaro";
      $user = "";
      $pass = "";
      $db = new PDO ("mysql:host=$hostname;dbname=$dbname",$user,$pass);
      $insert="INSERT INTO contatti_form(nome,cognome,mail,telefono,messaggio) VALUES('$nome','$cognome','$mail','$telefono','$messaggio')";
      $db->exec($insert); 
      
      //$headers[] = 'From: Parco San Lazzaro <info.parcosanlazzaro.re@gmail.com>';
      $headers[] = 'MIME-Version: 1.0';
	  $headers[] = 'Content-type: text/html; charset=utf-8';
      $cod='abcdefghi';
	  if(mail("poldomatti@yahoo.it", "PROVA", $cod, implode("\r\n", $headers)))
	  {
		  echo "INVIATA!";
	  }
	  else
	  {
		  echo "ERRORE!";
	  }
	  //header("Refresh:0; url=$successo", true, 303);
	}
	catch(PDOException $e)
	{
		echo "Andrea, errore qui: ".$e->getMessage();
		die();
	}
?>