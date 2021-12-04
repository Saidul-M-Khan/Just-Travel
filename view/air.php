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
        <link rel="stylesheet" href="styles/air.css">
        <link rel="stylesheet" href="styles/global.css">
        <link rel="stylesheet" href="./styles/header.css">
        <link rel="stylesheet" href="./styles/banner.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/slider.css">
        <link rel="stylesheet" href="./styles/text-animation.css">
        <link rel="stylesheet" href="./styles/view-all-ticket.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
        <title>Air</title>
    </head>

    <body>

        <header>
            <?php
            include './header.php';
            ?>
            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Most Reliable Air Ticket Solution</h1>
                    <h2>No. 1 online Ticketing Network</h2>

                </div>
            </div>
        </header>

        <main>
            <section class="container content">
                <div class="search">
                    <center>
                        <h2 style="color:yellow;">SEARCH PLANE</h2>
                    </center>
                    <div class="search-bar">
                        <form action="">
                            <span class="search-by-component">
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

                            <span class="search-by-component">
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

                            <span class="search-by-component">
                                <label for="">JOURNEY DATE:</label>
                                <input type="date" id="journey-date" name="journey-date" class="search-input">
                            </span>


                            <input type="submit" value="Submit" class="search-btn">
                        </form>
                    </div>
                </div>





                <section class="air-ticket-slider" style="margin-bottom: 200px;">
                    <center>
                        <h2 style="position: relative; top: -50px;">AVAILABLE PACKAGES</h2>
                    </center>

                    <div class="pic-ctn" style="margin-top: 50px; position: relative; right: 100px; top: 10px">
                        <img src="./images/air-ticket-packages/air-ticket-1.png" alt="" class="pic" width="500px">
                        <img src="./images/air-ticket-packages/air-ticket-2.png" alt="" class="pic" width="500px">
                        <img src="./images/air-ticket-packages/air-ticket-3.png" alt="" class="pic" width="500px">
                        <img src="./images/air-ticket-packages/air-ticket-4.png" alt="" class="pic" width="500px">
                        <img src="./images/air-ticket-packages/air-ticket-5.png" alt="" class="pic" width="500px">
                        <img src="./images/air-ticket-packages/air-ticket-6.png" alt="" class="pic" width="500px">
                    </div>
                </section>

                <div class="air-routes">
                    <center>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="4">
                                        <h1>POPULAR AIR ROUTES</h1>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <ul class="air-list routes">
                                            <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-COX'S BAZAR</a></dl>
                                            <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-CHITTAGONG</a></dl>


                                        </ul>
                                    </td>

                                    <td>
                                        <ul class="air-list routes">
                                            <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-RAJSHAHI</a></dl>
                                            <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-SYLHET</a></dl>

                                        </ul>
                                    </td>

                                    <td>
                                        <ul class="air-list routes">
                                            <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-JOSHOR</a></dl>
                                            <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-BARISAL</a></dl>
                                            <dl><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;DHAKA-SAIADPUR</a></dl>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </center>
                </div>

                <div style="width:100%; margin:0 auto; margin-top: 100px; margin-bottom:50px; background: white; border:2px solid blueviolet; border-radius: 10px; padding: 30px;">

                    <center>
                        <h1>We Accept</h1>
                    </center>
                    <img src="./images/payment-methods.png" alt="" style="width: 100%; height: auto;">

                </div>
            </section>
            <center>
                <a href="./buy-air-ticket.php" style="text-decoration:none;"><button class="see-tickets-btn" role="button"><span class="text">SEE ALL AVAILABLE AIR TICKETS</span></button></a>
            </center>




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
    header('location: ../control/user-login.php');
}
?>