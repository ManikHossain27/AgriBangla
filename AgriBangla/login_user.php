<?php 
		session_start();
		include 'common/header.php';
		include 'common/config_user.php'; 

?>

					<!-- Sign in modal --> 
<!--Address & Form tab-->
<br><br>
<div class="container bg-transparent">
	<div style="max-width: 600px; margin: 0 auto; padding-top: 50px; padding-bottom: 70px;">
	<h4>লগইন</h4>

	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="needs-validation" novalidate>
		<div class="form-group">
			<label for="email">ই-মেইল</label>
				<input type="email" class="form-control" name="email" placeholder="আপনার ই-মেইল" required>
				<div class="invalid-feedback">আপনার ই-মেইল লিখুন</div>
		</div>
		<div class="form-group">
			<label for="pwt">পাসওয়ার্ড</label>
				<input type="password" class="form-control" name="password" placeholder="আপনার পাসওয়ার্ড" required>
				<div class="invalid-feedback">আপনার পাসওয়ার্ড লিখুন</div>
		</div>
		<button type="submit" class="btn" name="login" style="background-color: #45aaf2">লগইন</button>
		<p style="float: right;">কোন একাউন্ট কি নেই !<a href="register.php">রেজিষ্ট্রেশন</a></p>
	</form>
	</div>
</div><br><br><br><br><br><br><br><br><br><br><br><br>


					





		<!--footer-->
<?php include_once ('common/footer.php'); ?>