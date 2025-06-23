<?php
session_start();
$un=$_POST["uname"];
$pw=$_POST["pword"];
if ( $un="root" && $pw="toor"){
    header("Location: index.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

