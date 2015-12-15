<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("traffic_db", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$web = $_POST['web'];
$tel = $_POST['tel'];
$email = $_POST['email'];

//inserting into my table
$sql = "insert into staff_tb(id,name,address,web,tel,email) values('$id','$name', '$address', '$web','$tel', '$email')";
$result = mysql_query($sql) or die('Failed');

header('location:mainoffice.php');

?>