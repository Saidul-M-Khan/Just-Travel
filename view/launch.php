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
        <link rel="stylesheet" href="styles/launch.css">
        <link rel="stylesheet" href="styles/global.css">
        <link rel="stylesheet" href="./styles/text-animation.css">
        <link rel="stylesheet" href="./styles/header.css">
        <link rel="stylesheet" href="./styles/banner.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <title>Launch</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

    <body>
        <header>
            <?php
            include './header.php';
            ?>
            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Most Reliable Launch Ticket Solution</h1>
                    <h2>No. 1 online Ticketing Network</h2>
                </div>
            </div>
        </header>

        <main>
            <section class="container content">
                <div class="search">
                    <center>
                        <h2 style="color:cyan;">SEARCH LAUNCH</h2>
                    </center>
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
                </div>


                <div style="width:100%; margin:0 auto;">
                    <center>
                        <iframe width="1200" height="720" src="https://www.youtube.com/embed/nhwtKxTDrRY?list=PL4pcb3feGRyYbJdcz1XnnpF_zpi9R75vw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>

                </div>


                <div class="launch-routes">
                    <center>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="4">
                                        <h1>POPULAR LAUNCH ROUTES</h1>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <ul class="launch-list routes">
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chandpur</a></dl>
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chor Kolmi</a></dl>
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chor Khali</a></dl>
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Cawkhali</a></dl>
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chand Khali</a></dl>
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chondromohon</a></dl>
                                        </ul>
                                    </td>

                                    <td>
                                        <ul class="launch-list routes">
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chor Darial</a></dl>
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chairmanbari Ghat</a></dl>
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chor Kolmi</a></dl>
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To C&B Ghat</a></dl>
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chor Voyarabi</a></dl>
                                        </ul>
                                    </td>

                                    <td>
                                        <ul class="launch-list routes">
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chobipur</a></dl>
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chalita Toli</a></dl>
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Chor Borhan</a></dl>
                                            <dl><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;Dhaka To Babugong</a></dl>
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

        </main>



        <footer>
            <?php
            // include 'footer.php'; 
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