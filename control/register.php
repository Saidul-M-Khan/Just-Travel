<?php

session_start();

$Error = "";
$Name = $Email = $Username = $Password = $Confirm_Password = $Gender = $DoB = "";
$day = $month = $year = 0;
$nameError = $emailError = $dobError = $usernameError = $genderError =  "";
$passError = $cpassError = "";
$ImageError = $UploadConfirmation = "";

if (isset($_POST["register"])) {
    $name_words = $_POST["name"];
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $Name = $_POST["name"];
    $Password = $_POST["pass"];
    $cpassword = $_POST['cpassword'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $DoB = strval($day) . "-" . strval($month) . "-" . strval($year);
    $target_dir = "../assets/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $filepath = "";

    // Name Validation

    // if (empty($_POST["name"])) {
    //     $nameError = "Name is required";
    // } else {
    //     if ((!preg_match("/^[a-zA-Z-'._ ]*$/", $Name))) {
    //         $nameError = "Name Must Start with a letter";
    //     } else {
    //         if ((str_word_count($name_words) < 2)) {
    //             $nameError = "Minimum Two Words Needed in Name";
    //         }
    //     }
    // }

    if (empty($_POST["name"])) {
        $nameError = "Name is required";
    } else {
        if ((str_word_count($name_words) < 2)) {
            $nameError = "Minimum Two Words Needed in Name";
        }
    }


    // Email Validation
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        $Email = validateInput($_POST["email"]);
        $Email = filter_var($Email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid Email Format... Type it correctly";
        }
    }


    // Username Validation

    // if (empty($_POST["username"])) {
    //     $usernameError = "Username is Required";
    // } else {
    //     $Username = validateInput($_POST["username"]);
    //     if (((!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $Username))) && (strlen($_POST["username"]) < 2)) {
    //         $usernameError = "Username can only contain alphanumeric characters dash and underscore only and at least 2 characters";
    //     }
    // }

    if (empty($_POST["username"])) {
        $usernameError = "Username is Required";
    } else {
        $Username = validateInput($_POST["username"]);
        if ((strlen($_POST["username"]) < 4)) {
            $usernameError = "Username can only contain at least 5 characters";
        }
    }


    // Password Validation
    if (empty($_POST["pass"])) {
        $passError = "Password is Required";
    } else {
        if (strlen(($_POST["pass"])) < 8) {
            $passError = "At least 8 character needed";
        }
        /*
        else {
            if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["pass"])) {
                $passError = "At least one special character needed";
            }
        }
        */
    }


    // Confirm Password Validation
    if (empty($_POST["cpassword"])) {
        $cpassError = "Confirm Password cannot be empty";
    } else {
        if (($_POST["pass"]) != ($_POST["cpassword"])) {
            $cpassError = "Password does not match";
        }
    }


    // Date of Birth Validation
    if ((empty($_POST["day"])) or (empty($_POST["month"])) or (empty($_POST["year"]))) {
        $dobError = "Enter all the fields";
    } else {
        if (($day >= 1 and $day <= 31) and ($month >= 1 and $month <= 12) and ($year >= 1953 and $year <= 2003)) {
            $DoB = strval($day) . "-" . strval($month) . "-" . strval($year);
        } else {
            $dobError = "Invalid Date Entered [dd - (1-31) mm - (1-12) yy - (1953-2003)]";
        }
    }


    // Gender Validation
    if (empty($_POST["gender"])) {
        $genderError = "Gender Required";
    } else {
        $Gender = validateInput($_POST["gender"]);
    }


    // File Upload Validation
    if ($_FILES['fileToUpload']['name'] != "") {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) { // Checking if the file is image or not
            $uploaded = 1;
        } else {
            $ImageError = "File is not an image.";
            $uploaded = 0;
        }

        if (file_exists($target_file)) { // Checking if the file is already uploaded or not
            $ImageError = "Sorry, file already exists.";
            $uploaded = 0;
        }

        if ($_FILES["fileToUpload"]["size"] > 40000000000) { // Checking if thee file size is too large or not
            $ImageError = "Sorry, your file is too large.";
            $uploaded = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") { // Checking if the file is jpg/jpeg/png
            $ImageError = "Sorry, only JPG, JPEG & PNG files are allowed.";
            $uploaded = 0;
        }

        if ($uploaded == 0) { // Checking If the file is not uploaded
            $ImageError = "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // If the file is uploaded and moved to targeted file directory
                $UploadConfirmation = "File has been uploaded Successfully";
                $filepath = $target_dir . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
            } else {
                $ImageError = "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        $ImageError = "No Image was selected";
    }

    $Confirmation = "";

    // File Validation
    if ($nameError == "" && $emailError == "" && $usernameError == "" && $passError == "" && $cpassError == "" && $genderError == "" && $dobError == "" && $ImageError == "") { // If there is no error then execute this statement
        if (file_exists("../model/user.txt")) {
            $myfile = fopen('../model/user.txt', 'a');
            $myuser = $Name . "|" . $Username . "|" . $Password . "|" . $Email . "|" . $Gender . "|" . $DoB . "|" . $target_file . "\r\n";
            fwrite($myfile, $myuser);
            fclose($myfile);
            header('location:./login.php');
        } else {
            $Confirmation = "File Does Not Exist";
        }
    }
}



// Input Validation
function validateInput($information) // Validating every input
{
    $information = trim($information); // Strip whitespace or other characters from the beginning and end of a string
    $information = stripslashes($information); // Unquote a quoted string
    $information = htmlspecialchars($information); // Convert special characters to HTML entities
    return $information;
}

?>

<!DOCTYPE html>
<html>
<title>Signup</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <title>Registration</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>

    <div style="margin-left: 500px;">
        <div>

            <h1>Signup</h1>
            <h5 style="color:green">Please provide correct details to proceed</h5>


        </div>
        <div>
            <fieldset style="width: 60%">
                <form method="POST" action="" enctype="multipart/form-data">
                    <label><strong>Name</strong></label><br>
                    <i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;<input type="text" id="name" name="name" value="<?php if (isset($Name)) {
                                                                                                                        echo $Name;
                                                                                                                    } ?>" placeholder="Name" size="50"><span style="color: red;">
                        <?php
                        if ($nameError != "") {
                            echo "* - " . $nameError;
                        }
                        ?></span><br><br>
                    <label><strong>Email</strong></label><br>
                    <i class="fas fa-at"></i>&nbsp;&nbsp;&nbsp;<input type="text" id="email" name="email" value="<?php if (isset($email)) {
                                                                                                                        echo $email;
                                                                                                                    } ?>" placeholder="Email" size="50"><span style="color: red;">
                        <?php
                        if ($emailError != "") {
                            echo "* - " . $emailError;
                        }
                        ?></span><br><br>
                    <label><strong>Username</strong></label><br>
                    <i class="far fa-user-circle"></i>&nbsp;&nbsp;&nbsp;<input type="text" id="username" name="username" value="<?php if (isset($username)) {
                                                                                                                                    echo $username;
                                                                                                                                } ?>" placeholder="Username" size="50"><span style="color: red;">
                        <?php
                        if ($usernameError != "") {
                            echo "* - " . $usernameError;
                        }
                        ?>
                    </span><br><br>
                    <label><strong>Password</strong></label><br>
                    <i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;<input type="text" id="pass" name="pass" value="<?php if (isset($Password)) {
                                                                                                                        echo $Password;
                                                                                                                    } ?>" placeholder="Password" size="50"><span style="color:red">
                        <?php
                        if ($passError != "") {
                            echo "* - " . $passError;
                        }
                        ?>
                    </span><br><br>
                    <label><strong>Confirm Password</strong></label><br>
                    <i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;<input type="text" id="cpassword" name="cpassword" value="<?php if (isset($cpassword)) {
                                                                                                                                echo $cpassword;
                                                                                                                            } ?>" placeholder="Confirm Password" size="50"><span style="color: red;">
                        <?php
                        if ($cpassError != "") {
                            echo "* - " . $cpassError;
                        }
                        ?>
                    </span><br><br>
                    <fieldset style="width:60%">
                        <i class="fas fa-venus-mars"></i>&nbsp;&nbsp;&nbsp;<label><strong>Gender</strong></label>
                        <input type="radio" id="gender" name="gender" value="Male"> Male
                        <input type="radio" id="gender" name="gender" value="Female"> Female
                        <input type="radio" id="gender" name="gender" value="Other"> Other &nbsp; <span style="color:red">
                            <?php
                            if ($genderError != "") {
                                echo "* - " . $genderError;
                            }
                            ?>
                        </span>
                    </fieldset>

                    <br><br>
                    <fieldset style="width:60%">
                        <i class="fas fa-baby"></i>&nbsp;&nbsp;&nbsp;<label><strong>Date of Birth</strong></label><br>
                        <input type="dob" id="day" name="day" value="<?php if (isset($day)) {
                                                                            echo $day;
                                                                        } ?>" placeholder="dd" size="5"> -
                        <input type="dob" id="month" name="month" value="<?php if (isset($month)) {
                                                                                echo $month;
                                                                            } ?>" placeholder="mm" size="5"> -
                        <input type="dob" id="year" name="year" value="<?php if (isset($year)) {
                                                                            echo $year;
                                                                        } ?>" placeholder="yy" size="5"> <span style="color: red;">
                            <?php if ($dobError != "") {
                                echo " * - ";
                                echo $dobError;
                            }
                            ?>
                        </span>
                    </fieldset>
                    <br><br>
                    <center>
                        <fieldset style="width: 50%">

                            <legend><strong><i class="fas fa-image"></i>&nbsp;&nbsp;&nbsp;Picture</strong></legend>
                            <img src="<?php if (!empty($filepath)) {
                                            echo $filepath;
                                        } else {
                                            echo "../view/images/user.png";
                                        } ?>" alt="" width="150px" height="150px"><br><br>
                            <input type="file" name="fileToUpload" id="fileToUpload"><br><br><span style="color:red">
                                <?php
                                if ($ImageError != "") {
                                    echo $ImageError;
                                }
                                ?>
                            </span>
                        </fieldset>
                    </center>
                    <br><br>
                    <center>
                        <input type="submit" value="Register" name="register">
                        <input type="reset" value="Clear" name="clear">
                    </center>


                    <br><br>
                    <?php

                    if (isset($Confirmation)) {

                        echo "<span style='color:green'><strong>" . $Confirmation . "</strong></span><br>";
                    }
                    ?>
                </form>
            </fieldset>
            <br><br>

            <div style="margin-left:370px">
                <fieldset style="width:10%">
                    <center>
                        <a href="./login.php" style="text-decoration: none; color:black"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;Login</a>
                    </center>

                </fieldset>


                <br>

                <fieldset style="width:10%">
                    <center>
                        <a href="../index.php" style="text-decoration:none; color:black"><i class="fas fa-arrow-circle-left"></i>&nbsp;Home</a>
                    </center>

                </fieldset>
            </div>




        </div>

    </div>


</body>

</html>