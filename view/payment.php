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
        <title>Payment</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }

            .body-text {
                padding: 0 20px 30px 20px;
                font-family: "Roboto";
                font-size: 1em;
                color: #333;
                text-align: center;
                line-height: 1.2em;
            }

            .form-container {
                flex-direction: column;
                justify-content: center;
                align-items: center;

                padding: 60px 0;
                background-color: rgb(50, 168, 246);
                margin: 0 auto;
                width: 600px;
            }

            .card-wrapper {
                background-color: #6FB7E9;
                width: 100%;
                display: flex;

            }

            .personal-information {
                background-color: #3C8DC5;
                color: #fff;
                padding: 1px 0;
                text-align: center;
            }

            h1 {
                font-size: 1.3em;
                font-family: "Roboto"
            }

            input {
                margin: 1px 0;
                padding-left: 3%;
                font-size: 14px;
            }

            input[type="text"] {
                display: block;
                height: 50px;
                width: 97%;
                border: none;
            }

            input[type="email"] {
                display: block;
                height: 50px;
                width: 97%;
                border: none;
            }

            input[type="submit"] {
                display: block;
                height: 60px;
                width: 100%;
                border: none;
                background-color: #3C8DC5;
                color: #fff;
                margin-top: 2px;
                cursor: pointer;
                font-size: 0.9em;
                text-transform: uppercase;
                font-weight: bold;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #6FB7E9;
                transition: 0.3s ease;
            }

            #column-left {
                width: 46.5%;
                float: left;
                margin-bottom: 2px;
            }

            #column-right {
                width: 46.5%;
                float: right;
            }
        </style>
    </head>

    <body>

        <?php include 'header.php'; ?>

        <main>
            <div class="body-text" style="margin-top: 50px;">Write your name in the right fields. Also write your imaginary card
                number. By clicking CCV
                field card will turn.</div>
            <form action="./thankyou.php" method="
        POST">
                <div class="form-container">
                    <div class="personal-information">
                        <h1>Payment Information</h1>
                    </div>

                    <input id="input-field" type="text" name="name-on-card" autocomplete="on" maxlength="40" placeholder="Name on Card" />
                    <input id="input-field" type="text" name="number" placeholder="Card Number" />
                    <input id="column-left" type="text" name="expiry" placeholder="MM / YY" />
                    <input id="column-right" type="text" name="cvc" placeholder="CCV" />

                    <div class="card-wrapper"></div>

                    <input id="input-field" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Streed Address" />
                    <input id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City" />
                    <input id="column-right" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code" />
                    <input id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email" />
                    <input id="input-button" type="submit" value="Submit" />

            </form>
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