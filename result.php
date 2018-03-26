
<!DOCTYPE HTML> 
<html>
<head>
<style>

</style>
</head>

<body>

<h1> Your input </h1>
Source: <?php echo $_POST["src"]; ?><br>
Destination: <?php echo $_POST["des"]; ?><br>
Start time: <?php echo $_POST["start_time"]; ?><br>
End time: <?php echo $_POST["end_time"]; ?><br><br>

<h2> The output</h2><br>


<?php 
$src = $_POST["src"];
$des = $_POST["des"];
$start_time = $_POST["start_time"]; 
$end_time = $_POST["end_time"]; 

?>


<?php

echo "Hello<br>";
$host        = "t3pers13.physics.lsa.umich.edu";
#$host        = "localhost";
$port        = "5432";
$dbname      = "jasonxu";
$user = "jasonxu"; 
$password = "xzk3136";

try {
  $dbh = new PDO( "pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
  if ($dbh) {
	echo "Connected to DB $dbname<br>";
  }
} catch ( PDOException $e) {
	echo "Error connecting to DB:".$e->getMessage();
}

# Create query of table 
try {
  $stmt = $dbh->query($sql_query);
  if ($stmt === false){
	die("Error executing the query: $sql_query");
  }
} catch (PDOExeption $e) {
  echo $e->getMessage();
}

?> 

</body>
</html>

