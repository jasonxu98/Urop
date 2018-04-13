<?php
    $src = $_POST["src"];
    include 'dtb.php';
    $sql_query_domain="select ipv6 as ipv6 from serverlookupbackup where domain = '" . $src . "';";
    $list_three = $dbh->query($sql_query_domain);
    
    while($row_list_domain = $list_three->fetch(PDO::FETCH_ASSOC)):
    $six = $row_list_domain["ipv6"];
    endwhile;
    
    $sql_query_dest = "select dest as dest from traceroute where src = '" . $six . "';";
    $list_four = $dbh->query($sql_query_dest);
    while($row_list_dest = $list_four->fetch(PDO::FETCH_ASSOC)):
        $dest = $row_list_dest["dest"];
    
        $sql_query_name="select domain||'(ipv6)' as domain from serverlookupbackup where ipv6 = '" . $dest . "';";
        $list_five = $dbh->query($sql_query_name);
    
    if($row_list_site = $list_five->fetch(PDO::FETCH_ASSOC)) {
        $site = $row_list_site["domain"];
    }
    
    $option = "<option value = \"" . $site . "\"></option>";
    echo $option;
    endwhile;
   
?>
