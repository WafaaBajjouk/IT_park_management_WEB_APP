
<!-- ne fonctionne pas  -->
<?php
$bdd= new PDO('mysql:host=127.0.0.1;dbname=dataSSICw;charset=utf8','root','');
$result = $bdd->query('SELECT id_equipement,Modele,type_equipement,Marque  FROM equipement'); 
$result1 = $bdd->query('SELECT id_equipement,date_entree,description_incident,date_sortie,est_repare  FROM maintenance'); 
$result2 = $bdd->query('SELECT id_equipement,id_interlocuteur,Nom,preNom,Tel  FROM interlocuteur'); 
$result3 = $bdd->query('SELECT id_equipement,id_resp,Nom,preNom,Tel  FROM responsable_maintenance'); 
$result4 = $bdd->query('SELECT id_equipement,id_entite,libelle,type_entite,sigle,Tel  FROM entite'); 

if(isset($_GET['q'] ) AND  !empty($_GET['q'])){
	$q=$_GET['q'];

	  $result = $bdd->query('SELECT id_equipement,Modele,type_equipement,Marque FROM equipement WHERE id_equipement like "%'.$q.'%"');

	   $result1 = $bdd->query('SELECT id_equipement,date_entree,description_incident,date_sortie,est_repare FROM maintenance WHERE id_equipement like "%'.$q.'%"');
	
	   $result2 = $bdd->query('SELECT id_equipement,id_interlocuteur,Nom,preNom,Tel FROM interlocuteur WHERE id_equipement like "%'.$q.'%"');
	    $result3 = $bdd->query('SELECT id_equipement,id_resp,Nom,preNom,Tel FROM responsable_maintenance WHERE id_equipement like "%'.$q.'%"');
	       $result4 = $bdd->query('SELECT  id_equipement,id_entite,libelle,type_entite,sigle,Tel FROM entite WHERE id_equipement like "%'.$q.'%"');
	}
	?>

<!-- HTML -->

<!DOCTYPE html>
<html>
<header>
<link rel="stylesheet"  href="style_recherche.css" >
</header>
<section>
<a href="#" id="logo" >SSIC</a>
<nav>
<ul>
<li><a href="acceille.html"></i>Page d'accueil</a></li>
<li><a href="Ajjouter.php"></i>L'ajout d'une operation</a></li>
<li><a href="Recherche.php"></i>Recherche d'une operation</a></li>
<li><a href="Afficherr.php"></i>Affichage de tout les opertions</a></li>
<li><a href="https://www.google.com/maps/d/u/0/edit?mid=1Y2KnErtgmll9ilbIW8IN6HaT3_rPkjR8&ll=33.5603156627167%2C-7.5626661943919915&z=17"></i>Region Moulay rachid</a></li>
<li><a href="login.php"></i>Déconnexion</a></li>
</ul>
</ul>
</nav></section>
<body>
	<div> <h1> RECHERCHER UN EQUIPEMENT : </h1>
<form method="GET">
  <input type="text" maxlength= "12" placeholder="tapez l'ID" class="searchbar">
		<input type="submit" value="Valider" class="button"/></div>
</form>
</body>
</html>
