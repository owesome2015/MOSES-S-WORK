<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("traffic_db", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
$id = $_POST['id'];
$acar = $_POST['car'];
$email = $_POST['email'];
$code = $_POST['code'];
$web = $_POST['web'];

//inserting into my table
$sql = "insert into map_tb(id,car,email,code,web) values('$id','$car', '$email', '$code','$web')";
$result = mysql_query($sql);

header('location:mainoffice.php');

?>