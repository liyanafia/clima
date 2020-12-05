<?php

if(isset($_POST['plc']){

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = '';
$dbName = "places";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName );

if(!$conn){
   die("Connection_failed:" .mysqli_connect_error());
}
}

?>
