<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Produit</title>
<meta name="keywords" content="city blog, theme, free templates, website templates, CSS, HTML" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="tooplate_header_wrapper">
	<div id="tooplate_header">
        <div id="tooplate_menu">
            <ul >
                <font color="">
                <li><a href="produits.php"class="current"> Produits</a></li>
                <li><a href="categorie.php">Categorie</a></li>
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
            <h1>PRODUIT</h1>
</div>

        
    </div>


<div>
    <form name="produit" action="addprod.php" method="POST">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
        <tr align="left">
      <td><font size="4">Categorie</font></td>
      <td>
      <select name="id_categorie">
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
            <option value="">5</option>
      </select>
      </td>
    </tr>
    <tr align="Left">
      <td><font size="4">Designation</font></td>
      <td><input type="text" name="designation_product"></td>
    </tr>
    <tr align="Left">
      <td><font size="4">Prix</font></td>
      <td><input type="text" name="price_product" Placeholder="Prix en dollars"></td>
    </tr>
    <tr align="Left">
      <td><font size="4">Details</font></td>
      <td><input type="text" name="details_product"></td>
    </tr>
    <tr align="Left">
      <td><font size="4">Stock</font></td>
      <td><input type="text" name="stock_product"></td>
    </tr>
     <tr align="Left">
      <td><font size="4">Date Modification Produit</font></td>
      <td><input type="text" name="date_modif_product"></td>
    </tr>
     <tr align="Left">
      <td><font size="4">Promotion</font></td>
      <td>
      <select name="id_promotion_product">
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
            <option value="">5</option>
      </select>
      </td>
    </tr>
     <tr align="Left">
      <td><font size="4">Lien</font></td>
      <td><input type="text" name="url_product"></td>
    </tr>
     <tr align="Left">
      <td><font size="4">Image</font></td>
        <td><input type="text" name="image_product" placeholder="Charger la Photo">
          </td>
          <tr align="right">
            <td> <input type="submit" value="Insert" ></td>

          </tr>
    </tr>
    </font>
 
</form>
</div>
     <!-- end of header -->
</div> <!-- end of header wrapper -->

					
</body>
</html>