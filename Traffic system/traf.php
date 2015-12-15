<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("traffic_db", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
$id = $_POST['id'];
$driver = $_POST['driver'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$acc = $_POST['acc'];
$date = $_POST['date'];
$time = $_POST['time'];

//inserting into my table
$sql = "insert into tra_tb(id,driver,address,tel,acc,date,time) values('$id','$driver', '$address','$tel', '$acc', '$date','$time')";
$result = mysql_query($sql)or die('Failed');

Header('location:mainoffice.php');
?>