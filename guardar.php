<?php
include('conexion.php');

$id = 1;
$numero = 200;
$duenos = 'Pedro Luis';

$query = "INSERT INTO test (id, numero, duenos) VALUES (".$id.", ".$numero.", '".$duenos."')";

mysqli_query($conn, $query) or die(mysql_error());

