<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Categorie</title>
<meta name="keywords" content="city blog, theme, free templates, website templates, CSS, HTML" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<?php include('index.html');?>
<?php 
//Include la chaine de connexion
include('config.php'); ?>
</head>
<body>

<div id="tooplate_header_wrapper">
	<div id="tooplate_header">
        <div id="tooplate_menu">
            <ul >
                <font color="">
                <li><a href="produit.html">Produits</a></li>
                <li><a href="about.html" class="current">Categorie</a></li>
                <li><a href="gallery.html">Promotion</a></li>
                <li><a href="contact.html">Etat de Sortie</a></li>
                </font>
            </ul>    	
        </div> 
        <!-- end of tooplate_menu -->

<div align="center">
            </br>
            </br>
            </br>
            </br>
            </br>
            <h1>CATEGORIE</h1>
</div>

        
    </div>

<div>
    <?php 
if(isset($_POST['addcategorie'])){
if(!empty($_POST['designation'])&&!empty($_POST['details'])){
$designation = $_POST['designation'];
$details = $_POST['details'];

$sql='INSERT INTO categorie (`id_categorie` ,`designation` ,`details`)
VALUES (NULL , "'.$designation.'","'.$details.'")';

mysql_query($sql)or die('Erreur de la requete SQL!!');
mysql_close();
echo 'Le client '.$designation.' a bien ete enregistre';
}else
echo'Veuillez completer les champs obligatoires svp!';
}
?>

    <form name="categorie" action="categorie.php" method="POST">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
        <tr align="left">
    <tr align="Left">
      <td><font size="4">Designation</font></td>
      <td><input type="text" name="designation"></td>
    </tr>
    <tr align="Left">
      <td><font size="4">Details</font></td>
      <td><input type="text" name="details" Placeholder="Details Categorie"></td>
      <td><input type="submit" value="Insert"></td>
    </tr>
</form>



</div>
     <!-- end of header -->
</div> <!-- end of header wrapper -->

					
</body>
</html>