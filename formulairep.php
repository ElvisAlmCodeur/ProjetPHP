



<!doctype html>
<html>
<head>
<link rel ="stylesheet" href="styleForm.css"/>
<meta charset="utf-8"/>
<title>Formulaire d'inscription</title>
</head> 
<body>
		<header>
				
  			<div id="conteneur">
<div class="element"><ul id="navigation"><li><a href="index.html" title="A l'accueil">ACCUEIL</a></li></ul></div>
<div class="element"><ul id="navigation"><li><a href="formation.html" title="Découvrez nos offres de formation">OFFRES DE FORMATIONS</a></li></ul></div>
			</div>

			<p class="nomu"> UNIVERSITÉ DES SCIENCES INFORMATIQUES </p>
					<div class="logo"><a href="index.html" title="A l'accueil"><img src="logo.png" height="150"width="150" alt="Monde informatique"/></a></div>
		</header>
<h2><center>INSCRIPTION</center> </h2>

<div id="conteneurF">
		<div class="ele">
<form action="reponsep.php" method="POST" >
	
<fieldset>
	
<legend> S'inscrire</legend>
<p>
<label for="form_lastname">Nom:</label>
<input type="text" id="form_firstname" name="lastname" placeholder=" Votre nom" required />
		
</p>

<p>
<label for="form_lastname">Prenom:</label>
<input type="text" id="form_firstname" name="firstname"placeholder=" Votre prenom" required/>
		
</p>

<p>
<label for="form_gender">Sexe:</label>
	<select name="sexe" id="form_sexe">
		<option value="M" selected="">Masculin</option>
		<option value="F" >Féminin</option>
		<option value="Ni">Non précis</option>
	</select>
	
</p>

<p>
<label for="form_birtday">Date de naissance:</label>
<input type="Date" id="form_birtday" name="day" required />
		
</p>

<p>
<label for="form_Natinnalite">Nationnalite_Etudiant:</label>
<input type="text" id="form_nationnalite" name="nationalite" placeholder=" Votre nationnalite"required //>

</p>

<p>
<label for="form_lieu">Lieu de naissance:</label>
<input type="text" id="form_lieu" name="lieu"/ placeholder=" Votre lieu de naissance" required //>
		
</p>

<p>
<label for="form_confession">Confession Religieuse:</label>
<input type="text" id="form_confession" name="confession" placeholder=" Votre religion" required //>
		
</p>

<p>
<label for="form_filière">Filière</label>
	<select name="filière" id="form_filière">
		<option value="GL">Génie Logiciel</option>
		<option value="TRI" selected=""> Télécommunications et Réseaux Informatiques</option>
		<option value="IG">Informatique de Gestion</option>
		<option value="DW">Développement Web</option>
		<option value="IIM">Informatique Idustriel et Maintenance</option>
		<option value="SI">Sécurité Informatique</option>
	</select>
		
</p>

<p>
<label for="form_ecole">Ecole d'origine:</label>
<input type="text" id="form_ecole" name="ecole" placeholder=" Votre ecole d'origine" required //>
		
</p>

<p>
<label for="form_mention">Mention obtenue:</label>
<input type="text" id="form_mention" name="mention" placeholder=" Votre mention"required //>

</p>
<p>
<label for="form_mail">Email:</label>
<input type="email" id="form_mail" name="email" placeholder=" Votre email"required //>
		
		
	
</p>  <br><br>
<input type="submit" name="submit" value="S'inscrire">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<input type="reset" value="Effacer">

</fieldset>
</form>
</div>
</div>

			</div>
				<a href="formation.html" title="Découvrez nos offres" class=" but">Retour</a>
			</div>

	<footer>
	<p>		
 	<a href=mailto:"elvinos58@gmail.com"><img src="Mail.png" height="25"width="25" alt="mail"/></a><br/>

 	Copyright ©USI 2020- Tous droits réservés</p>
 	
 

		</footer>

		
</body>
</html>



