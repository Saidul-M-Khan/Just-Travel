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
        <title>Order Status</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

    <body>

        <?php include 'header.php'; ?>


        <main>
            <center>
                <h1>ORDERS</h1>
            </center>
            <section id="pending-orders" style="margin-top: 50px;">
                <center>
                    <fieldset style="width:50%;">

                        <h2>Pending Orders</h2>
                        <fieldset style="width:50%; margin-top: 10px;">
                            <table>
                                <tr>
                                    <td>
                                        <h3><i class="fas fa-ticket-alt"></i>&nbsp;Event Ticket: Sundarban Group Tour</h3>
                                        <i class="far fa-calendar-alt fa-1x"></i>&nbsp;01 Oct, 2021 - 31 Oct, 2021
                                        <h2><i class="fas fa-hand-holding-usd"></i>&nbsp;Price: ৳4570.00</h2>
                                        <strong><label for="file">Order in progress:</label></strong>
                                        <progress id="file" value="50" max="100"> 32% </progress>
                                        <br><br>
                                        <button>Cancel</button>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>

                        <fieldset style="width:50%; margin-top: 10px;">
                            <table>
                                <tr>
                                    <td>
                                        <h3><i class="fas fa-hotel"></i>&nbsp;Hotel: Hotel The Cox Today</h3>
                                        <h2><i class="fas fa-hand-holding-usd"></i>&nbsp;Price: ৳3878.00</h2>
                                        <strong><label for="file">Order in progress:</label></strong>
                                        <progress id="file" value="30" max="100"> 5% </progress>
                                        <br><br>
                                        <button>Cancel</button>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>

                    </fieldset>
                </center>
            </section>

            <section id="confirmed-orders" style="margin-top: 50px;">
                <center>
                    <fieldset style="width:50%;">
                        <h1>CONFIRMED ORDERS</h1>
                        <fieldset style="width:50%; margin-top: 10px;">
                            <table>
                                <tr>
                                    <td>
                                        <h3><i class="fas fa-ticket-alt"></i>&nbsp;Ticket: SENJUTI TRAVELS [ DHAKA-COX'S
                                            BAZAR ]
                                        </h3>
                                        <h2><i class="fas fa-hand-holding-usd"></i>&nbsp;Price: ৳900.00</h2>
                                        <strong><label for="file">Order in progress:</label></strong>
                                        <progress id="file" value="100" max="100"> 100% </progress><span>&nbsp;(100%)</span>
                                        <br><br>
                                        <button>Download Ticket</button>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </fieldset>
                </center>
            </section>

            <br>
            <center>
                <fieldset style="width:10%">
                    <a href="profile.php" style="text-decoration:none; color:black"><i class="fas fa-arrow-circle-left"></i>&nbsp;Back</a>
                </fieldset>
            </center>
        </main>

        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php
} else {
    header('location: ../control/user-login.php');
}
?>