<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Petcare a Animals & Pets  Category Flat Bootstarp responsive Website Template| HOME :: w3layouts</title>
<!--bootstarp-css-->
<link href="<?php echo base_url() ?>asset/front/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--/bootstarp-css -->
<!--css-->
<link rel="stylesheet" href="<?php echo base_url() ?>asset/front/css/style.css" type="text/css" media="all" />
<!--/css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Petcare Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/hover.css" rel="stylesheet" media="all">
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<!--/fonts-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asset/front/js/modernizr.custom.js"></script>
<script src="<?php echo base_url() ?>asset/front/js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>
</head>
<body>
<!--header-->
<div class="header">
  <div class="header-info">
    <div class="container">
    <div class="logo">
        <a href="index.html"><img src="<?php echo base_url() ?>asset/front/images/logo.png" alt="" /></a>
    </div>
               <div class="search-box">
                <form>
                    <input type="text" name="s" class="textbox" placeholder="Search" required="">
                    <input type="submit" value="">
                </form>
             </div>
             <div class="clearfix"> </div>
    </div>
  </div>
</div>
   <div class="container">
         <div class="header-bottom">
              <div class="menu">
                <span class="menu-info"> </span>
                <ul class="cl-effect-21">
                  <li><a href="index.html" class="active">HOME</a></li>
                  <li><a href="about.html">ABOUT</a></li>
                  <li><a href="projects.html">PROJECTS</a></li>
                  <li><a href="support.html">SUPPORT</a></li>
                  <li><a href="404.html">CAREPLUS</a></li>
                  <li><a href="contact.html">CONTACT</a></li>
                </ul>
              </div>
          <!--script-nav -->  
              <script>
          $("span.menu-info").click(function(){
            $("ul.cl-effect-21").slideToggle("slow" , function(){
            });
          });
          </script>
          <!-- /script-nav -->
                    <div class="clearfix"> </div> 
       </div>
  </div>
<div class="header-banner">
   <div class="slider">
      <ul class="rslides" id="slider2">
        <li><a href="#"><img src="<?php echo base_url() ?>asset/front/images/4.jpg" class="img-responsive" alt=""/></a></li>
        <li><a href="#"><img src="<?php echo base_url() ?>asset/front/images/2.jpg" class="img-responsive" alt=""/></a></li>
        <li><a href="#"><img src="<?php echo base_url() ?>asset/front/images/3.jpg" class="img-responsive" alt=""/></a></li>
      </ul>
    </div>
</div>
<!--/header-->