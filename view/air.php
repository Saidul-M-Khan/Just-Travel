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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }

            @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');


            .show-btn,
            .output-container {
                position: relative;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            input[type="checkbox"] {
                display: none;
            }

            .output-container {
                display: none;
                background: #fff;
                width: 1400px;
                padding: 50px;
                box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
                margin-top: 100px;
            }

            #show:checked~.output-container {
                display: block;
            }

            .output-container .close-btn {
                position: absolute;
                right: 20px;
                top: 15px;
                font-size: 18px;
                cursor: pointer;
            }

            .output-container .close-btn:hover {
                color: #3498db;
            }

            /* Table Styles */

            .table-wrapper {
                height: 35px;
                margin: 10px 0px 0px;
                box-shadow: 0px 35px 50px rgba(0, 0, 0, 0.2);
            }

            .fl-table {
                border-radius: 5px;
                font-size: 12px;
                font-weight: normal;
                border: none;
                border-collapse: collapse;
                width: 100%;
                max-width: 100%;
                white-space: nowrap;
                background-color: white;
            }

            .table-wrapper#blur.active {
                filter: blur(20px);
                pointer-events: none;
                user-select: none;
            }

            .fl-table td,
            .fl-table th {
                text-align: center;
                padding: 8px;
            }

            .fl-table td {
                border-right: 1px solid #f8f8f8;
                font-size: 18px;
            }

            .fl-table thead th {
                color: #ffffff;
                background: #4FC3A1;
            }


            .fl-table thead th:nth-child(odd) {
                color: #ffffff;
                background: #324960;
            }

            .fl-table tr:nth-child(even) {
                background: #F8F8F8;
            }

            /* Responsive */

            @media (max-width: 767px) {
                .fl-table {
                    display: block;
                    width: 100%;
                }

                .fl-table#blur.active {
                    filter: blur(20px);
                    pointer-events: none;
                    user-select: none;
                }

                .table-wrapper:before {
                    content: "Scroll horizontally >";
                    display: block;
                    text-align: right;
                    font-size: 11px;
                    color: white;
                    padding: 0 0 10px;
                }

                .fl-table thead,
                .fl-table tbody,
                .fl-table thead th {
                    display: block;
                }

                .fl-table thead th:last-child {
                    border-bottom: none;
                }

                .fl-table thead {
                    float: left;
                }

                .fl-table tbody {
                    width: auto;
                    position: relative;
                    overflow-x: auto;
                }

                .fl-table td,
                .fl-table th {
                    padding: 20px .625em .625em .625em;
                    height: 60px;
                    vertical-align: middle;
                    box-sizing: border-box;
                    overflow-x: hidden;
                    overflow-y: auto;
                    width: 120px;
                    font-size: 13px;
                    text-overflow: ellipsis;
                }

                .fl-table thead th {
                    text-align: left;
                    border-bottom: 1px solid #f7f7f9;
                }

                .fl-table tbody tr {
                    display: table-cell;
                }

                .fl-table tbody tr:nth-child(odd) {
                    background: none;
                }

                .fl-table tr:nth-child(even) {
                    background: transparent;
                }

                .fl-table tr td:nth-child(odd) {
                    background: #F8F8F8;
                    border-right: 1px solid #E6E4E4;
                }

                .fl-table tr td:nth-child(even) {
                    border-right: 1px solid #E6E4E4;
                }

                .fl-table tbody td {
                    display: block;
                    text-align: center;
                }
            }

            #searchResults {
                position: relative;
                top: -400px;
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

                        <span class="search-by-component">
                            <label for="">From:</label>
                            <select name="startLocation" id="startLocation" class="search-input">
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
                            <select name="endLocation" id="endLocation" class="search-input">
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
                            <input type="date" id="journeyDate" name="journeyDate" class="search-input">
                        </span>


                        <button id="search" class="search-btn button" onclick="toggle()"> <label for="show" style="color:#4FC3A1;">Search</label> </button>

                    </div>
                </div>





                <div id="searchResults">
                    <!-- POP UP SEARCH  -->
                    <div>
                        <input type="checkbox" id="show">
                        <div class="output-container">
                            <label for="show" class="close-btn fas fa-times" style="color:black;" title="close"></label>
                            <div class="table-wrapper">
                                <table class="fl-table">
                                    <thead>
                                        <tr>
                                            <th>Operator Name</th>
                                            <th>Journey Date</th>
                                            <th>Starting Location</th>
                                            <th>Ending Location</th>
                                            <th>Arrival Time</th>
                                            <th>Departure Time</th>
                                            <th>Available Seat</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <!-- <th>Buy</th> -->
                                        </tr>
                                    </thead>
                                    <tbody id="output">

                                    <tbody>
                                </table>
                            </div>
                        </div>
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
        <script src="./js/search.js"></script>
        <!-- pop up script -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("#search").click(function() {
                    $.ajax({
                        type: 'POST',
                        url: './search-air-ticket.php',
                        data: {
                            startLocation: $("#startLocation").val(),
                            endLocation: $("#endLocation").val(),
                            journeyDate: $("#journeyDate").val()
                        },
                        success: function(data) {
                            $("#output").html(data);
                        }
                    });
                });
            });
        </script>
        <!-- background blur script -->
        <script type="text/javascript">
            function toggle() {
                var blur = document.getElementById('blur');
                blur.classlist.toggle('active')
            }
        </script>

    </body>

    </html>

<?php
} else {
    header('location: ../control/user-login.php');
}
?>