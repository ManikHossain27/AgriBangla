		<!--header-->
<?php 
	include_once ('session_user.php'); 
	include 'common/config_contactus.php';

?> 

<div class="text-center">
	<p style="font-family: 'Kaushan Script', cursive; font-size: 50px; padding-top: 10px;">মতামত</p>
	<img src="gallery/underline.png" style="width: 350px; height: 60px; margin-top: -35px; padding-left: 5px;">
</div>
<!--Address & Form tab-->
<div class="container bg-transparent">
	<div class="row">
		<div class="col-md-6" style="text-align: center;border-right: 7px solid #f1f2f6; border-top-right-radius: 10%;"><br><br>
			<p style="font-family: 'Kaushan Script', cursive, serif; font-size: 30px; padding-top: 35px">AgriBangla</p>
			<p style="margin-top: -15px;">হটলাইন: +৮৮ ০১ ৫২১৫০৩৬২৯, +৮৮ ০১ ৫২১৫০৩৬৩০
			<br>ফোন করার সময়: সকাল ৯:০০ - সন্ধ্যা ৭:০০
			<br>ফ্যাক্স: +৮৮ ০২ ৩৬৫৪৮২১</p>
			<p style="font-family: 'Kaushan Script', cursive; font-size: 30px; padding-top: 10px;">কর্পোরেট অফিস</p>
			<p style="margin-top: -15px;">বাড়ি নং #২১১, অ্যাপার্টমেন্ট #ডি ৫, রোড় ২, ব্লক ডি, মিরপুর<br>ঢাকা ১০২৫০, বাংলাদেশ

			<br>টেলিফোন: +৮৮ ০২ ৩৬৫৪৮২২ <br>ফ্যাক্স: +৮৮ ০২ ৩৬৫৪৮৩৮</p>
		</div>

		<div class="col-md-6" style="border-left: 7px solid #f1f2f6; border-top-left-radius: 10%;">
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="needs-validation" novalidate style="padding: 35px 10px;">
				<div class="form-group">
					<label for="name">নাম</label>
					<input type="text" class="form-control" name="name" placeholder="নাম" required>
					<div class="invalid-feedback">আপনার নাম লিখুন</div>
				</div>
				<div class="form-group">
					<label for="email">ই-মেইল</label>
					<input type="email" class="form-control" name="email" placeholder="ই-মেইল এড্রেস" required>
					<div class="invalid-feedback">আপনার ই-মেইল এড্রেস লিখুন</div>
				</div>
				<div class="form-group">
					<label for="tel">মোবাইল</label>
					<input type="tel" class="form-control" name="mobile" placeholder="মোবাইল নাম্বার" required>
					<div class="invalid-feedback">আপনার মোবাইল নাম্বার লিখুন</div>
				</div>
				<div class="form-group">
					<label for="text">বার্তা</label>
					<textarea  id=""  name="message" class="form-control" style="height: 200px;" required></textarea>
					<div class="invalid-feedback">আপনার বার্তা লিখুন</div>
				</div>
		    	<button type="submit" name="submit" class="btn" style="background-color: #45aaf2">জমা দিন</button>
			</form>
		</div>
	</div>
</div><br><br>


					





		<!--footer-->
<?php include_once ('common/footer.php'); ?>