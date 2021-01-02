<?php

$link = mysqli_connect("localhost","root","","cselab311_section_2_fall_20");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "CREATE TABLE Departments(
    Department_id INT(4) PRIMARY KEY,
    Department_Name VARCHAR(30) NOT NULL,
    Manager_id INT(6),
    Location_id INT(4)
)";


if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>