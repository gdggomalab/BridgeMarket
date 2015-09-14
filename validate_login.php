<?php

// Grab User submitted information
$usern = $_POST["usern"];
$pswd = $_POST["pswd"];

// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("mobridge",$con);

$result = mysql_query("SELECT usern, pswd FROM administrateur WHERE usern = $usern");

$row = mysql_fetch_array($result);

if($row["usern"]==$usern && $row["pswd"]==$pswd)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>
	