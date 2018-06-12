<?php
    echo "IPV4 test <br><br>";
    $host        = "t3pers13.physics.lsa.umich.edu";
    #$host        = "localhost";
    $port        = "5432";
    $dbname      = "zerses_test";
    $user = "jasonxu";
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
            $six = $row_list_domain['ipv4'];
        endwhile;
        $sql_query_dest = "select DISTINCT dest as dest from traceroutebackup where src = '" . $six . "';";
        $list_four = $dbh1->query($sql_query_dest);
        if(!$list_four->fetch(PDO::FETCH_ASSOC)) {
            echo "No destination found for : " . $src . "<br>";
        }
    endwhile;
    
    echo "IPV6 test <br><br>";
    while($row_list_two = $list_two->fetch(PDO::FETCH_ASSOC)):
        $src_two = $row_list_two["domain"];
        $sql_query_domain_two = "select ipv6 as ipv6 from serverlookupbackup where domain = '" . $src_two . "';";
        $list_three_two = $dbh1->query($sql_query_domain_two);
        while($row_list_domain_two = $list_three_two->fetch(PDO::FETCH_ASSOC)):
            $six_two = $row_list_domain_two['ipv6'];
        endwhile;
        $sql_query_dest_two = "select DISTINCT dest as dest from traceroutebackup where src = '" . $six_two . "';";
        $list_four_two = $dbh1->query($sql_query_dest_two);
        if(!$list_four_two->fetch(PDO::FETCH_ASSOC)) {
            echo "No destination found for : " . $src_two . "<br>";
        }
    endwhile;
    
?>
