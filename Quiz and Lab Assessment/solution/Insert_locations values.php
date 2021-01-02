<?php

$link = mysqli_connect("localhost","root","","cselab311_section_2_fall_20");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "INSERT INTO Locations (Location_id, Street_Address, Postal_Code, City, State_Province, Country_ID) VALUES (1400,'2014 Jabberwocky Rd','26192','Southlake','Texas','US'),
(1500,'2011 Interiors Blvd','99236','South San Francisco','California','US'),
(1700,'2004 Charade Rd','98199','Seattle','Washington','US'),
(1800,'460 Bloor St. W.','ON M5S 1X8','Toronto','Ontario','CA'),
(2500,'Magdalen Centre- The Oxford Sc. Park','OX9 9ZB','Oxford','Oxford','UK')";



if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>