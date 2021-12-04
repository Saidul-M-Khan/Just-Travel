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
        <link rel="stylesheet" href="./styles/text-animation.css">
        <link rel="stylesheet" href="./styles/search.css">
        <link rel="stylesheet" href="./styles/ticket.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>

        <title>Buy Launch Ticket</title>
    </head>

    <body>

        <header>
            <?php include './header.php'; ?>
            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Most Reliable Launch Ticket Solution</h1>
                    <h2>No. 1 online Ticketing Network</h2>
                </div>
            </div>
        </header>

        <main>
            <div class="search">
                <center>
                    <h2 class="search-title">SEARCH Launch</h2>
                </center>
                <center>
                    <div class="search-bar">
                        <form action="">
                            <span id="start" class="search-by-component">
                                <label for="">From:</label>
                                <select name="" id="" class="search-input">
                                    <option value="dhaka">Dhaka</option>
                                    <option value="chittagong">Chittagong</option>
                                    <option value="barisal">Barisal</option>
                                    <option value="cox-bazar">Cox's Bazar</option>
                                    <option value="bargona">Bargona</option>
                                    <option value="bangabandhu-island">Bangabandhu Island</option>
                                    <option value="elisha">Elisha</option>
                                    <option value="kuakata">Kuakata</option>
                                    <option value="mawa">Mawa</option>
                                    <option value="saint-martin">Saint Martin</option>
                                </select>
                            </span>

                            <span id="end" class="search-by-component">
                                <label for="">To:</label>
                                <select name="" id="" class="search-input">
                                    <option value="dhaka">Dhaka</option>
                                    <option value="chittagong">Chittagong</option>
                                    <option value="barisal">Barisal</option>
                                    <option value="cox-bazar">Cox's Bazar</option>
                                    <option value="bargona">Bargona</option>
                                    <option value="bangabandhu-island">Bangabandhu Island</option>
                                    <option value="elisha">Elisha</option>
                                    <option value="kuakata">Kuakata</option>
                                    <option value="mawa">Mawa</option>
                                    <option value="saint-martin">Saint Martin</option>
                                </select>
                            </span>

                            <span class="search-by-component" id="journey-date">
                                <label for="">JOURNEY DATE:</label>
                                <input type="date" id="journey-date" name="journey-date" class="search-input">
                            </span>

                            <input type="submit" value="Submit" class="search-btn">
                        </form>
                    </div>
                </center>
            </div>


            <section class="tickets">
                <?php
                require("../model/db.php");

                $query = "SELECT * FROM launch_ticket";
                $query_run = mysqli_query($connection, $query);
                $check_ticket = mysqli_num_rows($query_run) > 0;

                if ($check_ticket) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>

                        <div class="ticket-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url(<?php echo $row['image']; ?>);"></div>
                            </div>
                            <div class="description">
                                <h1><?php echo $row['launch_operator_name']; ?></h1>
                                <h2><i style="color:black" class="ticket-icon fas fa-route"></i>&nbsp;&nbsp;&nbsp;<strong>Route:&nbsp;</strong><?php echo $row['launch_starting_location']; ?>&nbsp;<i style="color:black" class="ticket-icon fas fa-arrow-right"></i>&nbsp;<?php echo $row['launch_ending_location']; ?></h2>
                                <p><i style="color:black" class="ticket-icon far fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;<strong>Journey Date:&nbsp;</strong><?php echo $row['launch_journey_date']; ?></p>
                                <p><i style="color:black" class="ticket-icon fas fa-ticket-alt"></i>&nbsp;&nbsp;&nbsp;<strong>Deck Type:&nbsp;</strong><?php echo $row['launch_deck_type']; ?></p>
                                <p><i style="color:black" class="ticket-icon fas fa-clock"></i>&nbsp;&nbsp;&nbsp;<strong>Arrival Time:&nbsp;</strong><?php echo $row['launch_arrival_time']; ?></p>
                                <p><i style="color:black" class="ticket-icon fas fa-clock"></i>&nbsp;&nbsp;&nbsp;<strong>Departure Time:&nbsp;</strong><?php echo $row['launch_departure_time']; ?></p>
                                <p><i style="color:black" class="ticket-icon fas fa-check-square"></i>&nbsp;&nbsp;&nbsp;<strong>Available Seat:&nbsp;</strong><?php echo $row['launch_available_seats']; ?></p>
                                <p><i style="color:black" class="ticket-icon fas fa-hand-holding-usd"></i>&nbsp;&nbsp;&nbsp;<strong>Price:&nbsp;</strong><span style="color: red; font-weight: 700; font-size: 25px; line-height: 25px;">৳<?php echo $row['launch_ticket_price']; ?></span></p>
                                <p class="qty">
                                    <!-- <label for="qty">Quantity:</label> -->
                                    <!-- <button class="qtyminus" aria-hidden="true">&minus;</button> -->
                                    <strong style="font-size: 20px;">Quantity:&nbsp;</strong>&nbsp;&nbsp;&nbsp;<input type="number" name="qty" class="qty" id="qty" min="1" max="<?php echo $row['launch_available_seats']; ?>" step="1" value="1">
                                    <!-- <button class="qtyplus" aria-hidden="true">&plus;</button> -->
                                </p>
                                <button class="ticket-buy-btn" role="button" style="margin-top:15px;"><i style="color:white" class="ticket-icon fas fa-shopping-cart"></i>&nbsp;&nbsp;Buy</button>
                            </div>
                        </div>

                <?php


                    }
                } else {
                    echo "No ticket found";
                }

                ?>

            </section>
        </main>



        <footer>
            <?php include 'footer.php'; ?>
        </footer>

        <script src="./js/header.js"></script>
        <script src="./js/quantity.js"></script>

    </body>

    </html>
<?php
} else {
    header('location: ../control/user-login.php');
}
?>