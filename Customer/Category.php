<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Cloth Shopping</title>
<script src="https://kit.fontawesome.com/97c08b965f.js" crossorigin="anonymous"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style5 {font-size: 85%; font-weight: bold; color: #42222A; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style3 {font-weight: bold}
.style9 {font-size: 95%; font-weight: bold; color: #42222A; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
  
  <div id="content">
    <h2><span style="color:#42222A"> Product Category</span></h2>
    
    <table width="100%" border="1" bordercolor="#42222A" >
    
      <?php

$con = mysqli_connect("localhost","root", "", "shoping");

$sql = "select * from Category_Master";

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result))
{
$Id=$row['CategoryId'];
$CategoryName=$row['CategoryName'];
$Description=$row['Description'];
$Image=$row['Image'];
?>
    <tr>
        <td class="style3"><img src="../Products/<?php echo $Image;?>" alt="" width="124" height="124" border="5" /></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CategoryName;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
        <td class="style3"><a href="Products.php?CategoryId=<?php echo $Id;?>">View Products</a></td>
      </tr>
      <?php
}

$records = mysqli_num_rows($result);
?>
<?php
mysqli_close($con);
?>
    <br>


 <?php
//  include "Right.php";
 ?>
  <div style="clear:both;"></div>
   <?php
//  include "Footer.php";
 ?>
</div>
</body>
</html>
