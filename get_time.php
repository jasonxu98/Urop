<?php
    $src = $_POST["src"];
    $ip1 = $_POST["ip1"];
    $dest = $_POST["dest"];
    $ip2 = $_POST["ip2"];
    include 'dtb.php';
    $sql_query_domain1="select " . $ip1 .  " as " . $ip1 . " from serverlookupbackup where domain = '" . $src . "';";
    $sql_query_domain2="select " . $ip2 .  " as " . $ip2 . " from serverlookupbackup where domain = '" . $dest . "';";
    $list1 = $dbh->query($sql_query_domain1);
    $list2 = $dbh->query($sql_query_domain2);
    
    while($row1 = $list1->fetch(PDO::FETCH_ASSOC)):
    $ipaddress1 = $row1[$ip1];
    endwhile;
    
    while($row2 = $list2->fetch(PDO::FETCH_ASSOC)):
    $ipaddress2 = $row2[$ip2];
    endwhile;
    
    #129.107.255.30                  | 194.190.165.191
    #select min(min_ts), max(max_ts) from traceroute where src = '129.107.255.30' and dest = '194.190.165.191' group by src, dest;

    #$sql_query_time = "select src, dest, to_char(min(timestamp), 'YYYY-MM-DD\"T\"HH24:MI:SS') as MinTime, to_char(max(timestamp), 'YYYY-MM-DD\"T\"HH24:MI:SS') as MaxTime from 
    #rawtracedatabackup where src = '" . $ipaddress1 . "' and dest = '" . $ipaddress2 . "' group by src, dest;";
    $sql_query_time = "select min(min_ts), max(max_ts) from traceroute where src = '" . $ipaddress1 . "' and dest = '" . $ipaddress2 . "' group by src, dest;";

    $list3 = $dbh->query($sql_query_time);
    if ($list3 === false) {
        echo notfound;
    } else {
    while($row3 = $list3->fetch(PDO::FETCH_ASSOC)):

    #$min = $row3["mintime"];
    #$max = $row3["maxtime"];
    $mintime = $row3["min"];
    $maxtime = $row3["max"];


    endwhile;
        echo $mintime;
        echo $maxtime;
    }


    
   ?>
