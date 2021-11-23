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
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>

        <title>Air Ticket Info</title>
    </head>

    <body>
        <?php include 'header.php'; ?>

        <main>
            <fieldset style="width:35%; margin:0 auto; margin-top: 35px;">
                <form action="">
                    <label for="">From:</label>
                    <select name="" id="">
                        <option value="dhaka">Dhaka</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="joshore">Joshore</option>
                        <option value="saiadpur">Saiadpur</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="cox-bazar">Cox's Bazar</option>
                        <option value="sylhet">Sylhet</option>
                    </select>

                    <label for="">To:</label>
                    <select name="" id="">
                        <option value="dhaka">Dhaka</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="joshore">Joshore</option>
                        <option value="saiadpur">Saiadpur</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="cox-bazar">Cox's Bazar</option>
                        <option value="sylhet">Sylhet</option>
                    </select>

                    <label for="">JOURNEY DATE:</label>
                    <input type="date" id="journey-date" name="journey-date">

                    <input type="submit" value="Submit">
                </form>
            </fieldset>



            <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
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
            </fieldset>

            <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
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
            </fieldset>

            <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
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
            </fieldset>

            <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
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