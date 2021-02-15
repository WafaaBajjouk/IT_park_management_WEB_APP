<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dataSSICw";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$query="SELECT = FROM entite";


$result1=mysqli_query($conn,$query);

if (isset($_POST["Envoyer"])){
  $libelle=$_POST["libelle"];
    $type_entite=$_POST["type_entite"];
  $sigle=$_POST["sigle"];
  $tel=$_POST["tel"];

  $sql="INSERT INTO entite (libelle,type_entite,sigle,tel) VALUES ('$libelle','$type_entite','$sigle','$tel')";
  $query=mysqli_query($conn,$sql);
}

//table interlocuteur 
$query="SELECT = FROM interlocuteur";
if (isset($_POST["Envoyer"])){
  $id_interlocuteur=$_POST["id_interlocuteur"];
  $Nom=$_POST["Nom"];
  $preNom=$_POST["preNom"];
  $Tel=$_POST["Tel"];
  
  $sql="INSERT INTO interlocuteur (id_interlocuteur,Nom,preNom,Tel) VALUES ('$id_interlocuteur','$Nom','$preNom','$Tel')";
  $query=mysqli_query($conn,$sql);
}

//table maintenance 
$query= "SELECT = FROM maintenance";
if (isset($_POST["Envoyer"])){
// $id_maintenance=$_POST["id_maintenance"];
// $id_type_equipement=$_POST["id_type_equipement"];
$date_entree=$_POST["date_entree"];
$description_incident=$_POST["description_incident"];
$date_sortie=$_POST["date_sortie"];
$est_repare=$_POST["est_repare"];

$sql="INSERT INTO maintenance (date_entree,description_incident,date_sortie,est_repare) VALUES ('$date_entree','$description_incident','$date_sortie','$est_repare')";
$query=mysqli_query($conn,$sql);
}

//table responsable maintenance
$query="SELECT = FROM responsable_maintenance";
if (isset($_POST["Envoyer"])){
  $id_resp=$_POST["id_resp"];
  $Nom=$_POST["Nom"];
   $preNom=$_POST["preNom"];
   $tel=$_POST["Tel"];

   $sql="INSERT INTO responsable_maintenance (id_resp,Nom,preNom,Tel) VALUES ('$id_resp','$Nom','$preNom','$Tel')";
   $query=mysqli_query($conn,$sql);

}

//table equipement
$query="SELECT = FROM equipement";
if (isset($_POST["Envoyer"])){
  echo "<script>alert('BIEN ajouter')</script>";
  $type_equipement=$_POST["type_equipement"];
   $Marque=$_POST["Marque"];
   $Modele=$_POST["Modele"];

   $sql="INSERT INTO equipement (type_equipement,Marque,Modele) VALUES ('$type_equipement','$Marque','$Modele')";
   $query=mysqli_query($conn,$sql);

} 
?>

<!DOCTYPE html>
<html>
<head>
  
   <link rel="stylesheet"  href="style_Ajjout.css" >
</head>
<body> 
        
<a href="#" id="logo" >SSIC</a>
<nav>
<ul>
  
<li><a href="acceille.html"></i>Page d'accueil</a></li>
<li><a href="Recherche.php"></i>Recherche d'une operation</a></li>
<li><a href="Afficherr.php"></i>Affichage de tout les opertions</a></li>
<li><a href="https://www.google.com/maps/d/u/0/edit?mid=1Y2KnErtgmll9ilbIW8IN6HaT3_rPkjR8&ll=33.5603156627167%2C-7.5626661943919915&z=17"></i>Region Moulay rachid</a></li>
<li><a href="login.php"></i>Déconnexion</a></li>
</ul>
</ul>
</nav>
  
       <form action="Ajjouter.php" method="POST">
        <h1>L'ajout de l'equipement</h1>
    <div class="p">
  
</div>  <!-- CODE ICONE DEPUIS BOOTSTRAP -->
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
            <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
          </svg>
        <fieldset>

            <legend> l'entité : </legend>
                 <label for="type_entite">Type de l'entite:</label> <SELECT name="type_entite" size =1>
                <OPTION>District
                    <OPTION>Annexe-administrative
                    <OPTION>division/service
                    </SELECT>    
<br><br>



                 <label for="libelle">libelle:</label> <SELECT name="libelle" size =1>
                <OPTION>AA SIDI OTHMANE
                    <OPTION>AA COMPLEXE ADMINISTRATIF
                    <OPTION>AA HAY MABROUKA
                      <OPTION>AA HAY SALAMA
                        <OPTION>AA DIAR SALAM
                          <OPTION>AA HAY SADRI
                            <OPTION>AA HAY LALLA MERIRM
                           <OPTION>AA HAY MOULAY RACHID
                           <OPTION>AA RAHMA
                           <OPTION>AA HAY FALAH
                           <OPTION>AA HAY RAJA
                            <OPTION>AA LAHRAOUYINE
                              <OPTION>AA BARAKA
                                <OPTION>District LELLA MERIEM
                                  <OPTION>District MOULAY RACHID
                                    <OPTION>District SIDI OTHMANE
                                      <OPTION>District ZONE INDUSTRIELLE
                    </SELECT>    

               <br> <br>      

               <label for="sigle">Sigle:</label> <SELECT name="sigle" size =1>
                <OPTION>SO
                    <OPTION>CA
                    <OPTION>MAB
                      <OPTION>SA
                        <OPTION>DS
                          <OPTION>LM
                          <OPTION>SAD
                           <OPTION>MR
                           <OPTION>RAH
                           <OPTION>ZI
                           <OPTION>FAL
                            <OPTION>RAJ
                              <OPTION>LAH
                                <OPTION>BAR
                                  <OPTION>DLM
                                    <OPTION>DMR
                                      <OPTION>DRSO
                                        <OPTION>DZI
                    </SELECT>   
                      &nbsp;&nbsp;&nbsp;&nbsp;
    
    <br> <br>


    <label for="tel">Le numéro de téléphone :</label>
         <input type="tel" id="tel" name="tel" required
             minlength="2" maxlength="16" size="10">

 <!-- CODE ICONE DEPUIS BOOTSTRAP -->

 </fieldset>  </svg>      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
</svg>
          <fieldset>
      
             <legend> L'interlocuteur : </legend>
            <label for="Id_interlocuteur">Le numéro CNE :</label>
            <input type="tel" id="id_interlocuteur" name="id_interlocuteur" required
                   minlength="2" maxlength="16" size="10">
                   &nbsp;&nbsp;&nbsp;&nbsp;
    
            <label for="name_int">Nom :</label>
            <input type="text" id="Nom" name="Nom" required
                   minlength="2" maxlength="16" size="10">
                   &nbsp;&nbsp;&nbsp;&nbsp;

        <label for="pre_int">Prenom:</label>
                <input type=text id="preNom" name="preNom" required
                          minlength="2" maxlength="16" size="10">
                          &nbsp;&nbsp;&nbsp;&nbsp;
        
        
        <label for="tel">Le numéro de téléphone :</label>
             <input type="tel" id="Tel" name="Tel" required
                 minlength="2" maxlength="16" size="10">
                     &nbsp;&nbsp;&nbsp;&nbsp;
         </fieldset>

  <!-- CODE ICONE DEPUIS BOOTSTRAP -->
 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
    <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
  </svg>
 <fieldset> 
   
     <legend>Maintenance : </legend>

            <label for="date_entree">Date d'entrée :</label>
            <input type="date" id="date_entree" name="date_entree" required
                   minlength="2" maxlength="16" size="10">
                   &nbsp;&nbsp;&nbsp;&nbsp;
        
        <label for="description_incident">Description d'incident :</label>
                   <input type="text" id="description_incident" name="description_incident" required
                          minlength="2" maxlength="200" size="10">
                          &nbsp;&nbsp;&nbsp;&nbsp;

        <label for="date_sortie">Date de sortie :</label>
                          <input type="date" id="date_sortie" name="date_sortie" required
                                 minlength="2" maxlength="16" size="10">
                 &nbsp;&nbsp;&nbsp;&nbsp;

    <label for="est_repare">Est repare :</label>
    <input type="checkbox" id="est_repare" name="est_repare" required
    minlength="2" maxlength="16" size="10">
                 &nbsp;&nbsp;&nbsp;&nbsp; 
 </fieldset>
 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-lines-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
  </svg>
 <fieldset> 

    <legend> Responsable de maintenance  : </legend>
            <label for="id_resp">Le numéro CNE :</label>
            <input type="tel" id="id_resp" name="id_resp" required
            minlength="2" maxlength="16" size="10">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                         
                                 <label for="Nom">Nom :</label>
                                 <input type="text" id="Nom" name="Nom" required
                                        minlength="2" maxlength="16" size="10">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                             <label for="pre_res">Prenom:</label>
                                     <input type="text" id="preNom" name="preNom" required
                                               minlength="2" maxlength="16" size="10">
                                               &nbsp;&nbsp;&nbsp;&nbsp;
                             
                             
                             <label for="tel_res">Le numéro de téléphone :</label>
                                  <input type="tel" id="Tel" name="Tel" required
                                      minlength="2" maxlength="16" size="10">
                                          &nbsp;&nbsp;&nbsp;&nbsp;     
 </fieldset>                      
 <!-- CODE ICONE DEPUIS BOOTSTRAP -->
 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-laptop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
    <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
  </svg>
 <fieldset>
   
    <legend> équipement : </legend>
    <label for="type_equipement">le type de l'equipement:</label> <SELECT name="type_equipement" size =1>
                    <OPTION>Imprimante
                    <OPTION>Ecran
                      <OPTION>Photocopieuse
                        <OPTION>Scanners
                          <OPTION>Téléphonie
                              <OPTION>Unités centales
                    </SELECT>   
                 <br> <br>

                        &nbsp;&nbsp;&nbsp;&nbsp;
              
                      <label for="Marque">Marque :</label>
                      <input type="text" id="Marque" name="Marque" required
                             minlength="2" maxlength="16" size="10">
                             &nbsp;&nbsp;&nbsp;&nbsp;
                  <label for="Modele">Model :</label>
                          <input type="text" id="Modele" name="Modele" required
                                    minlength="2" maxlength="16" size="10">
                                    &nbsp;&nbsp;&nbsp;&nbsp;
 </fieldset>  
         <input type="submit" name="Envoyer" value="Envoyer" />
    <input type="reset" value="Annuler" /> 
    </p>
</form>
    </header>
</body>
</html> 