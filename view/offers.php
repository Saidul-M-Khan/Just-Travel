<?php
session_start();
if (isset($_COOKIE['flag'])) {
?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="../view/styles/header.css">
        <link rel="stylesheet" href="../view/styles/banner.css">
        <link rel="stylesheet" href="../view/styles/footer.css">
        <link rel="stylesheet" href="./styles/text-animation.css">
        <title>Offers</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }

            .offer {
                width: 90%;
                height: auto;
                border-radius: 10px;
                padding: 25px;
                margin: 100px;
                border: 2px solid black;
                box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.5);
                background: #0575E6;
                background: -webkit-linear-gradient(to left, #021B79, #0575E6);
                background: linear-gradient(to left, #021B79, #0575E6);
            }

            .offer:hover {
                box-shadow: none;
            }

            td {
                padding: 10px;
            }

            ul>h2,
            p,
            strong {
                color: white;
            }
        </style>
    </head>

    <body>

        <header>
            <?php include("./header.php") ?>

            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Find Best Offers With Just Travel</h1>
                    <h2 class="">No. 1 online Ticketing Network</h2>
                </div>
            </div>
        </header>

        <main>
            <center>
                <h1>OFFERS</h1>
            </center>
            <div class="offers">
                <?php
                require("../model/db.php");

                $query = "SELECT * FROM offers";
                $query_run = mysqli_query($connection, $query);
                $check_offer = mysqli_num_rows($query_run) > 0;

                if ($check_offer) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                        <div class="offer">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <ul>
                                                <h2><?php echo $row['offer_title']; ?></h2>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <p><strong><?php echo $row['offer_summary']; ?></strong></p>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <p><?php echo $row['offer_details']; ?></p>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                <p><?php echo $row['offer_rules']; ?></p>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                <?php


                    }
                } else {
                    echo "No offer found";
                }

                ?>
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