<?php
$host        = "psdb.aglt2.org";
#$host        = "localhost";
$port        = "5432";
$dbname      = "psdb_urop";
$user = "postgres";
$password = "xzk3136";
$dbh = new PDO( "pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
?>
