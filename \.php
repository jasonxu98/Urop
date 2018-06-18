<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");

# These variables are not working...
$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
?>

table {
margin: 8px;
border: 2px solid black;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: 0.9em;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 2px solid black;
}

td {
background: #EEF;
font-family: Arial, Helvetica, sans-serif;
font-size: 0.85em;
border: 1px solid #666;
text-align: center
}

tr:hover {
background-color:#ffffff;
}