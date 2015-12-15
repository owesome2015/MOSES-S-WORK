<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("traffic_db", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
$id = $_POST['id'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$address= $_POST['address'];
$telephone = $_POST['telephone'];
$date = $_POST['date'];
$timein = $_POST['timein'];
$timeout = $_POST['timeout'];

//inserting into my table
$sql = "insert into evening_tb(id,fname,sname,address,telephone,date,timein,timeout) values('$id','$sname', '$sname', '$address','$telephone', '$date', '$timein','$timeout')";
$result = mysql_query($sql);
header("location:home.php");
?>