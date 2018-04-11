<?php
$host        = "t3pers13.physics.lsa.umich.edu";
#$host        = "localhost";
$port        = "5432";
$dbname      = "zerses_test";
$user = "jasonxu";
$password = "xzk3136";
$dbh = new PDO( "pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
?>
