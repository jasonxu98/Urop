<?php
    $host        = "t3pers13.physics.lsa.umich.edu";
    #$host        = "localhost";
    $port        = "5432";
    $dbname      = "zerses_test";
    $user = "jasonxu";
    $password = "xzk3136";
    $dbh1 = new PDO( "pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $sql_query_one="select domain||'(ipv4)' as domain from serverlookupbackup where ipv4 IS NOT NULL";
    $sql_query_two="select domain||'(ipv6)' as domain from serverlookupbackup where ipv6 IS NOT NULL";
    $list = $dbh1->query($sql_query_one) or die('error');
    $list_two = $dbh1->query($sql_query_two) or die('error');
    while($row_list = $list->fetch(PDO::FETCH_ASSOC)):
    ?>

<?php echo "<option value=\"";
    ?>
<?php echo $row_list["domain"]; ?>

<?php echo "\"></option>"; ?>


<?php
    endwhile;
    ?>

<?php
    while($row_list_two = $list_two->fetch(PDO::FETCH_ASSOC)):
    ?>

<?php echo "<option value=\"";
    ?>
<?php echo $row_list_two["domain"]; ?>

<?php echo "\"></option>"; ?>


<?php
    endwhile;
    
    pg_close($dbh1);
    ?>
