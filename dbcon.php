<?php 

    define("HostName","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","crud_operation");

    
    $connection = mysqli_connect(HostName,USERNAME,PASSWORD,DATABASE);

    if(!$connection){
        die("Connection failed !!");
    }
   
?>