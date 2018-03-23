<html>



<body>
if ( isset( $_POST[‘src’] ) ) {
$src = $_POST[‘src’];
$des = $_POST[‘des’];
echo $src; 
echo '<h3>Connected successfully</h3>';
} 



Source: <?php echo $_POST[‘src’]; ?><br>
Destination: <?php echo $_POST[‘des’]; ?><br>
Start time: <?php echo $_POST[‘start_time’]; ?><br>
End time: <?php echo $_POST[‘end_time’]; ?><br>




</body>
</html>
