<!DOCTYPE html>
<html>
<head>
	<title>AgriBangla</title>
	<link rel="icon" type="image/x-icon" href="gallery/logo.jpg">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
					<!--font awesome link start-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
					<!--Google Fonts-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital@1&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
					<!--Gallery cdn link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
	
					<!--my css file-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
					<!-- 		Style 		-->
	<style type="text/css">
		#mynav{height: 76px; }
		.item{transition: .5s ease-in-out;}
		.item:hover{filter: brightness(70%);}
		
		  /* Make the image fully responsive */
		.carousel-inner img {width: 100%;height: 100%;}
	</style>
</head>

<body style="background: linear-gradient(to right, #b3d9ff, #b3ffb3, #ccfff5, #ccebff, #c2c2d6);">
<div id="mynav">	<!-- 		Navbar 		-->
<nav class="navbar navbar-expand-md fixed-top bg-gradientcolor">
	  <!-- Brand/logo -->
  <a class="navbar-brand" href="#" style="font-size: 30px; color: red;margin-right: -2px; padding-left: 10px;">Agri</a>
  <a class="navbar-brand" href="home.php" style="font-size: 30px; color: green;">Bangla</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav">
      	<li class="nav-item"><a class="nav-link" href="home.php">হোম <i class="fas fa-home"></i></a></li>
      	
 		<li class="nav-item dropdown">
      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">শস্য</a>
    	<div class="dropdown-menu">
    		<a class="dropdown-item" href="aushdhan.php">আউশ ধান</a>
    		<a class="dropdown-item" href="indoorgame.php">আমন ধান</a>
    		<a class="dropdown-item" href="library.php">বোরো ধান</a>
    		<a class="dropdown-item" href="library.php">ইরিধান</a>
    		<a class="dropdown-item" href="library.php">গোবিন্দভোগ</a>
	        <a class="dropdown-item" href="movietheatre.php">জামাইভোগ</a>
	        <a class="dropdown-item" href="pat.php">পাট</a>
	        <a class="dropdown-item" href="childrenplayzone.php">গম</a>
	        <a class="dropdown-item" href="potato.php">আলু</a>
	        <a class="dropdown-item" href="library.php">ডাল</a>
	        <a class="dropdown-item" href="library.php">তেল বীজ</a>
	        <a class="dropdown-item" href="library.php">ভুট্টা</a>
	        <a class="dropdown-item" href="library.php">সরিষা</a>
	        <a class="dropdown-item" href="library.php">মসূর</a>
	        <a class="dropdown-item" href="library.php">বাদাম</a>
	        <a class="dropdown-item" href="library.php">চা</a>
	        <a class="dropdown-item" href="library.php">সূর্যমুখী</a>  
      </div></li>

      <li class="nav-item dropdown">
      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">শাক-সবজি
</a>
    	<div class="dropdown-menu">
    		<a class="dropdown-item" href="indoorgame.php">গোল আলু</a>
	        <a class="dropdown-item" href="movietheatre.php">টমেটো</a>
	        <a class="dropdown-item" href="childrenplayzone.php">বেগুন</a>
	        <a class="dropdown-item" href="library.php">করলা</a>
	        <a class="dropdown-item" href="library.php">পটল</a>
	        <a class="dropdown-item" href="library.php">লাউ</a>
	        <a class="dropdown-item" href="library.php">মটর শুঁটি</a>
	        <a class="dropdown-item" href="library.php">কাঁচা পেঁপে</a>
	        <a class="dropdown-item" href="library.php">কাঁকরোল</a>
	        <a class="dropdown-item" href="library.php">শসা</a>
	        <a class="dropdown-item" href="library.php">ফুলকপি</a>
	        <a class="dropdown-item" href="library.php">মুলা</a>
	        <a class="dropdown-item" href="library.php">ঝিংগে</a>
	        <a class="dropdown-item" href="library.php">চাল কুমড়া</a>
	        <a class="dropdown-item" href="library.php">বরবটি</a>
	        <a class="dropdown-item" href="library.php">চিচিংগা</a>
	        <a class="dropdown-item" href="library.php">মিষ্টি কুমড়া</a>
	        <a class="dropdown-item" href="library.php">কচু</a>
	        <a class="dropdown-item" href="library.php">সিম</a>
	        <a class="dropdown-item" href="library.php">ঢেঁড়স</a>
	        <a class="dropdown-item" href="library.php">কাঁচা কলা</a>
	        <a class="dropdown-item" href="library.php">পুঁই শাক</a>
      </div></li>

      <li class="nav-item dropdown">
      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">ফলমূল</a>
    	<div class="dropdown-menu">
    		<a class="dropdown-item" href="indoorgame.php">আম</a>
	        <a class="dropdown-item" href="movietheatre.php">কাঁঠাল</a>
	        <a class="dropdown-item" href="childrenplayzone.php">পেঁপে</a>
	        <a class="dropdown-item" href="library.php">আনারস</a>
	        <a class="dropdown-item" href="library.php">কলা</a>
	        <a class="dropdown-item" href="library.php">পেয়ারা</a>
	        <a class="dropdown-item" href="library.php">আমড়া</a>
	        <a class="dropdown-item" href="library.php">লিচু</a>
	        <a class="dropdown-item" href="library.php">লেবু</a>
	        <a class="dropdown-item" href="library.php">ড্রাগন ফল</a>
	        <a class="dropdown-item" href="library.php">লটকন</a>
	        <a class="dropdown-item" href="library.php">রাম্বুটান</a>
	        <a class="dropdown-item" href="library.php">বরই</a>
      </div></li>

      <li class="nav-item dropdown">
      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">গবাদি পশু</a>
    	<div class="dropdown-menu">
    		<a class="dropdown-item" href="indoorgame.php">গরু</a>
	        <a class="dropdown-item" href="movietheatre.php">মহিষ</a>
	        <a class="dropdown-item" href="childrenplayzone.php">ছাগল</a>
	        <a class="dropdown-item" href="library.php">ভেড়া</a>
      </div></li>

      <li class="nav-item dropdown">
      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">পোল্ট্রি ফার্ম</a>
    	<div class="dropdown-menu">
    		<a class="dropdown-item" href="indoorgame.php">হাঁস</a>
	        <a class="dropdown-item" href="movietheatre.php">মুরগি</a>
	        <a class="dropdown-item" href="childrenplayzone.php">টার্কি</a>
	        <a class="dropdown-item" href="library.php">কবুতর</a>
	        <a class="dropdown-item" href="library.php">কোয়েল</a>
      </div></li>

      <li class="nav-item"><a class="nav-link" href="gallery.php">গ্যালারী <i class="fas fa-camera"></i></a></li>
    </li>  
    </ul>
    <ul class="navbar-nav ml-auto">
		<li class="nav-item"><a class="nav-link" href="register.php"> সাইন-আপ <i class="fas fa-user-plus"></i></a></li>
		<li class="nav-item"><a class="nav-link" href="login_user.php"> লগইন <i class="fas fa-user"></i></a></li>
		<li class="nav-item"><a class="nav-link" href="contact.php"> মতামত <i class="fas fa-mobile-alt"></i></a></li>
	</ul>
  </div>  
</nav>
<br>
<br>
<br>


			<!-- Script for linking -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  			<!-- Script for gallery -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  			<!-- Script for customizing Html-->
<script>
//validate form 1, scripe start from here
	// Disable form submissions if there are invalid fields
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
	    // Get the forms we want to add validation styles to
	    var forms = document.getElementsByClassName('needs-validation');
	    // Loop over them and prevent submission
	    var validation = Array.prototype.filter.call(forms, function(form) {
	      form.addEventListener('submit', function(event) {
	        if (form.checkValidity() === false) {
	          event.preventDefault();
	          event.stopPropagation();
	        }
	        form.classList.add('was-validated');
	      }, false);
	    });
	  }, false);
	})();
	//end
//this code is for Toltip on footer.php admin corner
$(document).ready(function(){
	$('.adminName').tooltip({title: "Email Us", placement: "top"});
	$('.admin').tooltip({title: "Only for administrative", placement: "right"});
});
	//end

</script>
</body>
</html>