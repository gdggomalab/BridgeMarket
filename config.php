<?php
$hostname = 'localhost';
$username = 'mdp';
$pwd = '';
$base = 'mobobridge';

$conn=mysql_connect($hostname,$username,$pwd);
mysql_select_db($base,$conn);
?>