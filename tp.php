<?php
	
$firstname=$name=$age=$serieBAC=$moyBAC=$pays=$ville=$email=$phone=$motivation=" ";
	
$firstnameError=$nameError=$ageError=$serieBACError=$moyBACError=$paysError=$villeError=$emailError=$phoneError=$motivationError=" ";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$firstname=verifyInput($_POST["firstname"]);
		$name=verifyInput($_POST["name"]);
		$age=verifyInput($_POST["age"]);
		$serieBAC=verifyInput($_POST["serieBAC"]);
		$moyBAC=verifyInput($_POST["moyBAC"]);
		$pays=verifyInput($_POST["pays"]);
		$ville=verifyInput($_POST["ville"]);
		$email=verifyInput($_POST["email"]);
		$phone=verifyInput($_POST["phone"]);
		$motivation=verifyInput($_POST["motivation"]); }
	
	if(empty($firstname))
	{
		$firstnameError= "Ce champ est requis";
		
	}
	if(empty($name))
	{
		$nameError= "Ce champ est requis";
	}

	if(!isEmail($email))
	{
		$emailError="Email Invalide";
	}
	
	else {require ("connectP.php");}
	


	
	function isEmail($var)
	{
		return filter_var($var, FILTER_VALIDATE_EMAIL);
	}

	       
	

	function verifyInput($var)
	{
			$var=trim($var);
			$var=stripcslashes($var);
			$var=htmlspecialchars($var);
			return $var;
	}


/*

	try
	{
	$connexion = new PDO('mysql:host=localhost;dbname=dbinscription','root','');
}
	catch(Exception $e)
	{
		die('Erreur :'.$e->getMessage());

	}
	
	$req = $connexion -> prepare('INSERT INTO etudiant(Noms, Prenoms) VALUES( :Noms,:Prenoms )');



	$req -> execute(array(

		'Noms'=>$_POST['name'],
		'Prenoms'=>$_POST['firstname'],


	)); */

  ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8" />
 <link rel="stylesheet"  href="styleP.css" />
<title>
Formulaire html
</title>
</head>
<body>
<!--<?php //echo $_SERVER['PHP_SELF'];?> -->
<div id="conteneur">
<form action="" method="post" role="form">
	<fieldset>
<legend>Informations de l'étudiant</legend>

<div class="nom">
	<label for="name">Nom<span class="star"> * </span></label>
	<input type="text" name="name" id="name" placeholder="Votre nom"  />
		<p class="error"> <?php echo $nameError; ?> </p>
</div>

<div class="prenom">
	<label for="firstname">Prénom(s)<span class="star"> * </span></label>
	<input type="text" name="firstname" id="firstname" placeholder="Votre prénom" />
		<p class="error"> <?php echo $firstnameError; ?> </p>
</div>

<div class="age">
	<label for="age"> Date de naissance<span class="star"> * </span></label>
	<input type="date" name="age" id="age" placeholder="Votre age"/>
		<p class="error"> Message d'erreur</p>
</div>

<div class="sbac">
	<label for="sb">Série de votre BAC<span class="star"> * </span></label>
	<input type="text" name="serieBAC" id="sb" placeholder="Votre série de BAC"/>
		<p class="error"> Message d'erreur</p>
</div>

<div class="moy">
	<label for="moy">Votre moyenne au BAC<span class="star"> * </span></label>
	<input type="text" name="moyBAC" id="moy" placeholder="Votre moyenne au BAC"/>
		<p class="error"> Message d'erreur</p>
</div>


<div class="pays">
	<label for="pays">Pays de résidence<span class="star"> * </span></label>
	<input type="text" name="pays" id="pays" placeholder="Votre pays de résidence"/>
		<p class="error"> Message d'erreur</p>
</div>

<div class="ville">
	<label for="ville">Ville de résidence<span class="star"> * </span></label>
	<input type="text" name="ville" id="ville" placeholder="Votre ville de résidence"/>
		<p class="error"> Message d'erreur</p>
</div>

<div class="num">
	<label for="num">Numéro de téléphone<span class="star"> * </span></label>
	<input type="text" name="phone" id="num" placeholder="Votre numéro de téléphone"/>
		<p class="error"> Message d'erreur</p>
</div>
<div class="email">
	<label for="email">Adresse électronique<span class="star"> * </span></label>
	<input type="text" name="email" id="email" placeholder="Votre adresse mail"/>
		<p class="error"> <?php echo $emailError; ?></p>
</div>
<div>
	<p><strong><span class="star"> * </span>Ces informations sont requises</strong></p>
</div>
<div>
<label for="motivation">Votre motivation<span class="star"> * </span></label>
<textarea name="motivation" id="motivation"></textarea> </br>
</div>

<input type=submit value="Envoyer">
</fieldset>
</div>
</div>
</form>
</body>
</html>