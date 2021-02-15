<!-- connexion  -->
<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="dataSSICw";

$conn=mysqli_connect($servername,$username,$password,$dbname);//ouvrire une connexion au serveur mysql 

?>
<!DOCTYPE html>
<html>
<head> 
  <link rel="stylesheet"  href="style_affiche.css" >
</head>
<section>
<a href="#" id="logo" target="_blank">SSIC</a>
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
</nav>

<body> 
    
    <div><h1>les operations de maintenance du parc informatique </h1></div>
<table >
          <th>Nom de l'entite </th> 
       <th>libelle</th>
       <th>numero telephone de l'entite </th>
       <th> Nom de l'interlocuteur </th>
       <th>Prenom de l'interlocuteur </th>
       <th>numero telephone de l'interlcuteur   </th>
       <th> Modele de l'equipement</th>
       <th>Marque de l'equipement </th>
       <th> Nom du responsable </th    >
        <th>Prenom du responsable </th>
       <th>numero telephone du responsable </th>
       <th>modifier</th>
       <th>suprimmer</th>
    <?php

  $sqlget = "SELECT *FROM entite ,interlocuteur,equipement,responsable_maintenance";
  $sqldata = mysqli_query($conn,$sqlget) or die ('error getting'); //envoie une requete a un serveur mysql


   while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){ // ligne de resultat sous fourme d'un tableau assosiatif
        echo "<tr><td>"
    .$row["type_entite"]."</td><td>"
       .$row["libelle"]."</td><td>"
       .$row["Tel"]."</td><td>"
       .$row["Nom"]."</td><td>"
       .$row["preNom"]."</td><td>"
       .$row["Tel"]."</td><td>"
       .$row["Modele"]."</td><td>"
       .$row["Marque"]."</td><td>"
       .$row["Nom"]."</td><td>"
       .$row["preNom"]."</td><td>"
       .$row["Tel"]."</td>"
        ."<td><a href='modifier.php?id_entite=".$row["id_equipement"]."'> modifier<a></td>"
      ."<td><a href='supprimer.php?id_equipement=".$row["id_equipement"]."'> suprimmer<a></td>";

  }
?>
</table>
<body> 
 
<html>