<?php 
	$link = mysqli_connect('localhost','root','','db_agribangla');
	if (!$link) {die('Connection Fail'.mysqli_error($link));}

	$id= $_GET['id'];

	$deletequery = "delete from tbl_contactus where id=$id";

	$query = mysqli_query($link,$deletequery);

	header('location:contact_admin.php');
	


 ?>