<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("traffic_db", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];

//inserting into my table
$sql = "insert into contact_tb(id,name,address,telephone,email,subject,comment) values('$id','$name', '$address', '$telephone','$email', '$subject', '$comment')";
$result = mysql_query($sql)or die('Failed');

Header('location:mainoffice.php');
?>