<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("speed_db", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
$id = $_POST['id'];
$driver = $_POST['driver'];
$Car = $_POST['Car'];
$plate= $_POST['plate'];
$time = $_POST['time'];
$Submit = $_POST['Submit'];

//inserting into my table
$sql = "insert into Road_tb(id,driver,Car,plate,time,Submit,)values($'id',$'driver',$'Car','$plate',$'time',$'Submit,')";
$result = mysql_query($sql);
header("location:mainoffice.php");
?>