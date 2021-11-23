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
        <link rel="stylesheet" href="./styles/header.css">
        <link rel="stylesheet" href="./styles/banner.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/text-animation.css">
        <title>Hotel</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }

            @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bree+Serif&family=EB+Garamond:ital,wght@0,500;1,800&display=swap');

            .cardContainer {
                box-shadow: 0 15px 30px 1px grey;
                background: rgba(255, 255, 255, 0.90);
                text-align: center;
                border-radius: 5px;
                overflow: hidden;
                margin: 5em auto;
                height: 350px;
                width: 700px;
            }

            .product-details {
                position: relative;
                text-align: left;
                overflow: hidden;
                padding: 30px;
                height: 100%;
                float: left;
                width: 40%;
            }

            .cardContainer .product-details h1 {
                font-family: 'Bebas Neue', cursive;
                display: inline-block;
                position: relative;
                font-size: 30px;
                color: #344055;
                margin: 0;
            }

            .cardContainer .product-details h1:before {
                position: absolute;
                content: '';
                right: 0%;
                top: 0%;
                transform: translate(25px, -15px);
                font-family: 'Bree Serif', serif;
                display: inline-block;
                background: #ffe6e6;
                border-radius: 5px;
                font-size: 14px;
                padding: 5px;
                color: white;
                margin: 0;
                animation: chan-sh 6s ease infinite;
            }

            .hint-star {
                display: inline-block;
                margin-left: 0.5em;
                color: gold;
                width: 50%;
            }


            .cardContainer .product-details>p {
                font-family: 'EB Garamond', serif;
                text-align: center;
                font-size: 18px;
                color: #7d7d7d;
            }

            .control {
                position: absolute;
                bottom: 20%;
                left: 22.8%;
            }

            .btn {
                transform: translateY(0px);
                transition: 0.3s linear;
                background: #809fff;
                border-radius: 5px;
                position: relative;
                overflow: hidden;
                cursor: pointer;
                outline: none;
                border: none;
                color: #eee;
                padding: 0;
                margin: 0;
            }

            .btn:hover {
                transform: translateY(-6px);
                background: #1a66ff;
            }

            .btn span {
                font-family: 'Farsan', cursive;
                transition: transform 0.3s;
                display: inline-block;
                padding: 10px 20px;
                font-size: 1.2em;
                margin: 0;
            }

            .btn .price,
            .shopping-cart {
                background: #333;
                border: 0;
                margin: 0;
            }

            .btn .price {
                transform: translateX(-10%);
                padding-right: 15px;
            }

            .btn .shopping-cart {
                transform: translateX(-100%);
                position: absolute;
                background: #333;
                z-index: 1;
                left: 0;
                top: 0;
            }

            .btn .buy {
                z-index: 3;
                font-weight: bolder;
            }

            .btn:hover .price {
                transform: translateX(-110%);
            }

            .btn:hover .shopping-cart {
                transform: translateX(0%);
            }

            .product-image {
                transition: all 0.3s ease-out;
                display: inline-block;
                position: relative;
                overflow: hidden;
                height: 100%;
                float: right;
                width: 45%;
                display: inline-block;
            }

            .cardContainer img {
                width: 100%;
                height: 100%;
            }

            .info {
                background: rgba(27, 26, 26, 0.9);
                font-family: 'Bree Serif', serif;
                transition: all 0.3s ease-out;
                transform: translateX(-100%);
                position: absolute;
                line-height: 1.8;
                text-align: left;
                font-size: 105%;
                cursor: no-drop;
                color: #FFF;
                height: 100%;
                width: 100%;
                left: 0;
                top: 0;
            }

            .info h2 {
                text-align: center
            }

            .product-image:hover .info {
                transform: translateX(0);
            }

            .info ul li {
                transition: 0.3s ease;
            }

            .info ul li:hover {
                transform: translateX(50px) scale(1.3);
            }

            .product-image:hover img {
                transition: all 0.3s ease-out;
            }

            .product-image:hover img {
                transform: scale(1.2, 1.2);
            }
        </style>
    </head>

    <body>

        <header>
            <?php include("./header.php") ?>

            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Most Reliable Hotel Service Solution</h1>
                    <h2 class="">No. 1 online Ticketing Network</h2>
                </div>
            </div>
        </header>


        <main>
            <center>
                <h1>HOTELS</h1>
            </center>


            <?php
            require("../control/db.php");

            $query = "SELECT * FROM hotel";
            $query_run = mysqli_query($connection, $query);
            $check_hotel = mysqli_num_rows($query_run) > 0;

            if ($check_hotel) {
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>


                    <div class="cardContainer">
                        <div class="product-details">

                            <h1>
                                <?php echo $row['hotel_name']; ?>
                            </h1>

                            <span class="hint-star star">
                                <i class="fa fa-star" aria-hidden="true" style="color:orange"></i>
                                <i class="fa fa-star" aria-hidden="true" style="color:orange"></i>
                                <i class="fa fa-star" aria-hidden="true" style="color:orange"></i>
                                <i class="fa fa-star" aria-hidden="true" style="color:orange"></i>
                                <i class="fa fa-star" aria-hidden="true" style="color:orange"></i>
                            </span>

                            <p style="margin-top: 25px;" class="information"><i class="fas fa-map-marked-alt"></i><strong>&nbsp;&nbsp;&nbsp;Location:
                                </strong>
                                <?php echo $row['hotel_location']; ?>
                            </p>
                            <br>


                            <div class="control">
                                <button class="btn">
                                    <span class="price text" style="color:azure">৳<?php echo $row['discounted_booking_price']; ?></span>
                                    <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true" style="color:azure"></i></span>
                                    <span class="buy text" style="color:azure">Book Now</span>
                                </button>
                            </div>

                        </div>


                        <div class="product-image">

                            <img src="<?php echo $row['hotel_image']; ?>" alt="">

                            <div class="info">
                                <h2 class="text" style="color:azure">Description</h2>
                                <ul style="margin-left: 15px;">
                                    <li><strong style="color:azure" class="text"><i style="color:azure" class="fas fa-map-marked-alt"></i>&nbsp;&nbsp;&nbsp;Status : 4 Star</strong></li>
                                    <li><strong style="color:azure" class="text"><i style="color:azure" class="fas fa-coffee"></i>&nbsp;&nbsp;&nbsp;Free Breakfast</strong></li>
                                    <li><strong style="color:azure" class="text"><i style="color:azure" class="fas fa-wifi"></i>&nbsp;&nbsp;&nbsp;Free Wifi</strong></li>
                                    <li><strong style="color:azure" class="text"><i style="color:azure" class="fas fa-utensils"></i>&nbsp;&nbsp;&nbsp;Restaurant</strong></li>
                                    <li><strong style="color:azure" class="text"><i style="color:azure" class="fas fa-dumbbell"></i>&nbsp;&nbsp;&nbsp;Gym</strong></li>
                                    <li><strong style="color:azure" class="text"><i style="color:azure" class="fas fa-umbrella-beach"></i>&nbsp;&nbsp;&nbsp;Beach access</strong></li>
                                </ul>
                            </div>

                        </div>

                    </div>
            <?php


                }
            } else {
                echo "No hotel found";
            }

            ?>

        </main>

        <footer>
            <?php
            include("./footer.php");
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