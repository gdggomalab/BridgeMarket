<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "mobobridge" ) ;
 
  //récupération des valeurs des champs:
  
  $designation=isset($_POST["designation"])? $_POST["designation"]:'' ;
  $price_product=isset($_POST["price_product"])? $_POST["price_product"]:'' ;
  $begin_promotion = isset($_POST["begin_promotion"])? $_POST["begin_promotion"]:'' ;
  $end_promotion=isset($_POST["end_promotion"])? $_POST["end_promotion"]:'' ;
  $image_promotion = isset($_POST["image_promotion"])? $_POST["image_promotion"]:'' ;
  $url_promotion=isset($_POST["url_promotion"])? $_POST["url_promotion"]:'' ;

 
 // on écrit la requête sql
    $sql = "INSERT INTO promotion(id_promotion, designation, price_product,begin_promotion,end_promotion,image_promotion,url_promotion) VALUES('','$designation','$price_product','$begin_promotion','$end_promotion','$image_promotion','$url_promotion')";
    
//lancement de la requette
    $requete=mysql_query($sql,$cnx) or die( mysql_error() ) ;

//affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
    header("location:promotion.php");
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>