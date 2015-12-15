<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("traffic_db", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
$id = $_POST['id'];
$name = $_POST['name'];
$plate = $_POST['plate'];
$road = $_POST['road'];
$speed = $_POST['speed'];
$time = $_POST['time'];

//inserting into my table
$sql = "insert into blue_tb(id,name,plate,road,speed,time) values('$id','$name', '$plate', '$road','$speed', '$time')";
$result = mysql_query($sql) or die('Failed');

header('location:mainoffice.php');

?>