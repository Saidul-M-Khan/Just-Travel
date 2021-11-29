<?php
session_start();
date_default_timezone_set("Asia/Dhaka");
$NID = "";
$nameError = $emailError = $dobError = $usernameError = $genderError = $nidError = "";
$passError = $cpassError = "";
$Full_Name = $Email = $Gender = $Password = $Image = "";
$times = "";
if (!isset($_SESSION["NID"])) {
    session_destroy();
    header("location:howner_login.php");
}
if (isset($_SESSION["NID"])) {
    $NID = $_SESSION["NID"];

    $data = array(
        'NID' => $_SESSION["NID"],
    );

    require_once '../control/getUserData.php';

    $h_owner_edit_profile = new getDataFromFile($data);

    $owner = $h_owner_edit_profile->checkFromFiles($data);

    $Full_Name = $owner['username'];
    $Gender = $owner['dob'];
    $Email = $owner['email'];
    $Password = $owner['password'];
}

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
    <title>Profile</title>

</head>

<body>

    <?php include './header.php'; ?>


    <main>

        <div class="profile">

            <center>
                <h1 style="color:cyan; margin-bottom:15px;">[ PROFILE ]</h1>
            </center>
            <center>
                <?php if (empty($row['photo'])) { ?>
                    <img src="./images/user.png" width="45%">
                <?php } else { ?>
                    <img src="<?php echo $row['photo']; ?>" alt="" width="45%" height="auto" style="border: 2px solid blueviolet; border-radius:50%;">
                <?php } ?>


                <br>
                <h1>
                    <?php
                    // echo $row['user_fname']; 
                    ?>
                </h1>
            </center>
            <br>
            <br>
            <p><strong><i style="color:cyan" class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Name:</strong>&nbsp;<?php echo $Full_Name ?></p>
            <!-- <p><strong><i style="color:cyan" class="far fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Username:</strong>&nbsp;<?php
                                                                                                                            // echo $row['username']; 
                                                                                                                            ?></p> -->
            <p><strong><i style="color:cyan" class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;Password:</strong>&nbsp;<?php echo $Password; ?>
            </p>
            <p><strong><i style="color:cyan" class="fas fa-at"></i>&nbsp;&nbsp;&nbsp;Email:</strong>&nbsp;<?php echo $Email; ?>
            </p>
            <p><strong><i style="color:cyan" class="fas fa-venus-mars"></i>&nbsp;&nbsp;&nbsp;Gender:</strong>&nbsp;<?php echo $Gender ?></p>
            <!-- <p><strong><i style="color:cyan" class="fas fa-birthday-cake"></i>&nbsp;&nbsp;&nbsp;Date of Birth:</strong>&nbsp;<?php
                                                                                                                                    // echo $row['dob'] 
                                                                                                                                    ?></p> -->

            <a href="edit-profile.php"> <button class="button-62" role="button">Edit Profile</button> </a>
            <button class="button-62" role="button">See Order Status</button>
            </center>
        </div>
    </main>

    <footer>
        <?php
        include './footer.php';
        ?>
    </footer>

    <script src="./js/header.js"></script>


</body>

</html>

<?php
// } else {
//     header('location: ../control/login.php');
// }
?>