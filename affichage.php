<html>
<head>
<title>Liste des clients   </title>
</head>
<body>
<h1>Resultats de recherche</h1>

<table border="1" width="100%">
<tr style="background-color:dedede">
<td>ID</td>
<td>CATEGORIE</td>
<td>DETAILS</td>
<td>IMAGE</td>
<td>url_categorie</td>
</tr>
<?php include('login_infos.php')?>
<?php
if(isset($_GET['id_categorie'])){
if(!empty($_GET['categorie'])){
$nomclt=$_GET['details'];

$sql='SELECT * FROM categorie WHERE categorie LIKE "'.$categorie.'" or categorie LIKE "%'.$categorie.'" or categorie LIKE "'.$categorie.'%"';
$req = mysql_query($sql)or die(mysql_error());
$i=0;
while($data=mysql_fetch_array($req)){
$i++;
?>
<script type="text/Javascript">
function supprimerclient(){
if(confirm('Voulez-vous vraiment supprimer?')){
document.location='./__supprimerclient.php?id=<?php echo $data['codeclt']?>';
}
}
</script>
<?php
echo'<tr>
<td><a href="modifierclient.php?id='.$data['codeclt'].'">'.$i.'</a></td>
<td>'.$data['categorie'].'</td>
<td>'.$data['details'].'</td>
<td>'.$data['image'].'</td>
<td>'.$data['url_categorie'].'</td>
<td><a onclick="supprimerclient()"><img src="delete.png"></a></td>
</tr>';
}
 if(mysql_num_rows($req)==0){
echo'<tr><td colspan="8"><font color="red">Aucune donnee!!</font></td></tr>';
}
mysql_close();
}else
echo'<font color="red">Entrer un nom a rechercher</font>';
}
?>
</table>
</body>
</html>