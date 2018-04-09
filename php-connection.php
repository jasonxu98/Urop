<?php

echo "Hello<br>";
    $host        = "t3pers13.physics.lsa.umich.edu";
    #$host        = "localhost";
    $port        = "5432";
    $dbname      = "zerses_test";
    $user = "jasonxu";
    $password = "xzk3136";
    

try {
  $dbh = new PDO( "pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
  if (!$dbh) { echo "There is erro"; }
  if ($dbh) {
	echo "Connected to DB $dbname<br>";
  }
} catch ( PDOException $e) {
	echo "Error connecting to DB:".$e->getMessage();
}

# Create query of table 
    #$sql_query="select domain||'(ipv4)' as domain from serverlookupbackup where ipv4 IS NOT NULL";
    #$sql_query="select ipv4 from serverlookupbackup";
    $sql_query="select * from serverlookupbackup";

  try {
  $list = $dbh->query($sql_query);
      $test = pg_query($dbh, "SELECT * FROM ServerLookupbackup");
      
  if ($list === false){
	die("Error executing the query: $sql_query");
  }
} catch (PDOExeption $e) {
  echo $e->getMessage();
}
    
    while($row = $list->fetch(PDO::FETCH_ASSOC)){
        echo htmlspecialchars($row['domain']);
        echo "WEIRD<br>";
    }
    echo "WEIRD<br>";
?> 

