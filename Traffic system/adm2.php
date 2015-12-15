<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("traffic_db", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$Submit = $_POST['Submit'];


//inserting into my table
$sql = "insert into administrator_tb(id,aemail,password,Submit,')";
$result = mysql_query($sql);
if($result){

echo "Successful <a href='admin.php'>Comment Again</a>";
}else{

echo "Error...Try Again ";
}
?>