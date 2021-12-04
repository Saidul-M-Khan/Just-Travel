<?php
include '../model/db.php';

session_start();
error_reporting(0);

// Signup
if (isset($_POST['signup-submit'])) {
	$fname = $_POST['fname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$role = $_POST['role'];
	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($connection, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (fname, username, email, password, role) VALUES ('$fname', '$username', '$email', '$password','$role')";
			$result = mysqli_query($connection, $sql);
			if ($result) {
				$fname = "";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				$_POST['role'] = "";
				header("Location: user-login.php");
			} else {
				echo "<script>alert('Something Went Wrong.')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

// Login
if (isset($_POST['login-submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
	$result = mysqli_query($connection, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];

		if ($row['role'] == "admin") {
			header("Location: ../view/admin/admin.php");
		} else if ($row['role'] == "user") {
			header("Location: ../view/bus.php");
		} else if ($row['role'] == "merchant") {
			header("Location: ../view/merchant/merchant.php");
		}
		setcookie('flag', 'true', time() + 3600, '/');
	} else {
		echo "<script>alert('Woops! User Name or Password is Wrong.')</script>";
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/login-registration.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<title></title>
</head>

<body>
	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Register</label>
			<div class="login-form">
				<!-- Login -->
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="login">
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Username</label>
							<i class="fas fa-user input-icons"></i>
							<input type="text" id="user" class="input" placeholder="Enter Your Username" name="username" value="<?php echo $username; ?>" onkeyup="validateName()">
							<!-- <br> -->
							<!-- <small id="error"></small> -->
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<i class="fas fa-lock input-icons"></i>
							<input type="password" placeholder="Enter Your Password" id="pass" class="input" data-type="password" name="password" value="<?php echo $_POST['password']; ?>">
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> KEEP ME SIGNED IN</label>
						</div>
						<div class="group">
							<input type="submit" name="login-submit" class="button btn" value="Login">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="./forget-password.html">Forgot Password?</a>
						</div>
					</div>
				</form>

				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="signup">
					<!-- Registration -->
					<div class="sign-up-htm">
						<div class="group">
							<label for="user" class="label">Full Name</label>
							<i class="far fa-user-circle input-icons"></i><input id="user" placeholder="Enter Your Full Name" type="text" class="input" name="fname" value="<?php echo $fname; ?>">
						</div>
						<div class="group">
							<label for="user" class="label">Username</label>
							<i class="fas fa-user input-icons"></i><input id="user" placeholder="Enter a Username" type="text" class="input" name="username" value="<?php echo $username; ?>">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<i class="fas fa-lock input-icons"></i><input id="pass" placeholder="Enter The Password" type="password" class="input" data-type="password" name="password" value="<?php echo $_POST['password']; ?>">
						</div>
						<div class="group">
							<label for="pass" class="label">Confirm Password</label>
							<i class="fas fa-lock input-icons"></i><input id="pass" placeholder="Enter The Password Again" type="password" class="input" data-type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>">
						</div>
						<div class="group">
							<label for="email" class="label">Email Address</label>
							<i class="fas fa-at input-icons"></i><input id="email" placeholder="Enter Your Email" type="text" class="input" name="email" value="<?php echo $email; ?>">
						</div>

						<div class="group">
							<label for="role" class="label" name="user-role">User Role</label>
							<input type="radio" id="role" name="role" value="user"> User &nbsp; | &nbsp;
							<!-- <input type="radio" id="role" name="role" value="admin"> Admin &nbsp; | &nbsp; -->
							<input type="radio" id="role" name="role" value="merchant"> Merchant &nbsp;
						</div>

						<!-- <div class="group">
							<label for="picture" class="label">Picture</label>
							<input type="file" name="fileToUpload" id="fileToUpload">
						</div> -->
						<br><br>
						<div class="group">
							<input type="submit" name="signup-submit" class="button btn" value="Register">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-1">Already Member?</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>