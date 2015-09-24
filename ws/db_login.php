<?php

	require_once __DIR__ .'/db_connector.php';

	@mysql_pconnect($BD_server, $BD_user, $BD_pswd)
			or die("Server Error : Access refusé");
	@mysql_select_db($BD_bd)
			or die("Server Error : DB Select:". mysql_error()); 

?>
