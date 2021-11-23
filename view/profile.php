<?php
session_start();
if (isset($_COOKIE['flag'])) {
    require("../control/db.php");
    // $Username = $_SESSION['username'];
    // $query = "SELECT * FROM users where user_username='Saidul_Khan'";
    $query = "SELECT * FROM users where user_username='Saidul_Khan'";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_assoc($query_run);
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
        <title>Profile</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }

            .profile {
                margin: 0 auto;
                padding: 30px;
                width: 35%;
                border: 2px solid blueviolet;
                border-radius: 10px;
                background: #000000;
                background: -webkit-linear-gradient(to left, #434343, #000000);
                background: linear-gradient(to left, #434343, #000000);
                color: white;
                margin-top: 100px;
                height: auto;
                transition: all 0.3s ease-out;
                line-height: 2;
                font-size: 105%;

            }

            hr {
                border: 1px solid blueviolet;
            }

            p,
            strong,
            .far,
            h1 {
                color: white;
            }

            .button-62 {
                background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
                border: 0;
                border-radius: 12px;
                color: #FFFFFF;
                cursor: pointer;
                display: inline-block;
                font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
                font-size: 16px;
                font-weight: 500;
                line-height: 2.5;
                outline: transparent;
                padding: 0 1rem;
                text-align: center;
                text-decoration: none;
                transition: box-shadow .2s ease-in-out;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                white-space: nowrap;
                margin: 25px 10px 15px 10px;
            }

            .button-62:not([disabled]):focus {
                box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
            }

            .button-62:not([disabled]):hover {
                box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
            }
        </style>
    </head>

    <body>

        <?php include './header.php'; ?>


        <main>

            <div class="profile">

                <center>
                    <h1 style="color:cyan; margin-bottom:15px;">[ PROFILE ]</h1>
                </center>
                <center>
                    <img src="./images/users-profile-picture/user-1.png" alt="" width="45%" height="auto" style="border: 2px solid blueviolet; border-radius:50%;">
                    <br>
                    <h1><?php echo $row['user_fname']; ?></h1>
                </center>
                <br>
                <br>
                <p><strong><i class="far fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Username:</strong>&nbsp;<?php echo $row['user_username']; ?></p>
                <!-- <br> -->
                <p><strong><i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;Password:</strong>&nbsp;<?php echo $row['user_password']; ?>
                </p>
                <!-- <br> -->
                <p><strong><i class="fas fa-at"></i>&nbsp;&nbsp;&nbsp;Email:</strong>&nbsp;<?php echo $row['user_email']; ?>
                </p>
                <!-- <br> -->
                <p><strong><i class="fas fa-venus-mars"></i>&nbsp;&nbsp;&nbsp;Gender:</strong>&nbsp;<?php echo $row['user_gender']; ?>
                </p>
                <!-- <br> -->
                <p><strong><i class="fas fa-baby"></i>&nbsp;&nbsp;&nbsp;Date of
                        Birth:</strong>&nbsp;<?php echo $row['user_dob']; ?></p>
                <!-- <br> -->
                <!-- <p><strong><i class="fas fa-house-user"></i>&nbsp;&nbsp;&nbsp;Address:</strong>&nbsp;383/1 Free School Street, Dhanmondi, Dhaka-1205</p> -->
                <!-- <br> -->
                <center>
                    <!-- <fieldset style="width:120px;">
                        <a href="edit-profile.php" style="text-decoration:none; color:white"><i class="far fa-edit"></i>&nbsp;Edit Profile</a>
                    </fieldset> -->
                    <button class="button-62" role="button">Edit Profile</button>
                    <!-- <fieldset style="width:35%; margin-top: 10px;">
                        <a href="order-status.php" style="text-decoration:none; color:white"><i class="fas fa-shopping-cart"></i>&nbsp;See Order Status</a>
                    </fieldset> -->
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
} else {
    header('location: ../control/login.php');
}
?>