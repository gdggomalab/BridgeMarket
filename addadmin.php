<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "mobobridge" ) ;
 
  //récupération des valeurs des champs:

  $usern=isset($_POST["usern"])? $_POST["usern"]:'' ;
  $pswd=isset($_POST["pswd"])?$_POST["pswd"]:'' ;
  $email=isset($_POST["email"])?$_POST["email"]:'' ;
  $phone=isset($_POST["phone"])? $_POST["phone"]:'' ;
 
 // on écrit la requête sql
    $sql = "INSERT INTO users(userid,usern,pswd,email,phone)VALUES('','$usern','$pswd','$email','$phone')";
    
//lancement de la requette
    $requete=mysql_query($sql,$cnx) or die( mysql_error() ) ;

//affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
    header("location:adminacc.php");
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?> 