<?php
    $src = $_POST["src"];
    $ip1 = $_POST["ip1"];
    $dest = $_POST["dest"];
    $ip2 = $_POST["ip2"];
    include 'dtb.php';
    $sql_query_domain1="select " . $ip1 .  " as " . $ip1 . " from serverlookupbackup where domain = '" . $src . "';";
    $sql_query_domain2="select " . $ip2 .  " as " . $ip2 . " from serverlookupbackup where domain = '" . $dest . "';";
    $list1 = $dbh->query($sql_query_domain1);
    $list2_three = $dbh->query($sql_query_domain2);
    
    while($row1 = $list1->fetch(PDO::FETCH_ASSOC)):
    $ipaddress1 = $row1[$ip1];
    endwhile;
    
    while($row2 = $list2->fetch(PDO::FETCH_ASSOC)):
    $ipaddress2 = $row2[$ip2];
    endwhile;
    
    echo ipaddress1;
    echo ipaddress2;
    
   ?>
