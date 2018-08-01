<?php
    $src = $_POST["src"];
    include 'dtb.php';
    $sql_query_domain="select distinct dest as dest from rawpacketdata where src = '" . $src . "';";
    $list_three = $dbh->query($sql_query_domain);
    
    while($row_list_domain = $list_three->fetch(PDO::FETCH_ASSOC)):
        echo "<option value = \"" . $row_list_domain["dest"] . "\"></option>";
    endwhile;
   
?>
