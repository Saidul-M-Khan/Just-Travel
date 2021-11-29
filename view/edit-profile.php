<?php
session_start();
require_once('../model/model.php');
$id = $_REQUEST['id'];
$user = getUserById($id);
if (isset($_COOKIE['flag'])) {
    require("../model/db.php");
    // $Username = $_SESSION['username'];
    // $query = "SELECT * FROM users where user_username='Saidul_Khan'";
    // $query = "SELECT * FROM users where username='Saidul_Khan'";
    // $query_run = mysqli_query($connection, $query);

    // check if profile exists
    // if (mysqli_num_rows($query_run) > 0) {
    //     $row = mysqli_fetch_assoc($query_run);
    // }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="./styles/header.css">
        <link rel="stylesheet" href="./styles/banner.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/text-animation.css">
        <link rel="stylesheet" href="./styles/profile.css">
        <title>Edit Profile</title>

    </head>

    <body>
        <header>
            <?php include './header.php'; ?>
        </header>

        <main>
            <form method="post" action="../control/updateUserInfo.php">
                <div class="profile">

                    <center>
                        <h1 style="color:cyan; margin-bottom:15px;">[ Edit PROFILE ]</h1>
                    </center>
                    <center>
                        <?php if (empty($row['photo'])) { ?>
                            <img src="./images/user.png" width="45%">
                        <?php } else { ?>
                            <img src="<?php echo $row['photo']; ?>" alt="" width="45%" height="auto" style="border: 2px solid blueviolet; border-radius:50%;">
                        <?php } ?>
                        <br>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <!-- <br><br><span style="color:red"> -->
                        <?php
                        // if ($ImageError != "") {
                        //     echo $ImageError;
                        // }

                        ?>
                        </span>
                        <!-- <input type="button" value="Upload Profile Picture"> -->
                        <br>
                        <h1>
                            <?php
                            // echo $row['user_fname']; 
                            ?>
                        </h1>
                    </center>
                    <br>

                    <p><strong><i style="color:cyan" class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Name:</strong>&nbsp;<input type="text" name="fname" id="fname" onkeyup="validateName(document.getElementById('fname').value)" value="<?= $user['fname'] ?>">
                    </p><span id="nameOutput"></span>
                    <!-- <br> -->
                    <p><strong><i style="color:cyan" class="far fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Username:</strong>&nbsp;<input type="text" name="username" id="user" onkeyup="validateUsername(document.getElementById('user').value)" value="<?= $user['username'] ?>"></p><span id="usernameOutput"></span>
                    <!-- <br> -->
                    <p><strong><i style="color:cyan" class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;Password:</strong>&nbsp;<input type="text" name="password" id="pass" onkeyup="validatePassword(document.getElementById('pass').value)" value="<?= $user['password'] ?>">
                    <p id="passwordOutput"></p>
                    </p>
                    <!-- <br> -->
                    <p><strong><i style="color:cyan" class="fas fa-at"></i>&nbsp;&nbsp;&nbsp;Email:</strong>&nbsp;<input type="email" name="email" id="email" onkeyup="CheckEmail(document.getElementById('email').value)" value="<?= $user['email'] ?>">
                    <p id="emailOutput"></p>
                    </p>

                    <p><strong><i style="color:cyan" class="fas fa-venus-mars"></i>&nbsp;&nbsp;&nbsp;Gender:</strong>&nbsp;
                        <select name="gender" id="gender">
                            <option value="none" selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </p>
                    <p><strong><i style="color:cyan" class="fas fa-birthday-cake"></i>&nbsp;&nbsp;&nbsp;Date of Birth:</strong>&nbsp;<input type="date" name="dob" id="dob" value="<?= $user['dob'] ?>">
                    </p>
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <!-- <br> -->
                    <!-- <p><strong><i class="fas fa-venus-mars"></i>&nbsp;&nbsp;&nbsp;Gender:</strong>&nbsp;<?php
                                                                                                                // echo $row['user_gender']; 
                                                                                                                ?>
    </p> -->
                    <!-- <br> -->
                    <!-- <p><strong><i class="fas fa-baby"></i>&nbsp;&nbsp;&nbsp;Date of
            Birth:</strong>&nbsp;<?php
                                    // echo $row['user_dob']; 
                                    ?></p> -->
                    <!-- <br> -->
                    <!-- <p><strong><i class="fas fa-house-user"></i>&nbsp;&nbsp;&nbsp;Address:</strong>&nbsp;383/1 Free School Street, Dhanmondi, Dhaka-1205</p> -->
                    <!-- <br> -->
                    <center>
                        <!-- <fieldset style="width:120px;">
            <a href="edit-profile.php" style="text-decoration:none; color:white"><i class="far fa-edit"></i>&nbsp;Edit Profile</a>
        </fieldset> -->
                        <button class="button-62" id="profileEditButton" role="button">Submit</button>
                        <!-- <fieldset style="width:35%; margin-top: 10px;">
            <a href="order-status.php" style="text-decoration:none; color:white"><i class="fas fa-shopping-cart"></i>&nbsp;See Order Status</a>
        </fieldset> -->
                        <!-- <button class="button-62" role="button">See Order Status</button> -->
                    </center>
                </div>
            </form>
        </main>






        <footer>
            <?php
            include './footer.php';
            ?>
        </footer>

        <script src="./js/header.js"></script>
        <script src="./js/validate.js"></script>


    </body>

    </html>

<?php
} else {
    header('location: ../control/login.php');
}
?>