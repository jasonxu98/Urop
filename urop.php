<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Page Title</title>
<style>
body {
  # background-image: url("")

}

#p01 {
	font-size:25px;
    border: 1px solid ;
    padding: 30px;
}

#p02 {
	font-size:25px;
    border: 1px solid ;
    padding: 30px;
}

#p03 {
    text-align:center;
}

form {
    font-size:25px;
    border: 1px solid ;
    padding: 30px;
}

img.a {
  vertical-align: sub;
}

#demo {
  font-size:18px;
  text-align:center;
}



.image-link
{
    text-decoration: none;
}


</style>
</head>
<body onload="updateClock(); setInterval('updateClock()', 1000 )">

<h1 style="font-size:50px;text-align:center;">

    <img class="a" src="logo.jpg" alt="Urop logo" style="width:65px;height:65px" >


perfSONAR Analytics Summarization Tool</h1>




<p id="p01">To use this toolkit, please select your source site, destination site and time period from the drop box below.<br>Please kindly note that latest data <b>might not</b> be up to date.</p>

<form action=result.php method="post">
	<table style="width:100%">
  	<tr>
    <th>Source</th>
    <th>Destination</th> 
    <th>Start time</th>
    <th>End time</th>
 	</tr>
  	<tr>
    <td>
    	<input list="browsers" name="src" onchange="limitDes(this.value)">
   		<datalist id="browsers">

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






        </datalist>
    
  	</td>
    <td>
    	<input list="browser" name="des">
   		<datalist id="browser">

        </datalist>
    </td>
    <td>
    
     	<input name="start_time" type="datetime-local" min="2018-01-01T01:00">
     
    </td>
    <th>
    <input name="end_time" type="datetime-local" min="2018-01-01T01:00">
    </th>
	</tr>
  
  
</table>





  
  <br><br>
  <input type="submit" value="Query">
  <input type="reset">
</form>




<p id="demo">

</p>

<p id="text">

</p>

<p id="p03"><a href="https://www.perfsonar.net" target = "_blank" class="image-link">
    <img class="a" src="pSLogo.png" alt="perfSONAR logo" style="width:209px;height:65px" >
</a> </p>

<p>
<?php
    # if(!isset($_POST['src']))
    #{
    #   $errorMessage .= "<li>You forgot to select!</li>";
    #}
    ?>
</p>


<script>
function updateClock() {
document.getElementById("demo").innerHTML = Date();
}
</script>



<script>


function limitDes(str) {
        var str1 = '';
        var str2 = '';
        var ip_address = 'data:';
    var ip_address_ = '';
        str = str.slice(0,-1);
        var lastFour = str.substr(str.length - 4);
        var check = '';
    
    if (lastFour == 'ipv6') {
        <?php
        include 'dtb.php';
        $sql_query_four="select domain||'(ipv6)' as domain from serverlookupbackup where ipv6 IS NULL";
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
    
}
</script>



</body>
</html>
