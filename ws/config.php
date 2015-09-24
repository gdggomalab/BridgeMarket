<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 24/09/2015
 * Time: 12:03
 */

$server="localhost"; // Le server ou on va se connecter
$conectname="root"; // nom d'access au serveur
$monpass=""; //Le mot de passe
$mabd="mobobridge"; // Le nom de la base des donnees

$options=array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAME utf8');

try
{
    $db=new PDO("mysql:host={$server};dbname={$mabd};charset=utf8",$conectname,$monpass,$options);
}
catch (PDOException $ex)
{
    die("Failed to connect to the database: " . $ex->getMessage());
}

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc())
{
    function undo_magic_quotes_gpc(&$array)
    {
        foreach($array as &$value)
        {
            if(is_array($value))
            {
                undo_magic_quotes_gpc($value);
            }
            else
            {
                $value = stripslashes($value);
            }
        }
    }

    undo_magic_quotes_gpc($_POST);
    undo_magic_quotes_gpc($_GET);
    undo_magic_quotes_gpc($_COOKIE);
}

header('Content-Type: text/html; charset=utf-8');

session_start();

?>