
<!DOCTYPE HTML> 
<html>
<head>
<style>

</style>
</head>

<body>
<?php
    $src = $_POST["src"];
    $des = $_POST["des"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];
    $epoch_start = strtotime($start_time);
    $epoch_end = strtotime($end_time);
    
    $new_src = substr_replace($src, "", -1);
    $ip_type1 = substr($new_src, -4);
    $new_src = substr_replace($src, "", -6);
    
    $new_des = substr_replace($des, "", -1);
    $ip_type2 = substr($new_des, -4);
    $new_des = substr_replace($des, "", -6);
    include 'dtb.php';
    
    $sql_query_ip1="select " . $ip_type1 .  " as " . $ip_type1 . " from serverlookupbackup where domain = '" . $new_src . "';";
    $list_ip1 = $dbh->query($sql_query_ip1);
    
    while($row_list_ip1 = $list_ip1->fetch(PDO::FETCH_ASSOC)):
    $ip1 = $row_list_ip1[$ip_type1];
    endwhile;
    
    $sql_query_ip2="select " . $ip_type2 .  " as " . $ip_type2 . " from serverlookupbackup where domain = '" . $new_des . "';";
    $list_ip2 = $dbh->query($sql_query_ip2);
    
    while($row_list_ip2 = $list_ip2->fetch(PDO::FETCH_ASSOC)):
    $ip2 = $row_list_ip2[$ip_type2];
    endwhile;

    
    ?>
    <h1> Your input </h1>
Source: <?php echo $src; ?>  IP address:(<?php echo $ip1; ?>  ) <br>
Destination: <?php echo $des; ?>  IP address:(<?php echo $ip2; ?>   )<br>
Start time: <?php echo $_POST["start_time"]; ?>(epoch:<?php echo strtotime($_POST["start_time"]); ?>)<br>
End time: <?php echo $_POST["end_time"]; ?>(epoch:<?php echo strtotime($_POST["end_time"]); ?>)<br><br>


<h2> The summary</h2><br>
<?php
    $host        = "t3pers13.physics.lsa.umich.edu";
    #$host        = "localhost";
    $port        = "5432";
    $dbname      = "zerses_test";
    $user = "jasonxu";
    $password = "xzk3136";
    $dbh = new PDO( "pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    if ($dbh) {
        echo "Connected to DB $dbname<br>";
    } 

    
    
?> 

</body>
</html>

