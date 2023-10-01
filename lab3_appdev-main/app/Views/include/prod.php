<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Beautiflie</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css')?>">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css')?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url('css/responsive.css')?>">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url('images/fevicon.png')?>" type="image/gif">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url('css/jquery.mCustomScrollbar.min.css')?>">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="<?php echo base_url('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')?>">
      <!-- fonts -->
      <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext')?>" rel="stylesheet">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.min.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('css/owl.theme.default.min.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')?>" media="screen">
      <link href="<?php echo base_url('https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css')?>" rel="stylesheet" type="text/css" />
   </head>
   <!-- header section start -->
   <div class="header_section">
      <div class="container-fluid">
         <nav class="navbar navbar-light bg-light justify-content-between">
            <div id="mySidenav" class="sidenav">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <a href="/main">Home</a>
               <a href="/prod">Products</a>
               <a href="about">About</a>
               <a href="/customer">Client</a>
               <a href="contact">Contact</a>
            </div>
            <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
            <a class="logo" href="index.html"><img src="images/logo.png"></a></a>
            <form class="form-inline ">
               <div class="login_text">
                  <ul>
                     <li><a href="#"><img src="images/user-icon.png"></a></li>
                     <li><a href="#"><img src="images/bag-icon.png"></a></li>
                     <li><a href="#"><img src="images/search-icon.png"></a></li>
                  </ul>
               </div>
            </form>
         </nav>
      </div>
   </div>


<?= $this->include('include/top')?>
<!-- product section start -->
<div class="product_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="product_taital">Our Products</h1>
            <p class="product_text">incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
         </div>
      </div>
      <div class="product_section_2 layout_padding">
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <div class="product_box">
                  <h4 class="bursh_text">Beauty Bursh</h4>
                  <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                  <img src="images/img-1.png" class="image_1">
                  <div class="btn_main">
                     <div class="buy_bt">
                        <ul>
                           <li class="active"><a href="#">Buy Now</a></li>
                           <li><a href="#">Buy Now</a></li>
                        </ul>
                     </div>
                     <h3 class="price_text">Price $30</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="product_box">
                  <h4 class="bursh_text">Beauty Bursh</h4>
                  <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                  <img src="images/img-2.png" class="image_1">
                  <div class="btn_main">
                     <div class="buy_bt">
                        <ul>
                           <li class="active"><a href="#">Buy Now</a></li>
                           <li><a href="#">Buy Now</a></li>
                        </ul>
                     </div>
                     <h3 class="price_text">Price $30</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="product_box">
                  <h4 class="bursh_text">Beauty Bursh</h4>
                  <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                  <img src="images/img-3.png" class="image_1">
                  <div class="btn_main">
                     <div class="buy_bt">
                        <ul>
                           <li class="active"><a href="#">Buy Now</a></li>
                           <li><a href="#">Buy Now</a></li>
                        </ul>
                     </div>
                     <h3 class="price_text">Price $30</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="product_box">
                  <h4 class="bursh_text">Beauty Bursh</h4>
                  <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                  <img src="images/img-4.png" class="image_1">
                  <div class="btn_main">
                     <div class="buy_bt">
                        <ul>
                           <li class="active"><a href="#">Buy Now</a></li>
                           <li><a href="#">Buy Now</a></li>
                        </ul>
                     </div>
                     <h3 class="price_text">Price $30</h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">

         </div>
         <div class="seemore_bt"><a href="#">See More</a></div>
      </div>
   </div>
</div>
<!-- product section end -->
<!-- copyright section start -->
<div class="copyright_section">
   <div class="container">
      <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
   </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript -->
<script src="js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script>
   function openNav() {
     document.getElementById("mySidenav").style.width = "100%";
   }

   function closeNav() {
     document.getElementById("mySidenav").style.width = "0";
   }
</script>
