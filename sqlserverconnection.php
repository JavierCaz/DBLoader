<?php
    $serverName = "localhost";//server-ip 
    $connectionInfo = array("Database"=>"AdventureWorks2017");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    
    if( $conn ) {
        echo "Connection established.<br />";
    }else{
        echo "Connection could not be established.<br /><pre>";
        die( print_r( sqlsrv_errors(), true));
    }
?>