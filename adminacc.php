<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administration</title>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
//Include la chaine de connexion
include('login_infos.php'); ?>
<div id="tooplate_header_wrapper">
	<div id="tooplate_header">
        <div id="tooplate_menu">
            <ul >
                <font>
                <li><a href="produits.php"> Produits</a></li>
                <li><a href="categorie.php" >Categorie</a></li>
                <li><a href="promotion.php">Promotion</a></li>
                <li><a href="affichage.php">Etat de Sortie</a></li>
                <li><a href="adminacc.php"class="current">Administration</a></li>
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
            <h1>ADMINISTRATION</h1>
</div>

        
    </div>


<div>

  <form action="addadmin.php" method="POST" name="administ">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="Left">
      <td><font size="4">Username</font></td>
      <td><input type="text" name="usern" Placeholder="Login"></td>
    </tr>
    <tr align="Left">
      <td><font size="4">Password</font></td>
      <td><input type="password" name="pswd" Placeholder="mot de passe"></td>
      
    </tr>
     <tr align="Left">
      <td><font size="4">Email</font></td>
      <td><input type="text" name="email" Placeholder="email adresse"></td>
      
    </tr>
    <tr align="Left">
      <td><font size="4">phone</font></td>
      <td><input type="text" name="phone" Placeholder="Telephone"></td>
    <td><input type="submit" value="Insert"></td>
    </tr>
    </table>

</form>


</div>
     <!-- end of header -->
</div> <!-- end of header wrapper -->

					
</body>
</html>