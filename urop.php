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
    	<input list="browsers" name="src">
   		<datalist id="browsers">
            <option value="perfsonar01.hep.wisc.edu">144.92.180.75</option>

<?php
    $host        = "t3pers13.physics.lsa.umich.edu";
    #$host        = "localhost";
    $port        = "5432";
    $dbname      = "zerses_test";
    $user = "jasonxu";
    $password = "xzk3136";
    $dbh = new PDO( "pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $sql_query="select domain||'(ipv4)' as domain from serverlookupbackup where ipv4 IS NOT NULL";
    $list = $dbh->query($sql_query) or die('error');
    while($row_list=pg_fetch_assoc($list)){
        ?>

<?php echo "<option value=\"";
    ?>
<?php echo $row_list["domain"]; ?>

<?php echo "\"></option>"; ?>


<?php
    }
    ?>





        </datalist>
    
  	</td>
    <td>
    	<input list="browsers" name="des">
   		<datalist id="browsers">
    	<option value="Jason">
    	<option value="Zerses">
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

<p id="p03"><a href="https://www.perfsonar.net" target = "_blank" class="image-link">
    <img class="a" src="pSLogo.png" alt="perfSONAR logo" style="width:209px;height:65px" >
</a> </p>

<script>

function updateClock() {
document.getElementById("demo").innerHTML = Date();
}
</script>



</body>
</html>
