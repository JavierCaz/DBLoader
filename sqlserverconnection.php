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
$query = "SELECT TOP (1000) AddressID ,City ,StateProvinceID, PostalCode FROM Person.Address";

$ejecutar = sqlsrv_query( $conn, $query );

if (sqlsrv_has_rows($ejecutar)) {
    while ($row = sqlsrv_fetch_array($ejecutar, SQLSRV_FETCH_ASSOC)) { 
    ?>
    <tr>
        <td><?php echo $row['AddressID']; ?></td>
        <td><?php echo $row['City']; ?></td>
        <td><?php echo $row['StateProvinceID']; ?></td>
        <td><?php echo $row['PostalCode']; ?></td>
    </tr>
    <br/>
    <?php       
    }
}  else {
    echo "0 results";
}
   
?>