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
        <title>Event Details</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

    <body>


        <?php include 'header.php'; ?>


        <main>
            <fieldset style="width:80%; margin:0 auto; margin-top: 25px;">
                <center>
                    <img src="./images/event-details/event-details-2.jpg" alt="" style="width: 100%; height: auto;">
                </center>
                <h1>Tanguar Haor</h1>
                <small>Sunamganj, Bangladesh</small>
                <del>
                    <p>BDT: 4000</p>
                </del>
                <h3>BDT: 3500</h3>
                <hr>
                <center>
                    <fieldset style="width:25%;">
                        <a href="./payment.php" style="text-decoration:none; color:black"><big><i class="fas fa-file-signature"></i>&nbsp;REGISTER
                                NOW</big></a>
                    </fieldset>
                </center>

            </fieldset>

            <section class="event-details" style="margin: 200px;">
                <div class="container">
                    <div>
                        <div>
                            <h3>Tanguar Haor Group Tour</h3>
                            <h1>Sunamganj, Bangladesh</h1>
                            <div>
                                <p><strong style="color: rgb(33, 33, 33);">Tour Highlight</strong></p>
                                <p><strong style="color: rgb(33, 33, 33);">Date: From 15</strong><sup style="color: rgb(33, 33, 33);"><strong>th</strong></sup><strong style="color: rgb(33, 33, 33);"> September to 31</strong><sup style="color: rgb(33, 33, 33);"><strong>st</strong></sup><strong style="color: rgb(33, 33, 33);"> October 2021</strong></p>
                                <p><strong style="color: rgb(33, 37, 41);">Name of the boat:</strong><span style="color: rgb(33, 37, 41);"> Mahajaner Nao</span></p>
                                <p><strong style="color: rgb(33, 37, 41);">Capacity:</strong><span style="color: rgb(33, 37, 41);"> 15 people</span></p>
                                <p><strong style="color: rgb(33, 37, 41);">Place of departure:</strong><span style="color: rgb(33, 37, 41);"> Sunamganj</span></p>
                                <p><strong style="color: rgb(33, 37, 41);">Type of boat:</strong><span style="color: rgb(33, 37, 41);"> Wood</span></p>
                                <p><strong style="color: rgb(33, 37, 41);">Types of bathrooms:</strong><span style="color: rgb(33, 37, 41);"> high commode and low commode</span></p>
                                <p><strong style="color: rgb(33, 37, 41);">Food:</strong></p>
                                <p><span style="color: rgb(33, 37, 41);"> </span><strong style="color: rgb(33, 37, 41);">Day
                                        1</strong></p>
                                <p><strong style="color: rgb(33, 37, 41);"> Breakfast:</strong><span style="color: rgb(33, 37, 41);"> Khichuri with Egg Curry &amp; Salad</span></p>
                                <p><strong style="color: rgb(33, 37, 41);"> </strong><span style="color: rgb(33, 37, 41);">Lunch: Bhat, Bhorta, Vaji, Fresh Fish, Hash/Deshi
                                        Murgi, Daal</span></p>
                                <p><strong style="color: rgb(33, 37, 41);"> </strong><span style="color: rgb(33, 37, 41);">Dinner: Bhuna Khichuri/Bhat, Chicken/Duck Curry, Egg
                                        Curry, Daal</span></p>
                                <p><strong style="color: rgb(33, 37, 41);">Day 2</strong></p>
                                <p><span style="color: rgb(33, 37, 41);"> Breakfast: Khichuri, Egg Curry &amp; Salad.</span>
                                </p>
                                <p><span style="color: rgb(33, 37, 41);"> Lunch:</span><strong style="color: rgb(33, 37, 41);"> </strong><span style="color: rgb(33, 37, 41);">Bhat, Bhorta, Vaji, Fresh Fish, Hash/Deshi Murgi,
                                        Daal.</span></p>
                                <p><strong style="color: rgb(33, 37, 41);"> </strong><span style="color: rgb(33, 37, 41);">Dinner</span><strong style="color: rgb(33, 37, 41);">:</strong><span style="color: rgb(33, 37, 41);">
                                        Bhuna Khichuri/Bhat, Chicken/Duck Curry, Egg Curry, Daal. </span></p>
                                <p><strong style="color: rgb(33, 33, 33);">Tour Package Includes</strong></p>
                                <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 Night Accommodation on the boat</p>
                                <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Boat Ride around Tanguar Haor</p>
                                <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tour Guide</p>
                                <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 Food meals (2 Breakfast, 2 Lunch &amp;
                                    2 Dinner)</p>
                                <p><strong style="color: rgb(33, 33, 33);">Tour Package Excludes</strong></p>
                                <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any Private Expenses</p>
                                <p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shimul Bagan Entry Free 20/- Per Person
                                </p>
                                <p><strong style="color: rgb(33, 33, 33);">&nbsp;</strong></p>
                                <p><strong style="color: rgb(33, 33, 33);">Tour Package Cost</strong></p>
                                <ul>
                                    <li>6 Person – 5000 Taka Only</li>
                                    <li>8 Person – 4500 Taka Only</li>
                                    <li>10 Person – 4000 Taka Only</li>
                                    <li>12 Person – 3500 Taka Only</li>
                                </ul>
                                <p><br></p>
                                <p><strong style="color: rgb(33, 33, 33);">The Journey of Tanguar Haor Expedition</strong>
                                </p>
                                <p>Tanguar haor is a unique wetland ecosystem of national importance and has come into
                                    international focus. It is the source of livelihood for more than 40,000 people. The
                                    Government of Bangladesh declared Tanguar haor as an Ecologically Critical Area in 1999
                                    considering its critical condition as a result of over-exploitation of its natural
                                    resources. In 2000, the hoar basin was declared a Ramsar site – the wetland of
                                    international importance. With this declaration, the Government is committed to
                                    preserving its natural resources and has taken several steps for protection of this
                                    wetland.</p>
                                <p><br></p>
                                <p>In this tour you’ll be visiting:</p>
                                <ul>
                                    <li>Watch Tower</li>
                                    <li>Niladri</li>
                                    <li>Tekerghat</li>
                                    <li>JaduKata river<span style="color: windowtext;"> </span></li>
                                    <li>Barikka Tila</li>
                                    <li>Shimul Bagan</li>
                                </ul>
                                <p><br></p>
                                <p><strong>Day 1: On Board on the Boat </strong></p>
                                <p>We will board on the boat from Sunamgonj and have breakfast Khichuri with Egg Curry &amp;
                                    Salad. You’ll be provided one of the most equipped boats of Tanguar Hoar with high
                                    standard washroom facility. Also, life jacket &amp; all other essential elements will be
                                    provided. We will go toward the Watch Tower. You can experience the swimming in the
                                    clear water near watch tower.</p>
                                <p>After experience there, our boatman will take you to Niladri. In between, lunch will be
                                    provided on the boat with standard Bengali food menu mostly with Bhat, Bhorta, Vaji,
                                    Fresh Fish, Hash/Deshi Murgi, Daal.</p>
                                <p>In the evening, the boat will be anchored in the Tekerghat where you will get the
                                    experience of the night beauty of Niladri. Dinner will be given in the boat with Bhuna
                                    Khichuri/Bhat, Chicken/Duck Curry, Egg Curry, Daal.</p>
                                <p>Stay overnight on the boat.</p>
                                <p><br></p>
                                <p><strong>Day 2: Exploring the Haor </strong></p>
                                <p>After watching the sunrise from the boat breakfast will be served with Khichuri, Egg
                                    Curry &amp; Salad to get you a warm fresh start of the day.</p>
                                <p>Then you will visit JaduKata river, Barikka Tila and Shimul Bagan. We will have lunch on
                                    the boat with Bhat, Bhorta, Vaji, Fresh Fish, Hash/Deshi Murgi, Daal.</p>
                                <p>At 8 PM the boat will reach at Sunamganj.</p>
                                <p>Dinner will be served in a boat with Bhuna Khichuri/Bhat, Chicken/Duck Curry, Egg Curry,
                                    Daal.</p>
                                <p><br></p>
                                <p><strong style="color: rgb(33, 33, 33);">End of the Tour&nbsp;</strong></p>
                            </div>
                        </div>
                        <center>
                            <fieldset style="width:25%;">
                                <a href="./payment.php" style="text-decoration:none; color:black"><big><i class="fas fa-file-signature"></i>&nbsp;REGISTER
                                        NOW</big></a>
                            </fieldset>
                        </center>
                    </div>
                </div>
            </section>



        </main>


        <?php include 'footer.php'; ?>
    </body>

    </html>
<?php
} else {
    header('location: ../control/login.php');
}
?>