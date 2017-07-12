<?php

include 'Connect.php';

$Cname = $_POST['Cname'];
$Cemail = $_POST['Cemail'];
$Ctextarea = $_POST['Ctextarea'];



$sql =  " INSERT INTO Contact (Cname,
	                          Cemail,
	                          Ctextarea ) 
                      VALUES ('$Cname',
                     	      '$Cemail',
                     	      '$Ctextarea' ) ";

if (mysqli_query($link, $sql)) 
   {

    header('Location: Contacts.html');
    exit;

   }



mysqli_close ($link);


?>