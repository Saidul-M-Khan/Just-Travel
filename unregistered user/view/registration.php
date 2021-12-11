<?php 
	//session_start();
	require_once('../model/db.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$c_password = $_POST['c_password'];
		$role = $_POST['gender'];
		if ($password == $c_password) {
			$sql = "SELECT * FROM users WHERE username='$username'";
			$result = mysqli_query($connection, $sql);
			if (!$result->num_rows > 0) {
				$sql = "INSERT INTO users (username, email, password, gender) VALUES ('$username', '$email', '$password','$gender')";
				$result = mysqli_query($connection, $sql);
				if ($result) {
					
					$username = "";
					$email = "";
					$_POST['password'] = "";
					$_POST['c_password'] = "";
					$_POST['gender'] = "";
					header("Location:login.php");
				} else {
					// echo "<script>alert('Something Went Wrong.')</script>";
				}
			} else {
				echo "<script>alert('Username Already Exists.')</script>";
			}
		} else {
			echo "<script>alert('Password Not Matched.')</script>";
		}
	}
		
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    font-size: 16px;
    font-family: system-ui;
    background-image: url("../images/register_bgimage.jpg");
    min-height: 700px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.form{
    width: 100%;
}
h2 {
    text-align: center;
    color: #ef6e58;
}
form {
    width: 300px;
    padding: 15px 40px 40px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #99b3ff;
    margin: 4% auto;
}
label {
    display: block;
    margin-bottom: 5px
}
label i {
    color: #999;
    font-size: 80%;
}
input, select {
    border: 1px solid #ccc;
    padding: 10px;
    display: block;
    width: 100%;
    box-sizing: border-box;
    border-radius: 2px;
    background-color: #a9bae64a;
}
.box {
    padding-bottom: 10px;
}
.form-inline {
    border: 1px solid #ccc;
    padding: 8px 10px 4px;
    border-radius: 2px;
}
.form-inline label, .form-inline input {
    display: inline-block;
    width: auto;
    padding-right: 15px;
}
.error {
    color: red;
    font-size: 90%;
}
input[type=text]{
        outline: none;
}

input[type="submit"] {
    font-size: 110%;
    font-weight: 100;
    background: #3366ff;
    border-color: #3366ff;
    box-shadow: 0 3px 0 #bd432e;
    color: #fff;
    margin-top: 10px;
    cursor: pointer;
}
input[type="submit"]:hover {
    background: #3366ff;
    border-color: #3366ff;
}

.input-1{
    background-image: url(../images/check.png);
    background-repeat: no-repeat;
    background-position: right 10px center;
    border:1px solid #01cc40;
}
.input-2{
    background-image: url(../images/cancel.png);
    background-repeat: no-repeat;
    background-position: right 10px center;
    border:1px solid red;
}
.input-3{
    border:1px solid #01cc40!important;
}
select{
    outline: none!important;
}
.input-4{
    border:1px solid red;
}
    </style>
	<title>Signup</title>
</head>
<body>
	<div>
	<form method="post">
	<h1>REGISTER</h1>
<div class="box">
<label for="username"><b>Username:</b></label>
 <input type="text" placeholder="Enter Username" name="username" value="">
</div>
 <div class="box">
<label for="password"><b>Password:</b></label>
 <input type="password" placeholder="Enter Password" name="password" value="">
</div>
 <div class="box">
 <label for="c_password"><b>Confirm_Password:</b></label>
 <input type="password" placeholder="Enter Confirm Password" name="c_password" value="">
</div>
 <div class="box">
 <label for="email"><b>Email:</b></label>
 <input type="text" placeholder="Enter Email" name="email" value="">
</div>

<div class="box">
        <label>Gender</label>
        <div class="form-inline" id="gender">
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label> 
        </div>
		
 <div class="box">
 <input type="submit" name="submit" value="Submit">
 </div>
	</form>
	</div>
</body>
</html>