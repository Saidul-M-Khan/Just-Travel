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

        <title>Launch Ticket Info</title>
    </head>

    <body>

        <?php include 'header.php'; ?>

        <main>
            <fieldset style="width:41%; margin:0 auto; margin-top: 35px;">
                <form action="">
                    <label for="">From:</label>
                    <select name="" id="">
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


                    <label for="">To:</label>
                    <select name="" id="">
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

                    <label for="">JOURNEY DATE:</label>
                    <input type="date" id="journey-date" name="journey-date">

                    <input type="submit" value="Submit">
                </form>
            </fieldset>

            <fieldset style="width:70%; margin:0 auto; margin-top: 25px;">
                <table style="width:100%; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h2>GREEN LINE</h2>
                                        <p>001-UPPER-DECK </p>
                                        <strong>AC</strong>
                                        <h4>Starting Point: <span>LAL KUTHI GHAT</span>
                                            <h4>End Point: <span>Barisal Launch Terminal</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>08:00 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>11:55 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>16</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h1>৳1000.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <fieldset>
                                            <a href="payment.php" target="_blank" style="text-decoration:none; color:black"><big><i class="fas fa-shopping-cart"></i>&nbsp;Buy</big></a>
                                        </fieldset>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset style="width:70%; margin:0 auto; margin-top: 25px;">
                <table style="width:100%; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h2>Sundarban Express</h2>
                                        <p>002-UPPER-DECK </p>
                                        <strong>AC</strong>
                                        <h4>Starting Point: <span>Sadarghat</span>
                                            <h4>End Point: <span>Mongla Launch Terminal</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>08:00 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>10:55 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>5</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h1>৳800.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <fieldset>
                                            <a href="payment.php" target="_blank" style="text-decoration:none; color:black"><big><i class="fas fa-shopping-cart"></i>&nbsp;Buy</big></a>
                                        </fieldset>
                                    </dl>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>

            <fieldset style="width:70%; margin:0 auto; margin-top: 25px;">
                <table style="width:100%; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h2>Bangladesh Green Express</h2>
                                        <p>003-UPPER-DECK </p>
                                        <strong>AC</strong>
                                        <h4>Starting Point: <span>Sadarghat</span>
                                            <h4>End Point: <span>Chittagong Launch Terminal</span></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h3>DEPARTURE TIME</h3><br>
                                        <strong><span>010:00 AM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h3>ARRIVAL TIME</h3><br>
                                        <strong><span>11:55 PM</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h3>SEATS AVAILABLE</h3><br>
                                        <strong><span>20</span></strong>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h1>৳950.00</h1>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <fieldset>
                                            <a href="payment.php" target="_blank" style="text-decoration:none; color:black"><big><i class="fas fa-shopping-cart"></i>&nbsp;Buy</big></a>
                                        </fieldset>
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