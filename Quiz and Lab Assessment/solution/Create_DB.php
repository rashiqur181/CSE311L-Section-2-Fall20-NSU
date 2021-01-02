<?php

$link = mysqli_connect("localhost","root","");
    

if($link==false){
    die("ERROR: Could not Connect. ".mysqli_connect_error());
}

$sql = "CREATE DATABASE CSELAB311_SECTION_2_FALL_20";

if(mysqli_query($link, $sql)){
    echo "Database Created Successfully";
}
else{
    echo "Error: Couldn't connect sql. ".mysqli_error($link);
}

?>