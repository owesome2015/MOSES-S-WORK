<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.TRAFFIC {color: #000;
}
.TRAFFIC td div {
	color: #FF8000;
}
.TRAFFIC td div span {
	color: #800080;
}
.TRAFFIC td table tr td div .TRAFFIC {
	color: #FFF;
}
.style4 {
	font-size: 18px;
	font-weight: bold;
}
.style5 {color: #FFFFFF}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
</style>
</head>

<body>
<p>&nbsp;</p>
<div align="center">
  <table width="909" height="345" border="0" bgcolor="#FFFF99">
    <tr class="TRAFFIC">
      <td height="32" background="green"><img src="pictures/contact-us.jpg" width="915" height="73" /></td>
    </tr>
    <tr class="TRAFFIC">
      <td width="903" height="32" background="green"><table width="912" height="28" border="0" align="center" background="blue.PNG">
        <tr bgcolor="#9999CC">
          <td width="148" height="24" bgcolor="#0000FF"><div align="center" class="style8"><a href="home.php" class="TRAFFIC">HOME</a></div></td>
          <td width="203" bgcolor="#0000FF"><div align="center" class="style8"><a href="manage.php" class="TRAFFIC">TRAFFIC MANAGEMENT</a></div></td>
          
          <td width="174" bgcolor="#0000FF"><div align="center" class="style8"><a href="data.php" class="TRAFFIC">TRAFFIC DATA</a></div></td>
          <td width="169" bgcolor="#0000FF"><div align="center">
            <div align="center" class="style8"><a href="road.php" class="TRAFFIC">TRAFFIC ROAD</a></div></td>
          <td width="146" bgcolor="#0000FF"><div align="center" class="style8"><a href="service.php" class="TRAFFIC">CONTACT</a></div></td>
          </tr>
      </table></td>
    </tr>
    <tr bgcolor="#663300">
      <td height="273" bgcolor="#FFFF66"><table width="491" height="333" border="0" align="center" bgcolor="#FF66FF">
        
          <tr>
            <td height="38" colspan="3" bgcolor="#663300"><div align="center" class="style5"><span class="style4">Contact Us by filling in your information in the form below </span></div></td>
          </tr>
		  <form id="form1" name="form1" method="post" action="contact.php">
          <tr>
            <td width="74">Name</td>
            <td colspan="2"><input name="name" type="text" id="name" /></td>
          </tr>
          <tr>
            <td>Address</td>
            <td colspan="2"><input name="address" type="text" id="address" /></td>
          </tr>
          <tr>
            <td>Telephone</td>
            <td colspan="2"><input name="telephone" type="text" id="telephone" /></td>
          </tr>
          <tr>
            <td>Email</td>
            <td colspan="2"><input name="email" type="text" id="email" /></td>
          </tr>
          <tr>
            <td>Subject</td>
            <td colspan="2"><input name="subject" type="text" id="subject" /></td>
          </tr>
          <tr>
            <td>Comment</td>
            <td colspan="2"><label>
              <textarea name="comment" id="comment"></textarea>
              </label>            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td width="180"><input type="submit" name="Submit" value="Submit" /></td>
            <td width="223"><input name="reset" type="reset" id="reset" value="Reset" /></td>
          </tr>
        </form>
      </table>	  </td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
</body>
</html>