<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("traffic_db", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
$id = $_POST['id'];
$accident = $_POST['accident'];
$place = $_POST['place'];
$date = $_POST['date'];
$time = $_POST['time'];

//inserting into my table
$sql = "insert into data_tb(id,accident,place,date,time) values('$id','$accident', '$place', '$date','$time')";
$result = mysql_query($sql)or die('Failed');

Header('location:mainoffice.php');
?>