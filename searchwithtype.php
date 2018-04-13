function limitDes(str) {
    var str1 = '';
    var str2 = '';
    var ip_address = 'data:';
    var ip_address_ = '';
    str = str.slice(0,-1);
    var lastFour = str.substr(str.length - 4);
    var check = '';
    str = str.slice(0,-1);
    
    if (lastFour == 'ipv6') {
        <?php
        include 'dtb.php';
        $sql_query_four="select domain||'(ipv6)' as domain from serverlookupbackup where ipv4 IS NULL";
        $list_four = $dbh->query($sql_query_four);
        
        while($row_list_four = $list_four->fetch(PDO::FETCH_ASSOC)):
            $to_add_ = $row_list_four["domain"];
        ?>
        ip_address_ = "<?php echo $to_add_; ?>";
        str2 = str2 + '<option value = "'  + ip_address_ + '"></option>';
        <?php endwhile; ?>
        document.getElementById("text").innerHTML= lastFour;
        document.getElementById("browser").innerHTML= str2;
        
    } else if (lastFour == 'ipv4') {
        <?php
        include 'dtb.php';
        $sql_query_three="select domain||'(ipv4)' as domain from serverlookupbackup where ipv6 IS NULL";
        $list_three = $dbh->query($sql_query_three);
        
        while($row_list_three = $list_three->fetch(PDO::FETCH_ASSOC)):
            $to_add = $row_list_three["domain"];
        ?>
        ip_address = "<?php echo $to_add; ?>";
        check = check + ip_address;
        str1 = str1 + '<option value = "'  + ip_address + '"></option>';
        <?php endwhile; ?>
        document.getElementById("text").innerHTML= lastFour;
        document.getElementById("browser").innerHTML= str1;
    }
    default_time();
    
}
