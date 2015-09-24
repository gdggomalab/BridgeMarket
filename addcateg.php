<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "mobobridge" ) ;
 
  //récupération des valeurs des champs:
  //nom:
  $categorie=isset($_POST["categorie"])? $_POST["categorie"]:'' ;
  //prenom:
  $details=isset($_POST["details"])?$_POST["details"]:'' ;
  //adresse:
  $image = isset($_POST["image"])?$_POST["image"]:'' ;
  //code postal:
  $url_categorie=isset($_POST["url_categorie"])? $_POST["url_categorie"]:'' ;
  //numéro de téléphone:
 
 // on écrit la requête sql
    $sql = "INSERT INTO categorie(id_categorie, categorie, details,image, url_categorie) VALUES('','$categorie','$details','$image','$url_categorie')";
    
//lancement de la requette
    $requete=mysql_query($sql,$cnx) or die( mysql_error() ) ;

//affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
    header("location:categorie.php");
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?> 