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
<title>Life</title>
</head>
<body>
<div class="faltu"  id="header">
&nbsp;
</div>
<div class="top_bar">
<div class="container">
	<div class="top_link">
    	<ul>
            <li><a href="login-index.php">HOME</a></li>
            <li><a href="post.php">POST</a></li>
            <li><a href="index.php">LOG OUT</a></li>
            <li><a href="login-contact.php">CONTACT</a></li>
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
            	<li><a href="login-photography.php">PHOTOGRAPHY</a></li>
                <li><a href="login-design.php">DESIGN</a></li>
                <li><a href="login-fashion.php">FASHION</a></li>
                <li><a href="login-health.php">HEALTH</a></li>
                <li><a href="login-technology.php">TECHNOLOGY</a></li>
                <li><a href="login-life.php">LIFE</a></li>
                <li><a href="login-travel.php">TRAVEL</a></li>
                <li><a href="login-music.php">MUSIC</a></li>
                <li><a href="login-other.php">OTHER</a></li>
            </ul>
        </div>
        <div class="main-head clearfix">
        	<h1>LIFE</h1>
        </div>   

<style>
.comment{ 
	width:610px;
	text-align:justify;
	height:25px;
	float:right;
}
.comment h1{
	font:20px Calibri;
}
.comment input{
	width:526px;
	margin-right:0px;
	float:left;
}
.comment a{
	font:16px Calibri;
}
.com{
	width:20px;
}
</style>
	<?php
	$con = mysqli_connect("localhost","root","","social");
	$query = mysqli_query($con, "select * from blog where Type = 'Life' ORDER BY ID DESC");
	$a = 1;
	while($row = mysqli_fetch_array($query)){
	?>         
	<div class="blog-1">        
		<img data-u="Image" src="data:image;base64,<?php echo $row['Image'];?>"/>
		<?php
		echo '<h1 style="margin-top:10px;">'.$row['Title'].'</h1>';
		echo '<p style="margin-bottom:0px;">POST DATE: '.$row['Day'].'</p>';
        echo '<p style="margin-bottom:10px;">Description: '.$row['Des'].'</p><br>';
		
		echo '<div class="comment">
			<form method="post" action="" enctype="multipart/form-data" class="clearfix">
				<input style="margin-bottom:10px;" type="text" name="comment'.$a.'" placeholder="Comments" required/>
				<input style="width:70px;" type="submit" value="POST" class="com" name="commen'.$a.'"/>
			</form>';
		
		if(isset($_POST['commen'.$a.'']))
		{
			$data = $_POST['comment'.$a.''];
			$insert = mysqli_query($con, "insert into comments(BlogID, Comments) values('".$row['ID']."', '$data')");
			if($insert)
			{
				echo "<script>alert('Sucessfully Inserted".$a."')</script>";
			}
			else
			{
				echo "<script>alert('ERROR')</script>";
			}
			$a++;
		}
					$a++;
		?>
		<?php
		$query1 = mysqli_query($con, "select * from comments where BlogID = '".$row['ID']."'");
		while($row = mysqli_fetch_array($query1))
		{
             echo '<br><hr><a>'.$row['Comments'].'</a>';
		}
			 echo '<hr>';
		?>
		</div>
	</div>
	<?php
    }
    ?>
	</div><!-- container -->
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