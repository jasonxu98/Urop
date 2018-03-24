
<!DOCTYPE HTML> 
<html>
<head>
<style>

</style>
</head>

<body>

<h1> Your input </h1>
$src = $des = $start_time = $end_time = "";
$src=$_POST["src"]
Source: <?php echo $src; ?><br>
Destination: <?php echo $_POST["des"]; ?><br>
Start time: <?php echo htmlspecialchars($_POST["start_time"]); ?><br>
End time: <?php echo htmlspecialchars($_POST["end_time"]); ?><br><br>






</body>
</html>
