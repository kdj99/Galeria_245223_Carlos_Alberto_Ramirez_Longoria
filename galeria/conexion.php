<?php
 
/****** variables para conexion a la base de datos por PDO *********/
 
 function getConnection()
 {
	  $dbhost="127.0.0.1";
	  $dbuser="root";
	  $dbpass="";
	  $dbname="galeria";
	  $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);  
	  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  return $dbh;
  }
?>