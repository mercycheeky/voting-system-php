<?php 
    $servername = "localhost";
    $username = "bethlydia";
    $password = "aVOCADO999!";
    $db_name = "VOTESYSTEM";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
    ?>