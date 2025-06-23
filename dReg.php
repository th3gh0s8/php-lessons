<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './dbConnection.php';
$uname = $_POST["uname"];
$bd = $_POST["bd"];
$em = $_POST["em"];

echo $uname."  ".$bd."  ".$em;

$sql = "INSERT INTO users(name,birthday,email) "
    . "values('".$uname."','".$bd."',"
        . "'".$em."')";

$isSaved = mysqli_query($connection, $sql);
if($isSaved){
    echo 'saved successfully';
} else {
    echo 'error';
    
}
mysqli_close($connection);