
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


echo "Hello";
?>


<?php


$host        = "host = localhost";
$port        = "port = 5432";
$dbname      = "dbname = jasonxu";
$credentials = "user = jasonxu password=xzk3136";

$db = pg_connect( "$host $port $dbname $credentials"  );
if(!$db) {
    echo "Error : Unable to open database\n";
} else {
      echo "Opened database successfully\n";
}

?>

</body>
</html>

