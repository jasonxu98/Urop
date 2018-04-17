
<!DOCTYPE HTML> 
<html>
<head>
<style>

table {
margin: 8px;
border: 2px solid black;
}

th {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 0.9em;
background: #666;
color: #FFF;
padding: 2px 6px;
    border-collapse: separate;
border: 2px solid black;
}

td {
background: #EEF;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 0.85em;
border: 1px solid #666;
    text-align: center
}

tr:hover {
    background-color:#ffffff;
}


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
    
    $sql_query_ip1="select " . $ip_type1 .  " as " . $ip_type1 . " from serverlookup where domain = '" . $new_src . "';";
    $list_ip1 = $dbh->query($sql_query_ip1);
    
    while($row_list_ip1 = $list_ip1->fetch(PDO::FETCH_ASSOC)):
    $ip1 = $row_list_ip1[$ip_type1];
    endwhile;
    
    $sql_query_ip2="select " . $ip_type2 .  " as " . $ip_type2 . " from serverlookup where domain = '" . $new_des . "';";
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
    $sql_query_stmt = "select src,dest,rtnum, cnt, hops from traceroute where src='" . $ip1 . "' and dest='" . $ip2 . "' order by rtnum;";
    $stmt = $dbh->query($sql_query_stmt);
?>
<h2 style="text-align:center;"> Traceroute Summary<br>In all data</h2><br>
<table class="table table-striped table-bordered" style="width:600px;">
<thead>
<tr>
<th>Source</th>
<th>Destination</th>
<th>Route Number</th>
<th>Count</th>
<th>Hops</th>
</tr>
</thead>
<tbody>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
<tr>
<td><?php echo htmlspecialchars($row['src']); ?></td>
<td><?php echo htmlspecialchars($row['dest']); ?></td>
<td><?php echo htmlspecialchars($row['rtnum']); ?></td>
<td><?php echo htmlspecialchars($row['cnt']); ?></td>
<td><?php echo htmlspecialchars($row['hops']); ?></td>
</tr>
<?php endwhile; ?>
</tbody>
</table>

<?php
    $connect1 = substr($start_time, -5);
    $connect2 = substr($end_time, -5);
    $start_time = substr_replace($start_time, " ", -6) . $connect1;
    $end_time = substr_replace($end_time, " ", -6) . $connect2;
    $sql_query_stmt2 = "select src,dest,hops, count(1) as count from rawtracedata where src='" . $ip1 . "' and dest='" . $ip2 . "' and timestamp<'" . $end_time . "' AND timestamp>='" . $start_time . "' group by src,dest,hops order by hops;";
    $stmt2 = $dbh->query($sql_query_stmt2);
    ?>
<h2 style="text-align:center;">Traceroute Summary<br>From <?php echo $start_time; ?> to <?php echo $end_time; ?></h2><br>
<table class="table table-striped table-bordered" style="width:600px;">
<thead>
<tr>
<th>Source</th>
<th>Destination</th>
<th>Hops</th>
<th>Count</th>
</tr>
</thead>
<tbody>
<?php while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) : ?>
<tr>
<td><?php echo htmlspecialchars($row['src']); ?></td>
<td><?php echo htmlspecialchars($row['dest']); ?></td>
<td><?php echo htmlspecialchars($row['hops']); ?></td>
<td><?php echo htmlspecialchars($row['count']); ?></td>
</tr>
<?php endwhile; ?>
</tbody>
</table>

<?php
    $sql_query_stmt2 = "select min(timestamp) as StartTime, max(timestamp) as EndTime, hops_grp as hops from (select timestamp, min(hops) over (order by timestamp) as hops_grp from rawtracedata where src='" . $ip1 . "' and dest='" . $ip2 . "' and host(dest)=regexp_replace(substring(hops,2,length(hops::text)-2), '.*,', '')) hopgrp group by hops order by StartTime;";
    $stmt2 = $dbh->query($sql_query_stmt2);
    ?>
<h2 style="text-align:center;">Traceroute and corresponding time intervals</h2><br>
<table class="table table-striped table-bordered" style="width:600px;">
<thead>
<tr>
<th>Start time</th>
<th>End time</th>
<th>Hops</th>
</tr>
</thead>
<tbody>
<?php while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) : ?>
<tr>
<td><?php echo htmlspecialchars($row['starttime']); ?></td>
<td><?php echo htmlspecialchars($row['endtime']); ?></td>
<td><?php echo htmlspecialchars($row['hops']); ?></td>
</tr>
<?php endwhile; ?>
</tbody>
</table>


    

</body>
</html>

