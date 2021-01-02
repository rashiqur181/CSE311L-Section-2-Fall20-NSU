<?php

$link = mysqli_connect("localhost","root","","cselab311_section_2_fall_20");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "CREATE TABLE Employees(
    Employee_Id int(6) NOT NULL PRIMARY KEY,
    First_Name VARCHAR(20),
    Last_Name VARCHAR(25) NOT NULL,
    Email VARCHAR(25) NOT NULL,
    Phone_Number VARCHAR(15),
    Hire_Date date NOT NULL,
    Job_Id VARCHAR(10) NOT NULL,
    Salary int(8),
    Commission_pct float,
    Manager_id int(6),
    Department_id int(4)
)";


if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>