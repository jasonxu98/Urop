
<?php

echo "Hello<br>";
$host        = "psdb.aglt2.org";
#$host        = "localhost";
$port        = "5432";
$dbname      = "psdb_urop";
$user = "postgres";
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
    
    
    $sql_query= "SELECT * FROM weather";
try {
  $stmt = $dbh->query($sql_query);
  if ($stmt === false){
	die("Error executing the query: $sql_query");
  }
} catch (PDOExeption $e) {
  echo $e->getMessage();
}
    
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
    echo $row['city'];
    
    
    endwhile;
    
   ?>


<!DOCTYPE HTML> 
<html>
<head>
<title>Departments</title>
<link href="style.php" rel="stylesheet" media="screen">
</head>
<body>
 <h1>Weather</h1>
 <table class="table table-striped table-bordered" style="width:600px;">
 <thead>
 <tr>
 <th>City</th>
 <th>Temp(low)</th>
 <th>Temp(hi)</th>
 <th>Precipitation</th>
 <th>Date</th>
 </tr>
 </thead>
 <tbody>
 <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
 <tr>
 <td><?php echo $row['city']; ?></td>
 <td><?php echo htmlspecialchars($row['temp_lo']); ?></td>
 <td><?php echo htmlspecialchars($row['temp_hi']); ?></td>
 <td><?php echo htmlspecialchars($row['prcp']); ?></td>
 <td><?php echo htmlspecialchars($row['date']); ?></td>
 </tr>
 <?php endwhile; ?>
 </tbody>
 </table>
</body>
</html>
