<?php 
session_start();
include("includes/conn/db_connect.php"); 

include('includes/mysession.php');

error_reporting(E_ALL);
ini_set('display_errors', 'on');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewpoint" content="width=device-width, initial-sscale=1.0">
    <title>ceejay collection</title>
    <!---------stylesheet------------------->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!----------light-slider-css-------------------->
    <link rel="stylesheet" type="text/css" href="lightslider.css">
    <!------jQuery------------------------------------->
    <script src="jquery.js"></script>
    <!-----light-slider-js------>
    <script src="lightslider.js"></script>

    <!-----fav-icon-->
    <link rel="stylesheet" href="images/fav-icon.png">
    <!----using font awesome cdn-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!----navigation-->

    <nav>
        <!-----social-link and phone number-->
        <div class="social-call">
            <!----social link-->
            <div class="social">
                <a href="#"> <i class="fa fa-facebook-f"></i></a>
                <a href="#"> <i class="fa fa-twitter"></i></a>
                <a href="#"> <i class="fa fa-youtube-play"></i></a>
                <a href="#"> <i class="fa fa-instagram"></i></a>
            </div>
            <!----phone-->
            <div class="phone">
                <span>Call +23408094975820</span>
            </div>

        </div>

        <!-----menu bar section------------------>
        <div class="navigation">
            <!------logo-->
            <a href="#" class="logo"><span>C</span>ee<span>j</span>ay. Collections </a>
            <!--menu-->
            <ul class="menu">
                <li><a href="#">Home</a> </li>
                <li><a href="#feature">Men</a> 
                    <!---sale-label-->
                    <span class="sale-label">sale</span>
                </li>
                <li><a href="#">Women</a> </li>
                <li><a href="#">Kids</a> </li>
                <li><a href="#new">Shop</a> </li>
                <li><a style="float:right" href="logout.php">logout</a> </li>
            </ul>
<!----right Menu-->
            <div class="right-menu">
                <!---search-->
                <a href="javascript:void(0);" class="search"> <i class="fa fa-search"></i></a>
                  <!---user-->
                  <a href="javascript:void(0);" class="user"> <i class="fa fa-user"></i></a>
                    <!---cart icon-->
                <a href="#"> <i class="fa fa-shopping-cart">
                <!------number of product-->
                <span class="num-cart-product">0</span>
            </i>
                </a>

            </div>
        </div>
    </nav>
    <!----search bar section------------------->
    <div class="search-bar">
        <!----search input-->
        <div class="search-input">
        <!----input-->
            <input type="text" placeholder="Search for product">
            <!---cancel-btn-->
            <a href="javascript:void(0)" class="search-cancel">
                <i class=" fa fa-times"></i>
            </a>
        </div>

    </div>


    <!---------login and sign up form------->

<div class="form">
    <!-----login-->
    <div class="login-form">
        <!-----cancel btn-->
        <a href="javascript:void(0)" class="form-cancel">
            <li class="fa fa-times"></li>
        </a>
        <!----heading-->
        <strong>Log In</strong>
        <!---input-->
        <form>
            <input type="email" placeholder="Example@gmail.com" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <!---submit-btn-->
            <input type="submit" value="log In">
        </form>
        <!---forget and sign up btn-->
        <div class="form-btns">
        <a href="#" class="forget">Forget Your Password</a>
        <a href="#" class="sign-up-btn">Create Account</a>
    </div>
    </div>
<!-----signup-------------------->
<div class="sign-up-form">
    <!-----cancel btn-->
    <a href="" class="form-cancel">
        <li class="fa fa-times"></li>
    </a>
    <!----heading-->
    <strong>Sign Up</strong>
    <!---input-->
    <form>
        <input type="text" placeholder="Full Name" name="fullname" required>
        <input type="email" placeholder="Example@gmail.com" name="email" required>
        <input type="password" placeholder="Password" name="password" required>
        <!---submit-btn-->
        <input type="submit" value="Sign Up">
    </form>
    <!---forget and sign up btn-->
    <div class="form-btns">
    <a href="#" class="already-account">Already Have Account?</a>
   
</div>
</div>
</div>

<!--------------full-slider------------------------------------->


<ul id="adaptive" class="cs-hidden">
    <!----box-1--------------->
    <li class="item-a">
       <div class="full-slider-box f-slide-1">
          <!----slider-text-container----->
          <div class="slider-text-container">
            <div class="f-slider-text">
                <span>Limited Offer</span>
                <strong>30% off</br>with <font>promo code</font></strong>
                <a href="#" class="f-slider-btn">Shop Now</a>
            </div>
          </div>
       </div> 
    </li>
     <!----box-2--------------->
     <li class="item-a">
        <!-----------box--------------->
        <div class="full-slider-box f-slide-2">
            <!----slider-text-container----->
        <div class="slider-text-container">
             <div class="f-slider-text">
                <span>Limited Offer</span>
                <strong>30% off</br>with <font>promo code</font></strong>
                <a href="#" class="f-slider-btn">Shop Now</a>
            </div>
        </div>
        </div>
    </li>
     <!----box-3--------------->
     <li class="item-a">
        <!-----------box--------------->
        <div class="full-slider-box f-slide-3">
            <!----slider-text-container----->
        <div class="slider-text-container">
             <div class="f-slider-text">
                <span>Limited Offer</span>
                <strong>30% off</br>with <font>promo code</font></strong>
                <a href="#" class="f-slider-btn">Shop Now</a>
            </div>
        </div>
        </div>
    </li>
    
  </ul>

<!---------------Featured-Categories----------------------------------->

<div class="feature-heading" id="feature">
<h2>Feature Categories</h2>
</div>
<ul id="autoWidth" class="cs-hidden">
    <!--------1-->
    <li class="item">
        <!---------------Featured-box----------------------------------->

<div class="feature-box">
    <a href="#">
        <img src="images/f1.jpg">
    </a>

</div>
<!--text-->
<span>T-Shirt</span>
    </li>

        <!--------2-->
        <li class="item">
            <!---------------Featured-box----------------------------------->
    
    <div class="feature-box">
        <a href="#">
            <img src="images/f2.jpg">
        </a>
    
    </div>
    <!--text-->
    <span>T-Shirt</span>
        </li>
    
            <!--------3-->
    <li class="item">
        <!---------------Featured-box----------------------------------->

<div class="feature-box">
    <a href="#">
        <img src="images/f3.jpg">
    </a>

</div>
<!--text-->
<span>T-Shirt</span>
    </li>
    
        <!--------4-->
        <li class="item">
            <!---------------Featured-box----------------------------------->
    
    <div class="feature-box">
        <a href="#">
            <img src="images/f4.jpg">
        </a>
    
    </div>
    <!--text-->
    <span>T-Shirt</span>
        </li>
    
            <!--------5-->
    <li class="item">
        <!---------------Featured-box----------------------------------->

<div class="feature-box">
    <a href="#">
        <img src="images/f5.jpg">
    </a>

</div>
<!--text-->
<span>T-Shirt</span>
    </li>
    
        <!--------6-->
        <li class="item">
            <!---------------Featured-box----------------------------------->
    
    <div class="feature-box">
        <a href="#">
            <img src="images/f6.jpg">
        </a>
    
    </div>
    <!--text-->
    <span>T-Shirt</span>
        </li>
        
         <!--------7-->
         <li class="item">
            <!---------------Featured-box----------------------------------->
    
    <div class="feature-box">
        <a href="#">
            <img src="images/f2.jpg">
        </a>
    
    </div>
    <!--text-->
    <span>T-Shirt</span>
        </li>
</ul>

<!------new arrival----> 

<section class="new-arrival" id="new">
<!-------heading------>
<div class="arrival-heading">

<strong>New Arrival</strong>
<p>we provide you new design clothes</p>

</div>
<!----product container-->
<div class="product-container">
    <!---product-box-1-->
    <div class="product-box">
        <!---img-->
    <div class="product-img">

  <!---add- cart-->
  <a href="#" class="add-cart">
    <i class="fa fa-shopping-cart"></i>
</a>
        <img src="images/new7.jpg">
    </div>



    <!--details-->
    <div class="product-details">
        <a href="#" class="p-name">Drawstring T-Shirt</a>
        <span class="p-price">$22/00</span>

    </div>
    </div>

     <!---product-box-2-->
     <div class="product-box">
        <!---img-->
    <div class="product-img">

  <!---add- cart-->
  <a href="#" class="add-cart">
    <i class="fa fa-shopping-cart"></i>
</a>
        <img src="images/new6.jpg">
    </div>


    
    <!--details-->
    <div class="product-details">
        <a href="#" class="p-name">Drawstring T-Shirt</a>
        <span class="p-price">$22/00</span>

    </div>
    </div>
     <!---product-box-3-->
     <div class="product-box">
        <!---img-->
    <div class="product-img">

  <!---add- cart-->
  <a href="#" class="add-cart">
    <i class="fa fa-shopping-cart"></i>
</a>
        <img src="images/new5.jpg">
    </div>


    
    <!--details-->
    <div class="product-details">
        <a href="#" class="p-name">Drawstring T-Shirt</a>
        <span class="p-price">$22/00</span>

    </div>
    </div>
     <!---product-box-4-->
     <div class="product-box">
        <!---img-->
    <div class="product-img">

  <!---add- cart-->
  <a href="#" class="add-cart">
    <i class="fa fa-shopping-cart"></i>
</a>
        <img src="images/new4.jpg">
    </div>


    
    <!--details-->
    <div class="product-details">
        <a href="#" class="p-name">Drawstring T-Shirt</a>
        <span class="p-price">$22/00</span>

    </div>
    </div>
     <!---product-box-5-->
     <div class="product-box">
        <!---img-->
    <div class="product-img">

  <!---add- cart-->
  <a href="#" class="add-cart">
    <i class="fa fa-shopping-cart"></i>
</a>
        <img src="images/new3.jpg">
    </div>


    
    <!--details-->
    <div class="product-details">
        <a href="#" class="p-name">Drawstring T-Shirt</a>
        <span class="p-price">$22/00</span>

    </div>
    </div>
     <!---product-box-6-->
     <div class="product-box">
        <!---img-->
    <div class="product-img">

  <!---add- cart-->
  <a href="#" class="add-cart">
    <i class="fa fa-shopping-cart"></i>
</a>
        <img src="images/new2.jpg">
    </div>


    
    <!--details-->
    <div class="product-details">
        <a href="#" class="p-name">Drawstring T-Shirt</a>
        <span class="p-price">$22/00</span>

    </div>
    </div>
     <!---product-box-7-->
     <div class="product-box">
        <!---img-->
    <div class="product-img">

  <!---add- cart-->
  <a href="#" class="add-cart">
    <i class="fa fa-shopping-cart"></i>
</a>
        <img src="images/new1.jpg">
    </div>


    
    <!--details-->
    <div class="product-details">
        <a href="#" class="p-name">Drawstring T-Shirt</a>
        <span class="p-price">$22/00</span>

    </div>
    </div>
     <!---product-box-8-->
     <div class="product-box">
        <!---img-->
    <div class="product-img">

  <!---add- cart-->
  <a href="#" class="add-cart">
    <i class="fa fa-shopping-cart"></i>
</a>
        <img src="images/slidb2.jpg">
    </div>


    
    <!--details-->
    <div class="product-details">
        <a href="#" class="p-name">Drawstring T-Shirt</a>
        <span class="p-price">$22/00</span>

    </div>
    </div>
</div>

</section>

<!---sale--------------------------->
<section class="sale">
    <!----sale-box-1-->
 <div class="sale-box">
    <!------img----->
    <img src="images/new1.jpg">
    <!-----text----->
    <a href="#">
        <div class="sale-text">
            <strong>Bag With Rose Pattern</strong>
            <span>Sale off 25%</span>
        </div>
    </a>
</div>
   <!----sale-box-2-->
   <div class="sale-box">
    <!------img----->
    <img src="images/sale2.jpg">
    <!-----text----->
    <a href="#">
        <div class="sale-text">
            <strong>Bag With Rose Pattern</strong>
            <span>Sale off 25%</span>
        </div>
    </a>
</div>
   <!----sale-box-3-->
   <div class="sale-box">
    <!------img----->
    <img src="images/sale1.jpg">
    <!-----text----->
    <a href="#">
        <div class="sale-text">
            <strong>Bag With Rose Pattern</strong>
            <span>Sale off 25%</span>
        </div>
    </a>
</div>
</section>

<div>
<section>

<!------new arrival----> 

<section class="new-arrival">
    <!-------heading------>
    <div class="arrival-heading">
    
    <strong>feature items</strong>
    <p>we provide you new design clothes</p>
    
    </div>
    <!----product container-->
    <div class="product-container">
        <!---product-box-1-->
        <div class="product-box">
            <!---img-->
        <div class="product-img">
    
      <!---add- cart-->
      <a href="#" class="add-cart">
        <i class="fa fa-shopping-cart"></i>
    </a>
            <img src="images/new7.jpg">
        </div>
    
    
    
        <!--details-->
        <div class="product-details">
            <a href="#" class="p-name">Drawstring T-Shirt</a>
            <span class="p-price">$22/00</span>
    
        </div>
        </div>
    
         <!---product-box-2-->
         <div class="product-box">
            <!---img-->
        <div class="product-img">
    
      <!---add- cart-->
      <a href="#" class="add-cart">
        <i class="fa fa-shopping-cart"></i>
    </a>
            <img src="images/new6.jpg">
        </div>
    
    
        
        <!--details-->
        <div class="product-details">
            <a href="#" class="p-name">Drawstring T-Shirt</a>
            <span class="p-price">$22/00</span>
    
        </div>
        </div>
         <!---product-box-3-->
         <div class="product-box">
            <!---img-->
        <div class="product-img">
    
      <!---add- cart-->
      <a href="#" class="add-cart">
        <i class="fa fa-shopping-cart"></i>
    </a>
            <img src="images/new5.jpg">
        </div>
    
    
        
        <!--details-->
        <div class="product-details">
            <a href="#" class="p-name">Drawstring T-Shirt</a>
            <span class="p-price">$22/00</span>
    
        </div>
        </div>
         <!---product-box-4-->
         <div class="product-box">
            <!---img-->
        <div class="product-img">
    
      <!---add- cart-->
      <a href="#" class="add-cart">
        <i class="fa fa-shopping-cart"></i>
    </a>
            <img src="images/new4.jpg">
        </div>
    
    
        
        <!--details-->
        <div class="product-details">
            <a href="#" class="p-name">Drawstring T-Shirt</a>
            <span class="p-price">$22/00</span>
    
        </div>
        </div>

    </div>
</section>
<!----banner------------------------------->


<!-----------box--------------->
<div class="banner-box f-slide-2">
    <!----slider-text-container----->
<div class="banner-text-container">

     <div class="banner-text">
        <span>Limited Offer</span>
        <strong>30% off</br>with <font>promo code</font></strong>
        <a href="#" class="banner-btn">Shop Now</a>
    </div>
</div>
</div>

<!--------services--------------------->
<section class="services">
<!-------service-box-1--->
<div class="service-box">
    <i class="fa fa-shopping-cart"></i>
    <span>Free Shipping</span>
    <p>Free Shipping for all Nig. orders</p>
</div>
<!-------service-box-2--->
<div class="service-box">
    <i class="fa fa-star"></i>
    <span>Suppot 24/7</span>
    <p>We Support 24h a day</p>
</div>
<!-------service-box-3--->
<div class="service-box">
    <i class="fa fa-sun-o"></i>
    <span>100% Money Back</span>
    <p>You have 30 days to return</p>
</div>
</section>
<!----footer-->
<footer>
    <!---copyright-->
    <span class="copyright">
        copyright 2020 - GoingToInternet
    </span>
    <!-----subscribe-->
    <div class="subscribe">
        <form>
            <input type="email" placeholder="example@gmail.com" required>
            <input type="submit" value="subscribe">

        </form>

    </div>
    <button onclick="this.innerHTML=Date()">Time</button>
</footer>



<!------script-->
<script type="text/javascript">
/*-----for search bar----------*/
$(document).on('click','.search', function(){
    $('.search-bar').addClass('search-bar-active')
});

$(document).on('click','.search-cancel', function(){
    $('.search-bar').removeClass('search-bar-active')
});

/*---login-and-sign-up-form--------*/

$(document).on('click','.user, .already-account', function(){
    $('.form').addClass('login-active').removeClass('sign-up-active')
});

$(document).on('click','.sign-up-btn', function(){
    $('.form').addClass('sign-up-active').removeClass('login-active')
});




$(document).on('click','.form-cancel', function(){
    $('.form').removeClass('login-active').removeClass('sign-up-active')
});


/*----full slider script-----------------------------*/

$(document).ready(function() {
    $('#adaptive').lightSlider({
        adaptiveHeight:true,
        auto:true,
        item:1,
        slideMargin:0,
        loop:true
    });
});

/*---------feature-slider-------------*/
$(document).ready(function(){
$('#autoWidth').lightSlider({
    autoWidth:true,
    loop:true,
    onSliderLoad: function(){
        $('#autoWidth').removeClass('cS-hidden');
    }
});
});
/*-------for fix menu when scroll-----*/
$(window).scroll(function(){
    if($(document).scrollTop() > 50){
        $('navigation').addClass('fix-nav');
    }
    else{
        $('navigation').removeClass('fix-nav');
    }
})
</script>


</body>

</html>