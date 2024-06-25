<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Online Cloth Shopping</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <style type="text/css">
    <!--
    .style9 {
      font-size: 95%;
      font-weight: bold;
      color: #003300;
      font-family: Verdana, Arial, Helvetica, sans-serif;
    }

    .style3 {
      font-weight: bold
    }
    -->
  </style>
</head>

<body>
  <div id="wrapper">

    <?php
    include "Header.php";
    ?>

    <div id="content">
      <h2><span style="color:#003300"> Special Offers</span></h2>
      <ul>

        <?php

        $con = mysqli_connect("localhost", "root", "", "shoping");

        $sql = "select * from Offer_Master";

        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_array($result)) {
          $Id = $row['OfferId'];
          $Offer = $row['Offer'];
          $Detail = $row['Detail'];
          $Valid = $row['Valid'];
        ?>

          <li><?php echo $Offer; ?> : <?php echo $Detail; ?>: <?php echo $Valid; ?></li>


        <?php
        }
        // Retrieve Number of records returned
        $records = mysqli_num_rows($result);
        ?>

        <?php
        // Close the connection
        mysqli_close($con);
        ?>
       

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
    </section>
    
    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on at UrbanVogue</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcoming season</h2>
            <span>The best classic dress is on at UrbanVogue</span>
            <button class="white">Collection</button>
        </div>
    </section>



        <div style="clear:both;"></div>
        <?php
        include "Footer.php";
        ?>
    </div>
</body>

</html>