<?php
    $src = $_POST["src"];
    $ip = $_POST["ip"];
    include 'dtb.php';
    $sql_query_domain="select " . $ip .  " as " . $ip . " from serverlookupbackup where domain = '" . $src . "';";
    $list_three = $dbh->query($sql_query_domain);
    
    while($row_list_domain = $list_three->fetch(PDO::FETCH_ASSOC)):
    $six = $row_list_domain["ipv6"];
    endwhile;
    
    $sql_query_dest = "select dest as dest from traceroute where src = '" . $six . "';";
    $list_four = $dbh->query($sql_query_dest);
    while($row_list_dest = $list_four->fetch(PDO::FETCH_ASSOC)):
        $dest = $row_list_dest["dest"];
    
        $sql_query_name="select domain||'(" . $ip .  ")' as domain from serverlookupbackup where " . $ip .  " = '" . $dest . "';";
        $list_five = $dbh->query($sql_query_name);
    
    if($row_list_site = $list_five->fetch(PDO::FETCH_ASSOC)) {
        $site = $row_list_site["domain"];
    }
    
    $option = "<option value = \"" . $site . "\"></option>";
    echo $option;
    endwhile;
   
?>
