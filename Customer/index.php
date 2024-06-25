<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Clothing Store</title>
<script src="https://kit.fontawesome.com/97c08b965f.js" crossorigin="anonymous"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style8 {font-size: 24px}
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>
<body>
<div id="wrapper">

  <?php
  include "Header.php";
  ?>

    <section id="hero">
        <h4>Trade-in offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button>Shop Now</button>
    </section>


    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5>Tie-detail puff-sleeved Crop Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 714</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/f2.jpg" alt="">
                <div class="des">
                    <span>The Label Jenn</span>
                    <h5>Oasis Utility Jumpsuit</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2497</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/f3.jpg" alt="">
                <div class="des">
                    <span>Uniqlo</span>
                    <h5>Regular Fit Lace resort shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 1499</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>    
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div> 
            </div>
            <div class="pro">
                <img src="img/products/f4.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5>Oversized Fit Printed jersey</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 1499</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/f5.jpg" alt="">
                <div class="des">
                    <span>Zara</span>
                    <h5>Corset Style Tie Around White Ribbed Full Sleeve Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 599</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/f6.jpg" alt="">
                <div class="des">
                    <span>Cider</span>
                    <h5>U Neckline Hollow Out Split Midi Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2100</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/f7.jpg" alt="">
                <div class="des">
                    <span>Torqadorn</span>
                    <h5>Twill cargo trousers</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 1999</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div> 
            </div>
            <div class="pro">
                <img src="img/products/f8.jpg" alt="">
                <div class="des">
                    <span>Uniqlo</span>
                    <h5>Regular Fit Muslin resort shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 1999</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% off</span> - All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/n1.jpg" alt="">
                <div class="des">
                    <span>Cider</span>
                    <h5>Knit Ruched Split Midi Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2805</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/n2.jpg" alt="">
                <div class="des">
                    <span>Rare Rabbit</span>
                    <h5>Sarin Stretch Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2469</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt="">
                <div class="des">
                    <span>URB_N</span>
                    <h5>Men Striped Resort Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 999</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div> 
            </div>
            <div class="pro">
                <img src="img/products/n4.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5>Linen-blend blazer dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 3499</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/n5.jpg" alt="">
                <div class="des">
                    <span>Urbanic</span>
                    <h5>Frill-trimmed halterneck dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 1999</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/n6.jpg" alt="">
                <div class="des">
                    <span>Urbanic</span>
                    <h5>Draped jersey dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 899</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="img/products/n7.jpg" alt="">
                <div class="des">
                    <span>H&M</span>
                    <h5>Wide High Jeans</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 2200</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div> 
            </div>
            <div class="pro">
                <img src="img/products/n8.jpg" alt="">
                <div class="des">
                    <span>Zara</span>
                    <h5>Viscose-blend cardigan</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 1899</h4>
                    <div class="Try-on">
                        <button class="normal">Try On</button>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </section>

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

    <section id="newsletter" class="section-p1 section-m1" >
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>






 

 <?php
//  include "Right.php";
 ?>
  <div style="clear:both;"></div>
   <?php
 include "Footer.php";
 ?>
</div>
</body>
</html>
