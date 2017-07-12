<?php

define ('DB_NAME', 'DBAirlines');
define ('DB_USER', 'root');
define ('DB_PASSWORD', '');
define ('DB_HOST', 'localhost');

// Create connection with MySql Database
$link = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD);

// Check connection
if (!$link) {
	die ( 'Could not connect:' . mysqli_error($link) );
}

// connect with the database
$db_selected = mysqli_select_db ($link, DB_NAME);

// Check connection
if (!$db_selected) {
	die ('Can\'t use' . DB_NAME . ' : ' . mysqli_error($db_selected) );
}


?>