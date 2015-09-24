<?php

$jsonResponse=array();
//Insert the database connection class
require_once __DIR__.'/db_login.php';

    $result= mysql_query("SELECT * FROM product")or die (mysql_error());
    
    //test le resultat de la requete
    if(!empty($result)){
        
        if(mysql_num_rows($result)>0){
            //Noeud de l'utilisateur
            $jsonResponse["produit"]=array();
            //Boucle l'array			
			
            while($row=  mysql_fetch_array($result)){
                $produit=array();
                $produit["id_product"]=$row["id_product"];
                $produit["id_categorie"]=$row["id_categorie"];
                $produit["designation_product"]=$row["designation_product"];
                $produit["price_product"]=$row["price_product"];
                $produit["details_product"]=$row["details_product"];
                $produit["stock_product"]=$row["stock_product"];
                $produit["date_modif_product"]=$row["date_modif_product"];
                $produit["id_promotion_product"]=$row["id_promotion_product"];
                $produit["image_product"]=$row["image_product"];
                $produit["url_product"]=$row["url_product"];
                array_push($jsonResponse["produit"], $produit); //ceci affiche avec le nom thecity dans le json
            }
            //succes 
            $jsonResponse["success"]=1;
            
            echo json_encode($jsonResponse);
        }
        else {
            //dans le cas ou il n'y a aucun produit
            $jsonResponse["success"]=0;
            $jsonResponse["message"]="No Product found!";
            
            //On affiche la reponse JSON dans un echo
            echo json_encode($jsonResponse);
        }
//    }
}

?>
