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
        <link rel="stylesheet" href="./styles/ticket.css">
        <link rel="stylesheet" href="./styles/buy-bus-ticket.css">
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>

        <title>Bus Ticket Info</title>
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
                        <option value="mymensingh">Mymensingh</option>
                        <option value="khulna">Khulna</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="rangpur">Rangpur</option>
                        <option value="sylhet">Sylhet</option>
                    </select>

                    <label for="">To:</label>
                    <select name="" id="">
                        <option value="dhaka">Dhaka</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="mymensingh">Mymensingh</option>
                        <option value="khulna">Khulna</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="rangpur">Rangpur</option>
                        <option value="sylhet">Sylhet</option>
                    </select>

                    <label for="">JOURNEY DATE:</label>
                    <input type="date" id="journey-date" name="journey-date">

                    <input type="submit" value="Submit">
                </form>
            </fieldset>

            <center>
                <div class="ticket">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <ul class="bus-ticket-info">
                                        <dl><img src="./images/bus-ticket-packages/package-1.png" style="width: 350px; height: 300px;" alt=""></dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul class="bus-ticket-info">
                                        <dl>
                                            <h2>SAKURA PARIBAHAN</h2>
                                            <p>1. DHK-BSL</p>
                                            <strong>Non AC</strong>
                                            <h4>Starting Point: <span>Technical</span>
                                                <h4>End Point: <span>Barisal Terminal</span></h4>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul class="bus-ticket-info">
                                        <dl>
                                            <h3>DEPARTURE TIME</h3><br>
                                            <strong><span>6:30</span></strong>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul class="bus-ticket-info">
                                        <dl>
                                            <h3>ARRIVAL TIME</h3><br>
                                            <strong><span>11:55 AM</span></strong>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul class="bus-ticket-info">
                                        <dl>
                                            <h3>SEATS AVAILABLE</h3><br>
                                            <strong><span>16</span></strong>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul class="bus-ticket-info">
                                        <dl>
                                            <h1>৳450.00</h1>
                                        </dl>
                                    </ul>
                                </td>

                                <td>
                                    <ul class="bus-ticket-info">
                                        <dl>
                                            <button class="buy-button" role="button">Buy Now</button>
                                            <!-- <fieldset>
                                                <a href="payment.php" target="_blank" style="text-decoration:none; color:black"><big><i class="fas fa-shopping-cart"></i>&nbsp;Buy</big></a>
                                            </fieldset> -->
                                        </dl>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </center>

            <div class="ticket">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <ul class="bus-ticket-info">
                                    <dl><img src="./images/bus-ticket-packages/package-2.png" style="width: 350px; height: 300px;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h2>SENJUTI TRAVELS</h2>
                                        <p>803 ADP-COX-TEK.(34) </p>
                                        <strong>AC</strong>
                                        <h4>Starting Point: <span>Abdullahpur</span>
                                            <h4>End Point: <span>Teknaf</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>5:30 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>6:30 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>36</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h1>৳900.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <button class="buy-button" role="button">Buy Now</button>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="ticket">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <ul class="bus-ticket-info">
                                    <dl><img src="./images/bus-ticket-packages/package-3.png" style="width: 350px; height: 300px;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h2>PLATINUM TRAVELS</h2>
                                        <p>112-ADB-DHK-TEK </p>
                                        <strong>Non AC</strong>
                                        <h4>Starting Point: <span>Abdullahpur</span>
                                            <h4>End Point: <span>Sylhet</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>6:30 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>7:30 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>26</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h1>৳470.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <button class="buy-button" role="button">Buy Now</button>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="ticket">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <ul class="bus-ticket-info">
                                    <dl><img src="./images/bus-ticket-packages/package-4.png" style="width: 350px; height: 300px;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h2>HANIF ENTERPRISE</h2>
                                        <p>68-RAJ-CHAPI</p>
                                        <strong>Non AC</strong>
                                        <h4>Starting Point: <span>KP VOLVO RAJ</span>
                                            <h4>End Point: <span>Chapainawabganj</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>6:00 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>1:00 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>29</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h1>৳450.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <button class="buy-button" role="button">Buy Now</button>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="ticket">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <ul class="bus-ticket-info">
                                    <dl><img src="./images/bus-ticket-packages/package-6.png" style="width: 350px; height: 300px;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h2>SAKURA PARIBAHAN</h2>
                                        <p>6 DHK-KK</p>
                                        <strong>Non AC</strong>
                                        <h4>Starting Point: <span>Technical</span>
                                            <h4>End Point: <span>Kuakata</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>7:45 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>4:30 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>14</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h1>৳500.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <button class="buy-button" role="button">Buy Now</button>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="ticket">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <ul class="bus-ticket-info">
                                    <dl><img src="./images/bus-ticket-packages/package-7.png" style="width: 350px; height: 300px;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h2>SHYAMOLI NR TRAVELS</h2>
                                        <p>6008-CTG-DHK-KOLKATA</p>
                                        <strong>AC</strong>
                                        <h4>Starting Point: <span>Dampara</span>
                                            <h4>End Point: <span>(Kolkata)Marquis Street-02</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>3:00 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>9:30 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>20</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h1>৳900.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <button class="buy-button" role="button">Buy Now</button>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="ticket">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <ul class="bus-ticket-info">
                                    <dl><img src="./images/bus-ticket-packages/package-8.png" style="width: 350px; height: 300px;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h2>S.ALAM SERVICE</h2>
                                        <p>202-DHK-KHAG</p>
                                        <strong>Non AC</strong>
                                        <h4>Starting Point: <span>Gabtoli</span>
                                            <h4>End Point: <span>Khagrachari</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>6:30 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>12:30 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>12</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h1>৳520.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <button class="buy-button" role="button">Buy Now</button>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="ticket">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <ul class="bus-ticket-info">
                                    <dl><img src="./images/bus-ticket-packages/package-9.png" style="width: 350px; height: 300px;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h2>SHYAMOLI NR TRAVELS</h2>
                                        <p>8000-COX-HYUNDAI</p>
                                        <strong>AC</strong>
                                        <h4>Starting Point: <span>Gabtoli 06 No.</span>
                                            <h4>End Point: <span>Cox-bazar Jhawtola</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>7:00 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>3:30 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>14</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h1>৳750.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <button class="buy-button" role="button">Buy Now</button>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="ticket">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <ul class="bus-ticket-info">
                                    <dl><img src="./images/bus-ticket-packages/package-10.png" style="width: 350px; height: 300px;" alt=""></dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h2>GREEN LINE</h2>
                                        <p>113-DD-R/B-UPPER DECK</p>
                                        <strong>AC</strong>
                                        <h4>Starting Point: <span>Razarbagh1</span>
                                            <h4>End Point: <span>CTG- BRTC-02</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>5:30 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>10:15 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>35</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h1>৳480.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <button class="buy-button" role="button">Buy Now</button>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>



        <?php include 'footer.php'; ?>

    </body>

    </html>

<?php
} else {
    header('location: ../control/login.php');
}
?>