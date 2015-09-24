<?php

  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "mobobridge" ) ;
 
  //récupération des valeurs des champs:
  //id qui sera selectionner automatique de la Table:
  $id_categorie=isset($_POST["id_categorie"])? $_POST["id_categorie"]:'' ;
  $designation_product=isset($_POST["designation_product"])? $_POST["designation_product"]:'' ;
  $price_product=isset($_POST["price_product"])? $_POST["price_product"]:'' ;
  $details_product=isset($_POST["details_product"])? $_POST["details_product"]:'' ;
  $stock_product=isset($_POST["stock_product"])?$_POST["stock_product"]:'' ;
  $date_modif_product=isset($_POST["date_modif_product"])? $_POST["date_modif_product"]:'' ;
  $id_promotion_product=isset($_POST["id_promotion_product"])? $_POST["id_promotion_product"]:'' ;
  $image_product =isset($_POST["image_product"])?$_POST["image_product"]:'' ;
  $url_product=isset($_POST["url_product"])? $_POST["url_product"]:'' ;
 
 // on écrit la requête sql
    $sql = "INSERT INTO product(id_product,id_categorie, designation_product, price_product,details_product,stock_product,date_modif_product,id_promotion_product,image_product,url_product) 
    VALUES    ('','$id_categorie','$designation_product','$price_product','$details_product','$stock_product','$date_modif_product','$id_promotion_product','$image_product','$url_product')";
    
//lancement de la requette
    $requete=mysql_query($sql,$cnx) or die( mysql_error() ) ;

//affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
    header("location:produits.php");
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?> 