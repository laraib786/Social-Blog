<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
<link href="assets/css/slider.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<script src="assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="assets/js/scroll.js" type="text/javascript"></script>
<script src="assets/js/jssor.slider-26.3.0.min.js" type="text/javascript"></script>
<script src="assets/js/slider.js" type="text/javascript"></script>
<script src="assets/js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
</head>
<body>
<style>
.radio{
	width:30px;
	float:none;
}
</style>
<div class="faltu"  id="header">
&nbsp;
</div>
<div class="top_bar">
<div class="container">
	<div class="top_link">
    	<ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="signin.php">SIGN IN</a></li>
                <li><a href="signup.php">SIGN UP</a></li>
                <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>
    <div class="social-icon">
		<ul>
        	<li><a href="https://twitter.com/" class="social-icon-1">Twitter</a></li>
            <li><a href="https://www.facebook.com/" class="social-icon-2">Facebook</a></li>
            <li><a href="https://vimeo.com/" class="social-icon-3">Vimeo</a></li>
            <li><a href="https://www.pinterest.com/" class="social-icon-4">Pinterest</a></li>
            <li><a href="https://www.instagram.com/" class="social-icon-5">Instagram</a></li>
        </ul>
    </div>
</div><!-- container -->
</div>
<div class="section clearfix">
	<div class="container">
		<div class="logo" align="center">
			<h1>SOCIAL BLOG</h1>
            <a>GREATEST BLOG COLLECTION AT 1 PLATFORM</a>
	    </div>
        <div class="nav clearfix">
        	<ul>
            	<li><a href="photography.php">PHOTOGRAPHY</a></li>
                <li><a href="design.php">DESIGN</a></li>
                <li><a href="fashion.php">FASHION</a></li>
                <li><a href="health.php">HEALTH</a></li>
                <li><a href="technology.php">TECHNOLOGY</a></li>
                <li><a href="life.php">LIFE</a></li>
                <li><a href="travel.php">TRAVEL</a></li>
                <li><a href="music.php">MUSIC</a></li>
                <li><a href="other.php">OTHER</a></li>                
            </ul>
        </div>
      
        <div class="main-head clearfix">
        	<h1>SIGN UP</h1>
	</div>

    <div class="post-form">
    <div class="color">
<div class="lgreen">&nbsp;</div>
<div class="orange">&nbsp;</div>
<div class="red">&nbsp;</div>
<div class="purple">&nbsp;</div>
<div class="violet">&nbsp;</div>
<div class="blue">&nbsp;</div>
<div class="lblue">&nbsp;</div>
</div>
<br>
<form method="post" action="" enctype="multipart/form-data">
	<a>First Name:</a> <input type="text" placeholder="Enter First Name" required/><br>
	<a>Last Name:</a> <input type="text" placeholder="Enter Last Name" required/><br>
   	<a>Username:</a> <input type="text" name="user1" placeholder="Enter Username" required/><br>
   	<a>Password:</a> <input type="password" name="pass1" placeholder="Enter Password" required/><br>
    <a>D.O.B:</a> <input type="date" name="Birth" required class="date"/><br>
    <a>Email:</a> <input type="text" name="Mail" placeholder="Enter Email" required/>
    <a>Country:</a> <select name="Country">
  <opti on value="Pakistan">Pakistan</option>
  <option value="Canada">Canada</option>
  <option value="Turkey">Turkey</option>
  <option value="Japan">Japan</option>
</select>
    <a>Gender:</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a>Male</a><input class="radio" type="radio" name="Gender" value="Male"/>&nbsp;&nbsp;&nbsp;<a>Female</a>
<input class="radio" type="radio" name="Gender" value="Female"/><br>
<input type="submit" value="SIGN UP" class="bigbtn" name="submit"/>
</form>
</div>
	</div><!-- container -->
<?php
$con = mysqli_connect("localhost","root","","social");
if(!$con)
{
		echo "<script>alert('Connection Error')</script>";
}
if(isset($_POST['submit'])){
	$User1 = $_POST['user1'];
	$Pass1 = $_POST['pass1'];
	
	$insert = mysqli_query($con, "insert into signin(u_name, u_pass) values('$User1', '$Pass1')");
		if($insert)
	{
		echo "<script>alert('User Added')</script>";
			header('Location: login-index.php');
	}
	else
	{
		echo "<script>alert('ERROR')</script>";
	}
}
?>   
</div>
<footer id="footer" class="clearfix">
	<div class="container clearfix wow wow fadeInUp">
    	<div class="one-third">
        	<h1 class="foot-bold">POSTS CATEGORIES</h1>
            <ul>
            	<li><a href="photography.php">PHOTOGRAPHY</a></li>
                <li><a href="design.php">DESIGN</a></li>
                <li><a href="fashion.php">FASHION</a></li>
                <li><a href="health.php">HEALTH</a></li>
                <li><a href="technology.php">TECHNOLOGY</a></li>
                <li><a href="life.php">LIFE</a></li>
                <li><a href="travel.php">TRAVEL</a></li>
                <li><a href="music.php">MUSIC</a></li>
                <li><a href="other.php">OTHER</a></li>
            </ul>
        </div>

    	<div class="one-third">
        	<h1 class="foot-bold">TAGS CLOUD</h1>
            <div class="tags">
            <a href="#">PEOPLES</a>
            <a href="#">DESIGN</a>
            <a href="#">TECHNOLOGY</a>
            <a href="#">TRAVEL</a>
            <a href="#">MUSIC</a>
            <a href="#">PHOTOGRAPHY</a>
            <a href="#">FASHION</a>
            <a href="#">CREATIVE</a>
            <a href="#">APPLE</a>
            <a href="#">NEWS</a>
            <a href="#">DEVELOPMENT</a>
            </div>
        </div>
        
    	<div class="one-third">
        	<div class="insta">
        	<h1 class="foot-bold">INSTAGRAM</h1>
            <img src="assets/img/insta-image-1.jpg" alt="Image-1">
            <img src="assets/img/insta-image-2.jpg" alt="Image-2">
            <img src="assets/img/insta-image-3.jpg" alt="Image-3">
            <img src="assets/img/insta-image-4.jpg" alt="Image-4">
            <img src="assets/img/insta-image-5.jpg" alt="Image-5">
            <img src="assets/img/insta-image-6.jpg" alt="Image-6">
            </div>
        </div>
	</div>
    <div class="foot-nav">
	    <div class="container">
	        <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="signin.php">SIGN IN</a></li>
                <li><a href="signup.php">SIGN UP</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
    	</div>
    </div>
    <div class="company">
    	<p>© Copyright 2017 by Aptech Computer Education, Garden.</p>
    </div>
</footer>
<div class="top-scroll">
	<a href="#header"><i class="fa fa-angle-up" title="Click To Scroll Up"></i></a>
</div>
<script>
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
  </script>
</body>
</html>