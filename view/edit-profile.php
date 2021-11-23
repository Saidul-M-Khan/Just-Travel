<?php
session_start();
if (isset($_COOKIE['flag'])) {
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
        <title>Edit Profile</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

    <body>

        <?php include 'header.php'; ?>

        <main>
            <center>
                <h1>EDIT PROFILE</h1>
            </center>
            <fieldset style="margin: 0 auto; margin-top: 25px; width: 35%;">
                <center>
                    <img src="./images/users-profile-picture/user-1.png" alt="" width="50%" height="auto">
                    <br>
                    <button>Change Profile Picture</button>
                    <br>
                    <p><strong>Name: </strong>&nbsp;<input type="text" placeholder="Enter your name"></p>
                </center>
                <br>
                <hr>
                <p><strong>Username:</strong>&nbsp;<input type="text" placeholder="Enter your Username"></p>
                <hr>
                <p><strong>Password:</strong>&nbsp;<input type="password" placeholder="Enter your Password"></p>
                <hr>
                <p><strong>Confirm Password:</strong>&nbsp;<input type="password" placeholder="Enter your Password again"></p>
                <hr>
                <p><strong>Email:</strong>&nbsp;<input type="email" placeholder="Enter your email address"></p>
                <hr>
                <p>
                    <strong>Gender:</strong>&nbsp;
                    <select name="" id="">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </p>
                <hr>
                <p><strong>Phone Number:</strong>&nbsp;<input type="text" placeholder="Enter your Phone Number"></p>
                <hr>
                <p><strong>Address:</strong>&nbsp;
                    <textarea name="" id="" cols="30" rows="5" placeholder="Enter your address"></textarea>
                </p>
                <hr>
                <center>
                    <fieldset style="width:120px;">
                        <a href="profile.php" style="text-decoration:none; color:black"><i class="fas fa-check-circle"></i>&nbsp;Submit</a>
                    </fieldset>
                    <fieldset style="width:10%; margin-top:10px;">
                        <a href="profile.php" style="text-decoration:none; color:black"><i class="fas fa-arrow-circle-left"></i>&nbsp;Back</a>
                    </fieldset>
                </center>



            </fieldset>
        </main>

        <?php include 'footer.php'; ?>

    </body>

    </html>
<?php
} else {
    header('location: ../control/login.php');
}
?>