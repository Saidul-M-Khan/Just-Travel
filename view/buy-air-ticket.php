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

        <title>Buy Air Ticket</title>
    </head>

    <body>
        <header>
            <?php include './header.php'; ?>
            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Most Reliable Air Ticket Solution</h1>
                    <h2>No. 1 online Ticketing Network</h2>

                </div>
            </div>
        </header>

        <main>
            <center>
                <div class="search">
                    <center>
                        <h2 class="search-title">SEARCH PLANE</h2>
                    </center>
                    <div class="search-bar">
                        <form action="">
                            <span id="start" class="search-by-component">
                                <label for="">From:</label>
                                <select name="" id="" class="search-input">
                                    <option value="dhaka">Dhaka</option>
                                    <option value="chittagong">Chittagong</option>
                                    <option value="barisal">Barisal</option>
                                    <option value="joshore">Joshore</option>
                                    <option value="saiadpur">Saiadpur</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="cox-bazar">Cox's Bazar</option>
                                    <option value="sylhet">Sylhet</option>
                                </select>
                            </span>

                            <span id="end" class="search-by-component">
                                <label for="">To:</label>
                                <select name="" id="" class="search-input">
                                    <option value="dhaka">Dhaka</option>
                                    <option value="chittagong">Chittagong</option>
                                    <option value="barisal">Barisal</option>
                                    <option value="joshore">Joshore</option>
                                    <option value="saiadpur">Saiadpur</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="cox-bazar">Cox's Bazar</option>
                                    <option value="sylhet">Sylhet</option>
                                </select>
                            </span>


                            <span class="search-by-component" id="journey-date">
                                <label for="">JOURNEY DATE:</label>
                                <input type="date" id="journey-date" name="journey-date" class="search-input">
                            </span>

                            <input type="submit" value="Submit" class="search-btn">
                        </form>
                    </div>

                </div>

            </center>


            <section class="tickets">
                <?php
                require("../model/db.php");

                $query = "SELECT * FROM air_ticket";
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
                                <img src="<?php echo $row['airline_image']; ?>" alt="" height="80px" width="80px">
                                <h1><?php echo $row['airline_name']; ?></h1>
                                <h2><i style="color:black" class="ticket-icon fas fa-route"></i>&nbsp;&nbsp;&nbsp;<strong>Route:&nbsp;</strong><?php echo $row['plane_start_location']; ?>&nbsp;<i style="color:black" class="ticket-icon fas fa-arrow-right"></i>&nbsp;<?php echo $row['plane_end_location']; ?></h2>
                                <h2><i style="color:black" class="fas fa-plane"></i>&nbsp;&nbsp;&nbsp;<strong>Flight:&nbsp;</strong><?php echo $row['flight_no']; ?></h2>
                                <p><i style="color:black" class="ticket-icon far fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;<strong>Journey Date:&nbsp;</strong><?php echo $row['plane_journey_date']; ?></p>
                                <p><i style="color:black" class="ticket-icon fas fa-ticket-alt"></i>&nbsp;&nbsp;&nbsp;<strong>Ticket Type:&nbsp;</strong><?php echo $row['air_ticket_type']; ?></p>
                                <p><i style="color:black" class="fas fa-plane-arrival"></i>&nbsp;&nbsp;&nbsp;<strong>Arrival Time:&nbsp;</strong><?php echo $row['plane_arrival_time']; ?></p>
                                <p><i style="color:black" class="fas fa-plane-departure"></i>&nbsp;&nbsp;&nbsp;<strong>Departure Time:&nbsp;</strong><?php echo $row['plane_departure_time']; ?></p>
                                <p><i style="color:black" class="ticket-icon fas fa-check-square"></i>&nbsp;&nbsp;&nbsp;<strong>Available Seat:&nbsp;</strong><?php echo $row['plane_available_seat']; ?></p>
                                <p><i style="color:black" class="ticket-icon fas fa-hand-holding-usd"></i>&nbsp;&nbsp;&nbsp;<strong>Price:&nbsp;</strong><span style="color: red; font-weight: 700; font-size: 25px; line-height: 25px;">৳<?php echo $row['air_ticket_price']; ?></span></p>
                                <p class="qty">
                                    <!-- <label for="qty">Quantity:</label> -->
                                    <!-- <button class="qtyminus" aria-hidden="true">&minus;</button> -->
                                    <strong style="font-size: 20px;">Quantity:&nbsp;</strong>&nbsp;&nbsp;&nbsp;<input type="number" name="qty" class="qty" id="qty" min="1" max="<?php echo $row['plane_available_seat']; ?>" step="1" value="1">
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



            <!-- <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
                <table style="width:100%; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td>
                                <ul class="air-ticket-info">
                                    <dl><img src="./images/air-ticket-packages/air-ticket-1.png" style="width: 100%; height: auto;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <img src="./images/plane/BIMAN.png" alt="" width="30%"><br>
                                        <strong>Flight No : 417</strong>
                                        <h4>Starting Point: <span>Dhaka Airport</span>
                                            <h4>End Point: <span>Saiadpur Airport</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>07:00 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>07:55 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>20</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h1>৳2500.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <a href="payment.php" target="_blank" style="text-decoration:none; color:black"><big><i class="fas fa-shopping-cart"></i>Buy</big></a>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset> -->

            <!-- <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
                <table style="width:100%; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td>
                                <ul class="air-ticket-info">
                                    <dl><img src="./images/air-ticket-packages/air-ticket-2.png" style="width: 100%; height: auto;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <img src="./images/plane/BIMAN.png" alt="" width="30%"><br>
                                        <strong>Flight No : 615</strong>
                                        <h4>Starting Point: <span>Dhaka Airport</span>
                                            <h4>End Point: <span>Chittagong Airport</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>02:15 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>03:00 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>16</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h1>৳2300.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <a href="payment.php" target="_blank" style="text-decoration:none; color:black"><big><i class="fas fa-shopping-cart"></i>Buy</big></a>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset> -->

            <!-- <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
                <table style="width:100%; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td>
                                <ul class="air-ticket-info">
                                    <dl><img src="./images/air-ticket-packages/air-ticket-3.png" style="width: 100%; height: auto;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <img src="./images/plane/USBANGLA.png" alt="" style="width: 30%; height: auto;"><br>
                                        <strong>Flight No : 901</strong>
                                        <h4>Starting Point: <span>Dhaka Airport</span>
                                            <h4>End Point: <span>Rajshahi Airport</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>9:30 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>08:25 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>4</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h1>৳2700.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <a href="payment.php" target="_blank" style="text-decoration:none; color:black"><big><i class="fas fa-shopping-cart"></i>Buy</big></a>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
                <table style="width:100%; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td>
                                <ul class="air-ticket-info">
                                    <dl><img src="./images/air-ticket-packages/air-ticket-4.png" style="width: 100%; height: auto;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <img src="./images/plane/BIMAN.png" alt="" style="width: 30%; height: auto;"><br>

                                        <strong>Flight No : 602</strong>
                                        <h4>Starting Point: <span>Dhaka Airport</span>
                                            <h4>End Point: <span>Sylhet Airport</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>10:30 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>11:25 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>40</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h1>৳2500.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <a href="payment.php" target="_blank" style="text-decoration:none; color:black"><big><i class="fas fa-shopping-cart"></i>Buy</big></a>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset> -->

            <!-- <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
                <table style="width:100%; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td>
                                <ul class="air-ticket-info">
                                    <dl><img src="./images/air-ticket-packages/air-ticket-5.png" style="width: 100%; height: auto;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <img src="./images/plane/NOVOAIR.png" alt="" style="width: 30%; height: auto;"><br>

                                        <strong>Flight No : 506</strong>
                                        <h4>Starting Point: <span>Dhaka Airport</span>
                                            <h4>End Point: <span>Joshore Airport</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>5:30 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>06:00 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>15</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h1>৳2500.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <a href="payment.php" target="_blank" style="text-decoration:none; color:black"><big><i class="fas fa-shopping-cart"></i>Buy</big></a>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
                <table style="width:100%; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td>
                                <ul class="air-ticket-info">
                                    <dl><img src="./images/air-ticket-packages/air-ticket-6.png" style="width: 100%; height: auto;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <img src="./images/plane/USBANGLA.png" alt="" style="width: 30%; height: auto;"><br>

                                        <strong>Flight No : 701</strong>
                                        <h4>Starting Point: <span>Dhaka Airport</span>
                                            <h4>End Point: <span>Barisal Airport</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>10:30 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>11:00 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>25</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h1>৳2300.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <a href="payment.php" target="_blank" style="text-decoration:none; color:black"><big><i class="fas fa-shopping-cart"></i>Buy</big></a>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
                <table style="width:100%; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td>
                                <ul class="air-ticket-info">
                                    <dl><img src="./images/air-ticket-packages/air-ticket-7.png" style="width: 100%; height: auto;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <img src="./images/plane/BIMAN.png" alt="" style="width: 30%; height: auto;"><br>

                                        <strong>Flight No : 601</strong>
                                        <h4>Starting Point: <span>Dhaka Airport</span>
                                            <h4>End Point: <span>Cox's Bazar Airport</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>9:30 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>08:25 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>14</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <h1>৳3650.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="air-ticket-info">
                                    <dl>
                                        <a href="payment.php" target="_blank" style="text-decoration:none; color:black"><big><i class="fas fa-shopping-cart"></i>Buy</big></a>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset> -->
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
    header('location: ../control/login.php');
}
?>