<?php
//Create an array for the JSON response 
$jsonResponse=array();
//Insert the database connection class
//require_once __DIR__.'/login_infos.php';
require("../login_infos.php");
//on check l'affichage
  //  if(isset($_GET["id_categorie"]))
    //{
      //  $id_categorie=$_GET['id_categorie']
   // }
    $result= mysql_query("SELECT * FROM categorie") or die (mysql_error());
    
    //test le resultat de la requete
    if(!empty($result)){
        
        if(mysql_num_rows($result)>0){
            $jsonResponse["categorie"]=array();
            //Boucle l'array			
			while($row=mysql_fetch_array($result))
            {
                $categorie=array();
                $categorie["id_categorie"]=$row["id_categorie"];
                $categorie["categorie"]=$row["categorie"];
                $categorie["details"]=$row["details"];
                $categorie["image"]=$row["image"];
                $categorie["url_categorie"]=$row["url_categorie"];
                //push single question into final response array
                array_push($jsonResponse["categorie"], $categorie); //ceci affiche avec le nom
            }
            //succes 
            $jsonResponse["success"]=1;
            
            //JSON response dans un echo (affichage de la reponse JSON)
            echo json_encode($jsonResponse);
            }
        else {
            //dans le cas ou il n'y a aucune categorie
            $jsonResponse["success"]=0;
            $jsonResponse["message"]="No categorie found !";
            
            //On affiche la reponse JSON dans un echo
            echo json_encode($jsonResponse);
        }
//    }
}

?>
