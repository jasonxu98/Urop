<?php
    $src = $_POST["src"];
    $ip = $_POST["ip"];
    include 'dtb.php';
    $sql_query_domain="select " . $ip .  " as " . $ip . " from serverlookupbackup where domain = '" . $src . "';";
    $list_three = $dbh->query($sql_query_domain);
    
    while($row_list_domain = $list_three->fetch(PDO::FETCH_ASSOC)):
    $six = $row_list_domain[$ip];
    endwhile;
    
    $sql_query_dest = "select DISTINCT dest as dest from traceroutebackup where src = '" . $six . "';";
    
    
    
    
    $list_four = $dbh->query($sql_query_dest);
    if(pg_num_rows($list_four) != 0) {
       echo "<option value = \"No destinations found for this given source\"></option>";
    }

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
