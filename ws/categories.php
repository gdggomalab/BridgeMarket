<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 24/09/2015
 * Time: 12:02
 */

require("../login_infos.php");

$query = "SELECT * FROM categorie";

try
{
    $stmt = $db -> prepare("SELECT * FROM categorie");
    $result = @$stmt -> execute($query_params);
} catch (PDOException $ex){
    $response["success"]= 0;
    $response["message"] = "Database Error";
}

$rows = $stmt -> fetchAll();

if($rows)
{
    $response["success"] = 1;
    $response["message"] = "Categorie available";

    $response["categorie"] =array();

    foreach ($rows as $row)
    {
        $single_categorie = array();

        $single_categorie["id"] = $row["id_categorie"];
        $single_categorie["categorie"] = $row["categorie"];
        $single_categorie["details"] = $row["details"];
        $single_categorie["image"] = $row["image"];
        $single_categorie["Url"] = $row["url_categorie"];

        array_push($response["categorie"],$single_categorie);
    }
    //push the json
    echo json_encode($response);
} else{
    $response["success"] = 0;
    $response["message"] = "No Categorie available";

    die(json_encode($response));
}
?>

