<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Cloth Shopping</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
.style11 {color: #192666}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
-->
</style>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style12 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
  
  <div id="content">
    <h2><span style="color:#42222a">Edit Users </span></h2>
    <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="33" bgcolor="#42222a"><span class="style10 style11 style12">Edit Details</span></td>
      </tr>
      <tr>
        <td><?php
$Id=$_GET['AdminId'];

$con = mysqli_connect("localhost","root", "", "shoping");

$sql = "select * from Admin_Master where AdminId=".$Id."";

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result))
{
$Id=$row['AdminId'];
$Name=$row['UserName'];
$Password=$row['Password'];
}
?>
            <form method="post" action="UpdateUser.php">
              <table width="100%" border="0">
                <tr>
                  <td height="32"><span class="style8">User Id</span></td>
                  <td><span id="sprytextfield1">
                    <label>
                    <input name="txtUserId" type="text" id="txtUserId" value="<?php echo $Id;?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td height="36"><span class="style8">User Name:</span></td>
                  <td><span id="sprytextfield2">
                    <label>
                    <input name="txtUserName" type="text" id="txtUserName" value="<?php echo $Name;?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td height="36"><span class="style8">Password:</span></td>
                  <td><span id="sprytextfield3">
                    <label>
                    <input name="txtPass" type="password" id="txtPass" value="<?php echo $Password;?>" />
                    </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="submit" value="Update Record" /></td>
                </tr>
</table>
            </form>
            <?php

mysqli_close($con);
?>
            <form method="post" action="UpdateUser.php">
              <table width="100%" border="0">
              </table>
            </form></td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </table>
    <p align="justify">&nbsp;</p>
  
</div>
<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>
