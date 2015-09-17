<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Traitement du formaulaire en PHP</title>
</head>

<body>

	 
    <?php
	
		// Ici on code en PHP
		
		// Affiche le contenu du champ email
		/*
		echo $email."<br />";
		echo $code."<br />";
		echo $news."<br />";
		echo $poli."<br />";
		echo $Ville."<br />";
		echo $comment."<br />";
		*/
		
		// Programme d'envoi d'email
		
		# Adresse email du destinataire
		$to="jayrdee@gmail.com";
		# sujet du mail
		$sujet="Contact du site web test ...";
		# Option du message
		$option="From: $email \r\n";
		$option.="Reply-to: $email \r\n";
		# Message du mail
		$msg="Adresse e-mail: $email \n";
		$msg.="Le code secret: $code \n";
		$msg.="Inscription Newsletter: $news \n";
		$msg.="Vous êtes un /une $poli \n";
		$msg.="votre ville: $Ville \n";
		$msg.="Votre commentaire: \n $comment ";
		
		# Envoi du message par mail avec accusé de reception
		if( mail ($to,$sujet, $msg, $option)==true)
		{
			?>
            <h2>Merci pour votre message !!!!!!!!!</h2>
            <?php
		}
		else
		{
			?>
            <h2>Impossible d'envoyer le message</h2>
            <p><a href="index.html">Retour au formaulaire</a></p>
            <?php
		}
		
		
		
		?>
</body>
</html>