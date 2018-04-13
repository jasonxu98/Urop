<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Page Title</title>

<script type="text/javascript">

function populateZone() {
    var zones ='';
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
        
    zones += "<option value=\"";
    zones += "<?php echo $row_list["domain"]; ?>";
    zones += "\"></option>";
    
    <?php
    endwhile;
    ?>
    
    <?php
    while($row_list_two = $list_two->fetch(PDO::FETCH_ASSOC)):
        ?>
    zones += "<option value=\"";
    zones += "<?php echo $row_list_two["domain"]; ?>";
    zones += "\"></option>";
    <?php
    endwhile;
    pg_close($dbh1);
    ?>
    
    document.getElementById("browsers").innerHTML = zones;
    document.getElementById("browser").innerHTML = zones;

}


</script>



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
<body onload="updateClock(); setInterval('updateClock()', 1000 ); populateZone();">

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

        </datalist>
    
  	</td>
    <td>
    	<input list="browser" name="des">
   		<datalist id="browser">

        </datalist>
    </td>
    <td>
    
     	<input id="start" name="start_time" type="datetime-local" min="2018-01-01T01:00">
     
    </td>
    <th>
    <input id="end" name="end_time" type="datetime-local" min="2018-01-01T01:00">
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
        var ip_address = '';
    var ip_address_ = '';
        str = str.slice(0,-1);
        var lastFour = str.substr(str.length - 4);
        var check = '';
        str = str.slice(0,-1);
    
    if (lastFour == 'ipv6') {
        var xhttp;
        var parameter = "src=michigan";
        xhttp.open("POST", "des_get.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.onreadystatechange=function()
        {
            if (xhttp.readyState==4 && xhttp.status==200)
            {
                document.getElementById("text").innerHTML= xhttp.responseText;
            }
        }
        
        xhttp.send();

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

function limitsrc(str) {
    
}

</script>

<script>
function default_time() {
    document.getElementById("start").defaultValue = "2018-01-01T01:00";
    document.getElementById("end").defaultValue = "2018-01-01T01:00";

}
</script>

</body>
</html>
