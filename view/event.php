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
        <title>Events</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }

            .cards {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-auto-rows: auto;
                grid-gap: 2rem;
                margin: 100px;
            }

            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                transition: 0.3s;
                width: 100%;
                border-radius: 5px;
            }

            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            }

            img {
                border-radius: 5px 5px 0 0;
            }

            .card-container {
                padding: 2px 16px;
            }

            .button-33 {
                background-color: #c2fbd7;
                border-radius: 100px;
                box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
                color: green;
                cursor: pointer;
                display: inline-block;
                font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
                padding: 7px 20px;
                text-align: center;
                text-decoration: none;
                transition: all 250ms;
                border: 0;
                font-size: 16px;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
            }

            .button-33:hover {
                box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
                transform: scale(1.05) rotate(-1deg);
            }
        </style>
    </head>

    <body>

        <header>
            <?php include("./header.php") ?>

            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Most Reliable Event Solution</h1>
                    <h2 class="">No. 1 online Ticketing Network</h2>
                </div>
            </div>
        </header>

        <main>
            <center>
                <h1>EVENTS</h1>
            </center>
            <div class="cards">
                <?php
                require("../model/db.php");

                $query = "SELECT * FROM event_ticket";
                $query_run = mysqli_query($connection, $query);
                $check_event = mysqli_num_rows($query_run) > 0;

                if ($check_event) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>

                        <div class="card">
                            <img src="<?php echo $row['event_image']; ?>" alt="" style="width:100%">
                            <div class="card-container">
                                <h1><?php echo $row['event_name']; ?></h1>
                                <div>
                                    <p><i class="far fa-calendar-alt fa-1x"></i>&nbsp;<?php echo $row['event_start_date']; ?> - <?php echo $row['event_end_date']; ?></p>
                                </div>
                                <div>
                                    <p><i class="fas fa-map-marker-alt" style="color:black;"></i>&nbsp;<?php echo $row['event_location']; ?></p>
                                </div>
                                <div>
                                    <p><?php echo $row['event_details']; ?></p>
                                </div>
                                <div>
                                    <h2>Price: <span style="color:red;">৳<?php echo $row['event_ticket_price']; ?></span></h2>
                                </div>
                                <div style="margin: 25px 10px 25px 10px;">
                                    <button class="button-33" role="button">SEE DETAILS</button>
                                </div>
                            </div>
                        </div>
                <?php


                    }
                } else {
                    echo "No event found";
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