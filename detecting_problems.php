<?php
    $host        = "psdb.aglt2.org";
    #$host        = "localhost";
    $port        = "5432";
    $dbname      = "psdb_urop";
    $user = "postgres";
    $password = "xzk3136";
    $dbh1 = new PDO( "pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    
    $sql_query_one="select domain as domain from serverlookupbackup where ipv4 IS NOT NULL";
    $sql_query_two="select domain as domain from serverlookupbackup where ipv6 IS NOT NULL";
    $list = $dbh1->query($sql_query_one) or die('error');
    $list_two = $dbh1->query($sql_query_two) or die('error');
    while($row_list = $list->fetch(PDO::FETCH_ASSOC)):
        $src = $row_list["domain"];
        $sql_query_domain = "select ipv4 as ipv4 from serverlookupbackup where domain = '" . $src . "';";
        $list_three = $dbh1->query($sql_query_domain);
        while($row_list_domain = $list_three->fetch(PDO::FETCH_ASSOC)):
            $six = $row_list_domain[$ip];
        endwhile;
        $sql_query_dest = "select DISTINCT dest as dest from traceroutebackup where src = '" . $six . "';";
        $list_four = $dbh1->query($sql_query_dest);
    
        while($row_list_dest = $list_four->fetch(PDO::FETCH_ASSOC)):
            echo "No destination found for : " . $src . "<br>";
        endwhile;
    endwhile;
    
?>
