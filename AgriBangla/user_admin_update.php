<?php 
	include_once('session_admin.php');
 ?>
 <br><br>
<!--Address & Form tab-->
<div class="container bg-transparent">
	<div style="max-width: 600px; margin: 0 auto; padding-top: 50px; padding-bottom: 40px;">
	<h4 style="text-align: center;">Users</h4><br>
	<form action="" method="post">
			
			<?php 
					$link = mysqli_connect('localhost','root','','db_agribangla');
					if (!$link) {die('Connection Fail'.mysqli_error($link));}


					$ids = $_GET['id'];


					$showquery ="select * from tbl_users where id ={$ids}";

					$showdata = mysqli_query($link, $showquery);

					$arrdata = mysqli_fetch_array($showdata);


					if(isset($_POST['register'])){
						$idupdate = $_GET['id'];

						$name = mysqli_real_escape_string($link, $_POST['name']);
						$mobile = mysqli_real_escape_string($link, $_POST['mobile']);
						$email = mysqli_real_escape_string($link, $_POST['email']);
						$password = mysqli_real_escape_string($link, $_POST['password']);
						$cpassword = mysqli_real_escape_string($link, $_POST['cpassword']);
						$pass = password_hash($password, PASSWORD_BCRYPT);
						$cpass = password_hash($cpassword, PASSWORD_BCRYPT);


						
						$updatequery = "update tbl_users set id='$idupdate', name ='$name', mobile ='$mobile', email='$email', password= '$pass', cpassword= '$cpass' where id= '$idupdate'";

						$iquery = mysqli_query($link, $updatequery);

								if ($iquery) {
									 echo '	<script>alert("Update Successfull.");</script>';
									 //header('location:contact_admin.php');

								}else{
									
									echo '<script>alert("Update Failed")</script>';
									
								 }

					}
				?>

						<div class="form-group">
							<label for="name">নাম</label>
							<input type="text" class="form-control" name="name" placeholder="আপনার নাম" value="<?php echo $arrdata['name']; ?>" required>
						</div>
						<div class="form-group">
							<label for="mobile">মোবাইল নং</label>
							<input type="text" class="form-control" name="mobile" placeholder="মোবাইল নাম্বার" value="<?php echo $arrdata['mobile']; ?>" required>
						</div>
						<div class="form-group">
							<label for="email">ই-মেইল</label>
							<input type="email" class="form-control" name="email" placeholder="আপনার ই-মেইল" value="<?php echo $arrdata['email']; ?>" required>
						</div>
						<div class="form-group">
							<label for="password">পাসওয়ার্ড</label>
							<input type="password" class="form-control" name="password" placeholder="পাসওয়ার্ড" value="<?php echo $arrdata['password']; ?>" required>
						</div>
						<div class="form-group">
							<label for="cpassword">পাসওয়ার্ড নিশ্চিত করুন</label>
							<input type="password" class="form-control" name="cpassword" placeholder="পাসওয়ার্ড নিশ্চিত করুন" value="<?php echo $arrdata['cpassword']; ?>" required>
						</div>
						<div class="form-group form-check">
			      			<label class="form-check-label">
			        			<input class="form-check-input" type="checkbox" name="remember" required> I agree to all the tearms and conditions.
			      			</label>
			    		</div>
			    		<button type="submit" name="register" class="btn" style="background-color: #45aaf2">জমা দিন</button>
					</form>
				</div>
</div><br><br>


					





		<!--footer-->
<?php include_once ('common/footer_user.php'); ?>