<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Cloth Shopping</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style9 {font-size: 95%; font-weight: bold; color: #42222a; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style10 {color: #FFFFFF}
-->
.heading{
  color: #42222a;
  text-align: center;
}
</style>
</head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
  
  <div id="content">
    <h2 class="heading"><span>Order Management</span></h2>
    <table width="100%" border="1" bordercolor="#42222a" >
      <tr>
        <td bgcolor="#42222a" class="style10 style3"><strong>ID</strong></td>
        <td bgcolor="#42222a" class="style10 style3"><strong>Customer Name</strong></td>
        <td bgcolor="#42222a" class="style10 style3"><strong>Item Name</strong></td>
       
        <td bgcolor="#42222a" class="style10 style3"><strong>Quantity</strong></td>
        <td bgcolor="#42222a" class="style10 style3"><strong>Price</strong></td>
        <td bgcolor="#42222a" class="style10 style3"><strong>Total</strong></td>
      
        <td bgcolor="#42222a" class="style10 style3"><strong>Shipping Address</strong></td>
      </tr>
      <?php
	  session_start();

$con = mysqli_connect("localhost","root", "", "shoping");


$sql = "SELECT customer_registration.CustomerId, customer_registration.CustomerName, shopping_cart_final.ItemName, shopping_cart_final.Quantity, shopping_cart_final.Price, shopping_cart_final.Total 
FROM customer_registration, shopping_cart_final
WHERE customer_registration.CustomerId=shopping_cart_final.CustomerId ";

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result))
{
$Id=$row['CustomerId'];
$CustomerName=$row['CustomerName'];
$ItemName=$row['ItemName'];
$Quantity=$row['Quantity'];
$Price=$row['Price'];
$Total=$row['Total'];

?>
      <tr>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CustomerName;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $ItemName;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Quantity;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Price;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Total;?></strong></div></td>
        
        <td class="style3"><a href="Detail.php?CustomerId=<?php echo $Id;?>">Shipping Address</a></td>
      </tr>
      <?php
}

$records = mysqli_num_rows($result);
?>
      <?php

mysqli_close($con);
?>
    </table>
    <p align="justify">&nbsp;</p>
    
    </table>
    <p>&nbsp;</p>
  </div>

</div>
</body>
</html>
