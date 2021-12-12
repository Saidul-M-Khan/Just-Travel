<?php 
// include_once '../model/db.php';
	session_start();

	if(isset($_POST['submit'])){

		$NID 	= $_POST['nid'];
		$Password 	= $_POST['password'];

		if($NID != ""){
			if($Password != ""){
				
  

				// $myfile = fopen('../model/user.txt', 'r');
				
				// while(!feof($myfile)){
					
				// 	$data = fgets($myfile);
				// 	$user = explode('|', $data);		
					
				// 	if($NID == trim($user[2]) && $Password == trim($user[3])){
				// 		setcookie('flag', 'true', time()+3600, '/');
				// 		header('location:../view/home.php');
        include_once '../model/register_db.php';
        $sql = "SELECT * FROM registration WHERE NID='$NID' AND Password='$Password' ";
	$result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['NID'] = $row['NID'];
    

		
		setcookie('flag', 'true', time()+3600, '/');
		header("location: home.php");
	} 
	else {
		echo "<script>alert('Woops! User Name or Password is Wrong.')</script>";
	}


					}
				}

				// echo "invalid nid/password";

	// 		}else{
	// 			echo "invalid password....";
	// 		}
	// 	}else{
	// 		echo "invalid nid....";
	// 	}
	//  }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
<style>
body, html {
  height: 100%;
  width: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("../images/bgimage.jpg");

  min-height: 700px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color:  #ccffff;
  left: 50%;
    top: 50%;
    margin-left: -10%;
    position: absolute;
    margin-top: -18%;
  
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #009999;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>

</head>
<body>

   
    <main>

        <div class="bg-img">
        <form method="post" class="container"onsubmit="return loginValidate() ">
           <h1>LOGIN</h1>

           <label for="nid"><b>NID</b></label>
            <input type="text" placeholder="Enter NID" name="nid" value="" id="user">
            
           <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" value="" id="pass">
                   
            <button type="submit" class="btn">Login</button>
            <input type="submit" name="submit" value="Submit">
            


    </main>
<script>
  function loginValidate() {

var username = document.getElementById("user").value;

var password = document.getElementById("pass").value;

if (username == null || username == "") {

    alert("Please enter  the username.");

    return false;

}

if (password == null || password == "") {

    alert("Please enter the password.");

    return false;

}

// alert('Login successful');



}
</script>

</body>
</html>




