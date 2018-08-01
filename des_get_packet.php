<?php
    $src = $_POST["src"];
    include 'dtb.php';
    $sql_query_domain="select distinct dest as dest from rawpacketdata where src = '" . $src . "';";
    $list_three = $dbh->query($sql_query_domain);
    echo "<option value = \"198.124.252.101\"></option>";
    while($row_list_domain = $list_three->fetch(PDO::FETCH_ASSOC)):
        echo "<option value = \"" . $row_list_domain["dest"] . "\"></option>";
    endwhile;
   
?>
