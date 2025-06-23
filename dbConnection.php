<?php

$username = "root";
$password ="";
$databaseName = "php_db";
$HostUrl = "localhost";
$Hostport = "3306";

$connection = new mysqli($HostUrl, $username,  $password,$databaseName, $Hostport);
//$connection = mysql_connect($HostUrl,$username, $password,$databaseName);

if($connection->connect_error){
    echo 'Error !, Not Connected.' . $connection->connect_error;
}else{
    echo "connected Successfully !";
}

//insert query


//mysqli_close($connection);

?>