<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("traffic_db", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
$id = $_POST['id'];
$car = $_POST['car'];
$road = $_POST['road'];
$web = $_POST['web'];
$email = $_POST['email'];

//inserting into my table
$sql = "insert into track_tb(id,car,road,web,email) values('$id','$car', '$road', '$web','$email')";
$result = mysql_query($sql) or die('Failed');

header('location:mainoffice.php');
?>