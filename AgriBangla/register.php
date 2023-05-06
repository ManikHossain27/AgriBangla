<?php 									//only for registration   
	session_start();
	include 'common/header.php'; 
	include 'common/config_register.php';

?>

					<!-- Sign Up modal -->

<br><br>
<!--Address & Form tab-->
<div class="container bg-transparent">
	<div style="max-width: 600px; margin: 0 auto; padding-top: 50px; padding-bottom: 40px;">
	<h4>রেজিষ্ট্রেশন</h4>
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="name">নাম</label>
							<input type="text" class="form-control" name="name" placeholder="আপনার নাম" required>
						</div>
						<div class="form-group">
							<label for="username">মোবাইল নং</label>
							<input type="text" class="form-control" name="mobile" placeholder="মোবাইল নাম্বার" required>
						</div>
						<div class="form-group">
							<label for="email">ই-মেইল</label>
							<input type="email" class="form-control" name="email" placeholder="আপনার ই-মেইল" required>
						</div>
						<div class="form-group">
							<label for="password">পাসওয়ার্ড</label>
							<input type="password" class="form-control" name="password" placeholder="পাসওয়ার্ড" required>
						</div>
						<div class="form-group">
							<label for="cpassword">পাসওয়ার্ড নিশ্চিত করুন</label>
							<input type="password" class="form-control" name="cpassword" placeholder="পাসওয়ার্ড নিশ্চিত করুন" required>
						</div>
						<div class="form-group form-check">
			      			<label class="form-check-label">
			        			<input class="form-check-input" type="checkbox" name="remember" required> সকল নিয়ম এবং শর্তাসমূহ স্বীকার করছি ।
			      			</label>
			    		</div>
			    		<button type="submit" name="register" class="btn" style="background-color: #45aaf2">জমা দিন</button>
			    		<p style="float: right;">অ্যাকাউন্ট খোলা আছে! <a href="login_user.php">লগ ইন</a></p>
					</form>
				</div>
</div><br><br>


					





		<!--footer-->
<?php include_once ('common/footer.php'); ?>