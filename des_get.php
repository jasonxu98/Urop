<?php
    $src = $_POST["src"];
    include 'dtb.php';
    $sql_query_domain="select ipv6 as ipv6 from serverlookupbackup where domain = '" . $src . "';";
    $list_three = $dbh->query($sql_query_domain);
    
    while($row_list_domain = $list_three->fetch(PDO::FETCH_ASSOC)):
    $six = $row_list_domain["ipv6"];
    endwhile;
    echo $six;
   
?>
