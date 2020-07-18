
<?php
try
	{
	$connexion = new PDO('mysql:host=localhost;dbname=dbusi','root','');
	}
	catch(Exception $e)
	{
		die('Erreur :'.$e->getMessage());

	}
	$req = $connexion -> prepare('INSERT INTO etudiant(nom, prenom, sexe, dateNaissance, lieuNaissance, filiere, nationalite,email,mention,confession,ecoleOrigine,dateI) VALUES( :nom, :prenom, :sexe, :dateNaissance, :lieuNaissance, :filiere, :nationalite, :email, :mention, :confession, :ecoleOrigine , Now() )');



	$req -> execute(array(

		'nom'=>$_POST['lastname'],
		'prenom'=>$_POST['firstname'],
		'sexe'=>$_POST['sexe'],
		'dateNaissance'=>$_POST['day'],
		'lieuNaissance'=>$_POST['lieu'],
		'filiere'=>$_POST['filière'],
		'nationalite'=>$_POST['nationalite'],
		'email'=>$_POST['email'],
		'mention'=>$_POST['mention'],
		'confession'=>$_POST['confession'],
		'ecoleOrigine'=>$_POST['ecole'],




	));
	header("Location:remerciement.html");
	

  ?>

 