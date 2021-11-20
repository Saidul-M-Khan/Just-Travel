<?php 

include '../model/config.php';

session_start();
error_reporting(0);

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];

		if($row['role'] == "admin"){
			header("Location: ../view/admin/adminhome.php");
		}
		else if($row['role'] == "user"){
			header("Location: ../view/reguser/reguserhome.php");
		}
		else if($row['role'] == "merchant"){
			header("Location: ../view/merchant/merhome.php");
		}
		setcookie('flag', 'true', time()+3600, '/');
		
	} 
	else {
		echo "<script>alert('Woops! User Name or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../view/css/style.css">

	<title>Login </title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<!-- User name starts-->
			<div class="input-group">
				<input type="text" placeholder="User Name" name="username" value="<?php echo $username; ?>" onkeyup="validateName()"> <br>
				<h4 id="error"></h4>
			</div>
			<!-- JS validation -->
			<script>

        function WordCount(str) {
            return str.split(' ')
                .filter(function(n) {
                    return n != ''
                })
                .length;
        }

        function validateName() {
            let nameValue = document.getElementById('username').value;
            var Error = document.getElementById('error');
            var str_word_count = WordCount(nameValue);
            if (nameValue == "") {
                Error.innerHTML = "<strong style='color: red'>Name is required</strong>";
            } else {
                let Name = validateInput(nameValue);
                if (!Name.match(/^[a-zA-Z-'._ ]*$/)) {
                    Error.innerHTML = "<strong style='color: red'>Name Must Start with a letter</strong>";
                } else {
                    Name = validateInput(nameValue);
                    if (str_word_count < 2) {
                        Error.innerHTML = "<strong style='color: red'>Minimum Two Words Needed</strong>";
                    } else {
                        Error.innerText = "";

                    }
                }
            }
        }
        String.prototype.stripSlashes = function() {
            return this.replace(/\\(.)/mg, "$1");
        }
        function escapeHtml(text) {
            var map = {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            };
            return text.replace(/[&<>"']/g, function(m) {
                return map[m];
            });
        }
        function validateInput(information) {
            var information = information.trim();
            var information = information.stripSlashes();
            var information = escapeHtml(information);
            return information;
        }
    </script>
			<!-- JS validation ends-->
<!-- User name end-->
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" >
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>