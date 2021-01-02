<?php

$link = mysqli_connect("localhost","root","","cselab311_section_2_fall_20");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "CREATE TABLE Locations(
    Location_id INT(4) NOT NULL PRIMARY KEY,
    Street_Address VARCHAR(40),
    Postal_Code VARCHAR(12),
    City VARCHAR(30) NOT NULL,
    State_Province VARCHAR(25),
    Country_ID VARCHAR(2)
)";


if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>