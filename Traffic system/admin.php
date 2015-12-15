<?php
if(isset($_POST["email"]) && isset($_POST["password"])){
 if($_POST["email"] =='traffic@you.com' && $_POST["password"]=='welcome'){
   header("Location:personel.php");
   }else{
        echo"<span style='color:red; font-size:26px'><blink>Incorrect Email and Password combination !!!!!!!!!</blink></span>";
		}
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.TRAFFIC {color: #000;
}
.style7 {
	font-weight: bold;
	font-size: 24px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style12 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #0000FF;
	font-size: 24px;
}
.style13 {font-size: 12px}
.style19 {color: #FFFFCC}
.style21 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF; }
-->
</style>
</head>

<body>
<table width="814" height="38" border="0" align="center">
  <tr class="TRAFFIC">
    <td width="808" height="32" background="green" bgcolor="#FFFF99"><table width="803" height="90" border="0">
      <tr>
        <td colspan="5" background="blue.PNG" bgcolor="#000099"><img src="pictures/contact-us.jpg" width="799" height="67" /></td>
        </tr>
      <tr bgcolor="#0066CC">
        <td width="72" height="19" bordercolor="#FFFFFF" background="blue.PNG"><div align="center" class="style10 style13 style19"><a href="home.php" class="style21">HOME</a></div></td>
        <td width="168" bordercolor="#FFFFFF" background="blue.PNG"><div align="center" class="style10 style13 style19"><a href="manage.php" class="style21">TRAFFIC MANAGEMENT</a></div></td>
        <td width="217" bordercolor="#FFFFFF" background="blue.PNG"><div align="center" class="style10 style13 style19"><a href="data.php" class="style21">TRAFFIC DATA</a></div></td>
        <td width="209" bordercolor="#FFFFFF" background="blue.PNG"><div align="center">
            <div align="center" class="style10 style13 style19"><a href="road.php" class="style21">TRAFFIC ROAD</a></div></td>
        <td width="117" bordercolor="#FFFFFF" background="blue.PNG"><div align="center" class="style10 style13 style19"><a href="service.php" class="style21">CONTACT</a></div></td>
        </tr>
    </table>
      <table width="806" height="447" border="0" align="center" bgcolor="#FFFF99">
      <td height="5"><form method="post" action="admin.php">
        <tr>
          <td height="218" colspan="2"><img src="pictures/atm-med.jpg" width="273" height="252" /></td>
          <td width="507" height="218"><img src="pictures/Capture.JPG" width="507" height="246" /></td>
        </tr>
        <tr>
          <td height="21" colspan="3"></td>
          <td width="12" colspan="6">&nbsp;</td>
        </tr>
        <marquee>
        <span class="style12">WELCOME TO TRAFFIC ADMIN LOGIN SYSTEMM</span>
        </marquee>
        <tr>
          <td height="31" colspan="3" align="left"><div align="center" class="style7">
              <div align="justify">LOGIN ADMIN </div>
          </div></td>
        </tr>
        <tr>
          <td width="100" height="43"><div align="justify">Email</div></td>
          <td colspan="2"><label> </label>
              <div align="justify">
                <input name="email" type="text" id="email" />
            </div></td>
        </tr>
       
        <tr>
          <td height="46"><div align="justify">Password</div></td>
          <td colspan="2"><div align="justify">
              <input name="password" type="text" id="password" />
          </div></td>
        </tr>
        <tr>
          <td height="26">&nbsp;</td>
          <td width="169"><input type="submit" name="Submit" value="Submit" /></td>
          <td><input type="reset" name="Submit2" value="Reset" /></td>
        </tr>
        <tr bgcolor="#FF00FF">
          <td height="39" colspan="3"><div align="center"></div></td>
        </tr>
     
    </table></td>
  </tr>
</table>
 </form>
</body>
</html>
