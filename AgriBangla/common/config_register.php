<?php  
if(isset($_POST['register'])){
	$link = mysqli_connect('localhost','root','','db_agribangla');

	if (!$link) {die('Connection Fail'.mysqli_error($link));}

	$name = mysqli_real_escape_string($link, $_POST['name']);
	$mobile = mysqli_real_escape_string($link, $_POST['mobile']);
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$password = mysqli_real_escape_string($link, $_POST['password']);
	$cpassword = mysqli_real_escape_string($link, $_POST['cpassword']);

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$emailquary= "select * from tbl_users where email ='$email'";
	$query= mysqli_query($link, $emailquary);

	$emailcount = mysqli_num_rows($query);

	if ($emailcount>0) {
		echo "email already exists.";
	}else{
		if ($password === $cpassword) {
			$insertquery = "insert into tbl_users(name, mobile, email, password, cpassword) values('$name', '$mobile', '$email', '$pass', '$cpass')";
			$iquery = mysqli_query($link, $insertquery);

			if ($link) {
			 	?>
				 	<script>
				 		alert("Registration Successfull. Please login."); 
				 		location.replace("login_user.php")
				 	</script>
				<?php
			}else{
				?>
					<script>
				 		alert("Not Inserted")
				 	</script>
				<?php
			 }

		}else{
			echo "password are not matching.";
		}
	}
	


}
?>