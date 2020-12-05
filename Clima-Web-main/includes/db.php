<?php

require 'dbh.php';

$names= mysqli_real_escape_string($conn,$_POST['plc']);

$sql= "INSERT INTO placenames (pname) VALUES ('$names')";
mysqli_query($conn,$sql);

header("Location: ../index.html?upload=success");


?>
