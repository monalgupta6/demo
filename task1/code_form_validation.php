<?php

	require_once "connect.php";
	if(isset($_POST['submit'])){
		$usrname=$_POST['username'];
		$email=$_POST['email'];
		$phn=$_POST['phonenumber'];
		$pass=$_POST['password'];
		$pass=sha1(md5($pass));
		$cnpass=$_POST['confirmpassword'];

		
		


		$var=mysqli_query($conn, "insert into user(username, email, phonenumber, password, confirmpassword) values ('$usrname', '$email', '$phn', '$pass', '$cnpass') ") or die(mysqli_error($conn));

		if($var)
		{
			echo "Values added successfully";
			header("location:form_validation.php");
		}
		else{
			echo "Error: something went wrong";
		}
	}
?>