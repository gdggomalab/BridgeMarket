<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Categorie</title>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="tooplate_header_wrapper">
	<div id="tooplate_header">
        <div id="tooplate_menu">
            <ul >
                <font>
                <li><a href="produits.php"> Produits</a></li>
                <li><a href="categorie.php" class="current">Categorie</a></li>
                <li><a href="promotion.php">Promotion</a></li>
                <li><a href="affichage.php">Etat de Sortie</a></li>
                <li><a href="adminacc.php">Administration</a></li>
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

  <form method="POST" action="addcateg.php" name="categ">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="Left">
      <td><font size="4">Designation</font></td>
      <td><input type="text" name="categorie"></td>
    </tr>
    <tr align="Left">
      <td><font size="4">Details</font></td>
      <td><input type="text" name="details" Placeholder="Details Categorie"></td>
      
    </tr>
     <tr align="Left">
      <td><font size="4">Image</font></td>
      <td><input type="text" name="image" Placeholder="Image"></td>
      
    </tr>
    <tr align="Left">
      <td><font size="4">url_image</font></td>
      <td><input type="text" name="url_categorie" Placeholder="liens Categorie"></td>
    <td><input type="submit" value="Insert"></td>
    </tr>
    <tr><td><input type="file" name="photo" /><br/><br/></td></tr>
    </table>

</form>


</div>
     <!-- end of header -->
</div> <!-- end of header wrapper -->		
</body>
</html>