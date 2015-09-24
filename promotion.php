<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Promotion</title>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="tooplate_header_wrapper">
	<div id="tooplate_header">
        <div id="tooplate_menu">
            <ul >
                <font color="">
                <li><a href="produits.php"> Produits</a></li>
                <li><a href="categorie.php" >Categorie</a></li>
                <li><a href="promotion.php" class="current">Promotion</a></li>
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
            <h1>PROMOTION</h1>
</div>

        
    </div>


<div>

  <form method="POST" action="addpromo.php" name="promo">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="Left">
      <td><font size="4">Designation</font></td>
      <td><input type="text" name="designation"></td>
    </tr>
    <tr align="Left">
      <td><font size="4">Prix</font></td>
      <td><input type="text" name="price_product" Placeholder="Prix"></td>
      
    </tr>
     <tr align="Left">
      <td><font size="4">Debut Promotion</font></td>
      <td><input type="text" name="begin_promotion" Placeholder="Date de Debut"></td>
      
    </tr>
    <tr align="Left">
      <td><font size="4">Fin Promotion</font></td>
      <td><input type="text" name="end_promotion" Placeholder="Date de Fin"></td>
      <tr align="Left">
      <td><font size="4">Image Promotion</font></td>
      <td><input type="text" name="image_promotion" Placeholder="Image"></td>
      
    </tr>
    </tr>
    <tr align="Left">
      <td><font size="4">url_image</font></td>
      <td><input type="text" name="url_promotion" Placeholder="liens promotion"></td>
    <td><input type="submit" value="Insert"></td>
    </tr>
    </table>

</form>


</div>
     <!-- end of header -->
</div> <!-- end of header wrapper -->

					
</body>
</html>