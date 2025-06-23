<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbC
 *
 * @author chamuditha
 */
$sName ="localhost";
$Uname="root";
$pw="pasindu12236";
$db="php_db";

$connection = new mysqli($sName, $Uname, $pw, $db/*, $port, $socket*/);

if($connection->connect_error){
    echo "error not connected";
   
}
else {
    echo "connection sucsess";
    
}

mysqli_close($connection);




?>
