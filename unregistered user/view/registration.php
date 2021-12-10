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
        'FileName'=>$_FILES["myUploadedFile"]["name"],
        'Tmp_name'=>$_FILES["myUploadedFile"]["tmp_name"]
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
<html>
    <title>Registration</title>
    <body>
    <header>
        <!-- Navigation Bar -->
        <div class="navbar">
    
            <nav>
                <fieldset>
    
                    <a class="logo" href="/"><img src="../images/logo.png" alt="logo" height="50px"></a>
                    
                   
                    
                    <fieldset style="width:100px; float:right">
                       
                        <a href="login.php" style="text-decoration:none"><big><i class="fas fa-sign-in-alt"></i>&nbsp;Login</big></a>
                    </fieldset>

                    <fieldset style="width:100px; float:right">
                        <a href="registration.php" style="text-decoration:none"><big><i class="fas fa-user-plus"></i>&nbsp;Sign-Up</big></a>
                    </fieldset>
                    
                </fieldset>
            </nav>
    
           
        </div>
    </header>
    <h1>Registration Form</h1>
    <h4>Please Fill it with correct informations</h4>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
    <label>Name</label><br>
    <input type="text" name="name" id="name" value="" placeholder="Full Name"><span style="color: red;"><?php
                if ($nameError != "") {
                    echo "* - " . $nameError;
                }
                ?></span><br><br>
    <label>National ID</label><br>
    <input type="text" name="nid" id="nid" value="" placeholder="NID No."><span style="color: red;"><?php
                if ($nidError!="") {
                    echo "* - " . $nidError;
                }
                ?></span><br><br>
    <label>Password</label><br>
    <input type="password" name="pass" id="pass" placeholder="Password" value=""><span style="color: red;"><?php
                if ($passError != "") {
                    echo "* - " . $passError;
                }
                ?></span>
               <br><br>
              
    <label>Confirm Password</label><br>
    <input type="password" name="c_pass" id="c_pass" value="" placeholder="Confirm Password"><span style="color: red;"><?php
                if ($cpassError != "") {
                    echo "* - " . $cpassError;
                }
                ?></span><br><br>
           
    
    <label>Email</label><br>
    <input type="text" name="email" id="email" value="" placeholder="Email"><span style="color: red;"><?php
                if ($emailError != "") {
                    echo "* - " . $emailError;
                }
                ?></span><br><br>
    <label>Gender</label>&nbsp;
    <input type="radio" id="gender" name="gender" value="Male">Male&nbsp;
    <input type="radio" id="gender" name="gender" value="Female">Female&nbsp;
    <input type="radio" id="gender" name="gender" value="Prefer not to Say">Prefer not to say&nbsp;<span style="color: red;"><?php
                if ($genderError != "") {
                    echo "* - " . $genderError;
                }
                ?></span><br><br>
                
                <tr>
                
                <td>Upload Your Image: <input type="file" name="myUploadedFile" /></td>  
      
                
              </tr><br>

                <input type="submit" name="register" value="Submit"><br>
    <?php
            if (isset($message)) {
                echo "<span style='color:green'><b>" . $message . "</b></span><br>";
            }
    ?>
    </form>
    </body>
</html>