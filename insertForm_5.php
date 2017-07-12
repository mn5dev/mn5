<?php

include 'Connect.php';

// insert data into the table of the database
$Name = $_POST ['Name'];
$Email = $_POST ['Email'];
$From = $_POST ['From'];
$To = $_POST ['To'];
$flightway = $_POST ['flightway'];
$Depart = $_POST ['Depart'];
$Return = $_POST ['Return'];
$Adults = $_POST ['Adults'];
$Child = $_POST ['Child'];
$lstClass = $_POST ['lstClass'];
$lstAirlines = $_POST ['lstAirlines'];


if (!empty($Name) &&
    !empty($Email) &&
    !empty($From) &&
    !empty($To) &&
    !empty($Depart) &&
    !empty($Return)){


$sql =  " INSERT INTO FlightReq (Name,
                                 Email,
                                 Fromcity,
                                 Tocity,
                                 Flightway,
                                 Depart,
                                 ReturnA,
                                 Adults,
                                 Child,
                                 lstClass,
                                 lstAirlines ) 
                         
                         VALUES ('$Name',
                         	     '$Email',
                         	     '$From',
                         	     '$To',
                         	     '$flightway',
                         	     '$Depart',
                         	     '$Return',
                         	     '$Adults',
                         	     '$Child',
                         	     '$lstClass',
                         	     '$lstAirlines' )";



// Check if insertion done
if (mysqli_query($link, $sql)) 
   {

    header('Location: Thank.html');
    exit;

   }



mysqli_close ($link);

}

?>