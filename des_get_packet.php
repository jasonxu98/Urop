<?php
    $src = $_POST["src"];
    include 'dtb.php';
    $sql_query_domain="select distinct dest as dest from rawpacketdata where src = '" . $src . "';";
    $list_three = $dbh->query($sql_query_domain);
    
    while($row_list_domain = $list_three->fetch(PDO::FETCH_ASSOC)):
    $six = $row_list_domain[$dest];
    endwhile;
    
   
    #if(pg_num_rows($list_four) == 0) {
    #   echo "<option value = \"No destinations found for this given source\"></option>";
    #}
    
    echo "<option value = \"" . pg_num_rows($six) . "\"></option>";
    
    while($row_list_dest = $six->fetch(PDO::FETCH_ASSOC)):
        
    
    $option = "<option value = \"" . $row_list_dest . "\"></option>";
    echo $option;
    endwhile;
   
?>
