<?php
$Name = $Email = $Password = $Confirm_Password = $Gender = $NID = "";
$day = $month = $year = 0;
$nameError = $emailError = $dobError = $usernameError = $genderError = $nidError = "";
$passError = $cpassError = "";
$ImageError = $UploadConfirmation = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST["register"])){
    $Name = test_input($_POST["name"]);
    $Email = test_input($_POST["email"]);
    $NID =  test_input($_POST["nid"]);
    $Password = $_POST["pass"];
    $Confirm_Password = $_POST["c_pass"];
    if(!empty($_POST["gender"])){
        $Gender=$_POST["gender"];
    }
    else{
        $Gender="";
    }

    $data= array(
        'Name'=> $Name,
        'Email'=>$Email,
        'NID'=>$NID,
        'Password'=>$Password,
        'Confirm_Password'=>$Confirm_Password,
        'Gender'=>$Gender,
       
    );


    require_once "../control/insert_data.php";
    $registration= new adduser($data);

    $registration->addData($data);

    $error=$registration->get_error();
    $message=$registration->get_message();

    $nameError=$error["nameErr"];
    $emailError=$error["emailErr"];
    $nidError=$error["nidErr"];
    $passError=$error["passwordErr"];
    $cpassError=$error["confirm_passwordErr"];
    $genderErr=$error["genderErr"];

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
	<form method="post" onsubmit="return form_validate()">
	<h1>REGISTER</h1>
    <h4>Please Fill it with correct information</h4>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data"onsubmit="return form_validate()">
<div class="box">
<label for="name"><b>Name:</b></label>
<input type="text" name="name" id="name" value="" placeholder="Full Name"><span id="nameError" style="color: red;"><?php
                if ($nameError != "") {
                    echo "* - " . $nameError;
                }
                ?></span><br><br>
                </div>
                <label for="nid"><b>National ID</b></label><br>
    <input type="text" name="nid" id="nid" value="" placeholder="NID No."><span id="nidError" style="color: red;"><?php
                if ($nidError!="") {
                    echo "* - " . $nidError;
                }
                ?></span><br><br>
 <div class="box">
<label for="password"><b>Password:</b></label>
<input type="password" name="pass" id="pass" placeholder="Password" value=""><span id="passError" style="color: red;"><?php
                if ($passError != "") {
                    echo "* - " . $passError;
                }
                ?></span>
               <br><br>
</div>

 <div class="box">
 <label for="c_password"><b>Confirm_Password:</b></label>
 <input type="password" name="c_pass" id="c_pass" value="" placeholder="Confirm Password"><span id="cpassError" style="color: red;"><?php
                if ($cpassError != "") {
                    echo "* - " . $cpassError;
                }
                ?></span><br><br>
</div>
 <div class="box">
 <label for="email"><b>Email:</b></label>
 <input type="text" name="email" id="email" value="" placeholder="Email"><span id="emailError" style="color: red;"><?php
                if ($emailError != "") {
                    echo "* - " . $emailError;
                }
                ?></span><br><br>
</div>

<div class="box">
        <label>Gender</label>
        <div class="form-inline" id="gender">
        <input type="radio" id="m" name="gender" value="Male">Male&nbsp;
    <input type="radio" id="f" name="gender" value="Female">Female&nbsp;
    <input type="radio" id="p" name="gender" value="Prefer not to Say">Prefer not to say&nbsp;<span id="genderError" style="color: red;"><?php
                if ($genderError != "") {
                    echo "* - " . $genderError;
                }
                ?></span><br><br>
        </div>
		
 <div class="box">
 <input type="submit" name="register" value="Submit">
 <?php
            if (isset($message)) {
                echo "<span style='color:green'><b>" . $message . "</b></span><br>";
            }
    ?>
    <div class="box">
    <a href="login.php" class="box">Log In</a>
    </form>
 </div>
	</form>
	</div>
    <script>
        function form_validate() {
  var x = document.getElementById("name").value;
  x = x.replace(/(^\s*)|(\s*$)/gi, "");
  x = x.replace(/[ ]{2,}/gi, " ");
  x = x.replace(/\n /, "\n");
  var z = x.split(" ").length;
  var nameErr = "";
  var passErr = "";
  var cpassErr = "";
  var nidErr = "";
  var genderErr = "";
  var emailErr = "";
  if (x == "") {
    document.getElementById("nameError").innerHTML = "Name cannot be Empty";
    nameErr = "Error";
  } else {
    if (/[A-Za-z]/.test(x[0]) == false) {
      document.getElementById("nameError").innerHTML =
        "Name must start with a letter";
      nameErr = "Error";
    } else if (z < 2) {
      document.getElementById("nameError").innerHTML =
        "Name must contain at least two words";
      nameErr = "Error";
    } else {
      nameErr = "";
      document.getElementById("nameError").innerHTML = "";
    }
  }
  var y = document.getElementById("nid").value;
  if (y == "") {
    document.getElementById("nidError").innerHTML = "NID Field Cannot Be Empty";
    nidErr = "Error";
  } else {
    if (isNaN(y) == true) {
      document.getElementById("nidError").innerHTML = "NID can be numbers only";
      nidErr = "Error";
    } else if (y.length != 10) {
      document.getElementById("nidError").innerHTML =
        "NID can consist of 10 digits only";
      nidErr = "Error";
    } 
    else {
      nidErr = "";
      document.getElementById("nidError").innerHTML = "";
    }
  }
  var pass = document.getElementById("pass").value;
  if (pass == "") {
    document.getElementById("passError").innerHTML =
      "Password Field Cannot be Empty";
    passErr = "Error";
  } else {
    if (/[a-z]+/.test(pass) == false) {
      document.getElementById("passError").innerHTML =
        "Your Password should contain at least one small letter";
      passErr = "Error";
    } else if (/[\'^£$%&*()}{@#~?><>,|=_+¬-]/.test(pass) == false) {
      document.getElementById("passError").innerHTML =
        "Your Password should contain at least one special character";
      passErr = "Error";
    } else if (/[0-9]+/.test(pass) == false) {
      document.getElementById("passError").innerHTML =
        "Your Password should contain at least one number";
      passErr = "Error";
    } else if (pass.length < 8) {
      document.getElementById("passError").innerHTML =
        "Your Password should contain at least 8 characters";
      passErr = "Error";
    } else {
      passErr = "";
      document.getElementById("passError").innerHTML = "";
    }
  }
  var c_pass = document.getElementById("c_pass").value;
  if (c_pass == "") {
    document.getElementById("cpassError").innerHTML =
      "Confirm Password Field Cannot be Empty";
    cpassErr = "Error";
  } else {
    if (c_pass != pass) {
      document.getElementById("cpassError").innerHTML =
        "Your Passwords does not match";
      cpassErr = "Error";
    } else {
      cpassErr = "";
      document.getElementById("cpassError").innerHTML = "";
    }
  }
  if (
    document.getElementById("m").checked == false &&
    document.getElementById("f").checked == false &&
    document.getElementById("p").checked == false
  ) {
    document.getElementById("genderError").innerHTML =
      "Gender Field cannot be empty";
    genderErr = "Error";
  } else {
    genderErr = "";
    document.getElementById("genderError").innerHTML = "";
  }

  mail = document.getElementById("email").value;
  var validRegex =
    /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/;

  if (mail == "") {
    document.getElementById("emailError").innerHTML =
      "Email Field cannot be empty";
    emailErr = "Error";
  } else {
    if (!document.getElementById("email").value.match(validRegex)) {
      document.getElementById("emailError").innerHTML =
        "Please enter a valid e-mail address";
      emailErr = "Error";
    }else{
emailErr = "";
document.getElementById("emailError").innerHTML =
        "";
}
  }
  if (
    nameErr != "" ||
    nidErr != "" ||
    passErr != "" ||
    cpassErr != "" ||
    genderErr != "" ||
    emailErr != ""
  ) {
    return false;
  } else if (
    nameErr == "" &&
    nidErr == "" &&
    passErr == "" &&
    cpassErr == "" &&
    genderErr == "" &&
    emailErr == ""
  ) {
    return true;
  }
}
    </script>
</body>
</html>