
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home</title>
</head>

<body>


<header>
    
    <div class="navbar">

        <nav>
            <fieldset>

            <a class="logo" href="/"><img src="../images/logo.png" alt="logo" height="50px"></a>
                <center>
                    <a href="Bus.php" style="text-decoration:none"><big>&nbsp;Bus</big></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="Launch.php" style="text-decoration:none"><big></i>&nbsp;Launch</big></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="Air.php" style="text-decoration:none"><big>&nbsp;Air</big></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="places.php" style="text-decoration:none"><big>&nbsp;Places</big></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="hotel.php" style="text-decoration:none"><big>&nbsp;Hotel</big></a>

                    <br>
                    <br>
                    

                    <fieldset style="width:100px; float:right">
                        <a href="../control/logout.php" style="text-decoration:none"><big>&nbsp;Logout</big></a>
                    </fieldset>

                </center>



            </fieldset>
        </nav>

       
    </div>
</header>

    <main style="padding: 20px 70px 20px 70px; ">
        
            <h1><Strong>Main Section</Strong></h1>
            <h4>
            <form>
                <fieldset>
                    <legend><h3>Launch Travel Information</h3></legend>
              
                    <h4>Destination</h4>
                    <label>From:</label>

                    <select>
                        <option value=""></option>
                        <option value="sadarghat">Sadarghat</option>
                        <option value="cox's bazar">Cox's Bazar</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="kuakata">Kuakata</option>
                        <option value="chandpur">Chandpur</option>
                        <option value="khulna">Khulna</option>
                        </select>
                        

                        <label>To:</label>

                    <select>
                        <option value=""></option>
                        <option value="sadarghat">Sadarghat</option>
                        <option value="cox's bazar">Cox's Bazar</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="kuakata">Kuakata</option>
                        <option value="chandpur">Chandpur</option>
                        <option value="khulna">Khulna</option>
                        </select>
                        
                          <label>Cabin Type:</label>
                        <select>
                            <option value=""></option>
                            <option value="vip">VIP</option>
                            <option value="upper deck">Upper Deck</option>
                            <option value="lower deck">Lower Deck</option>
                            <option value="standard cabin">Standard Cabin</option>
                            </select>
                            
                    

                    <label for="date">Travel Date:</label>
                     <input type="date" name="date" id="date"> 
                     
              
                    
                    <input type="submit"  name="search launches"  value="Search launches"><br><br>
              
                   </fieldset>
            </form>   
            </h4> <?php
            require("../model/db.php");

            $query = "SELECT * FROM launch_ticket";
            $query_run = mysqli_query($connection, $query);
            $check_launch_ticket = mysqli_num_rows($query_run) > 0;

            if ($check_launch_ticket) {
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
      
        <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
                <table style="width:100%; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            
                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <img src="<?php echo $row['image']; ?>" alt="" width="80%"><br>
                                      
                                        <strong><h2><?php echo $row['launch_operator_name']; ?></h2></strong>
                                        <strong><h3><?php echo $row['launch_route']; ?></h3></strong>
                                        <strong><h4><?php echo $row['launch_deck_type']; ?></h4></strong></span>
                                        <strong><h4><?php echo $row['launch_ticket_availability']; ?></h4></strong>
                                        
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                    <strong><h4>Starting Point: <?php echo $row['launch_starting_location']; ?></h4></strong></span>
                                        <strong><h4>Ending Point: <?php echo $row['launch_ending_location']; ?></h4></strong></span>
                                        
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                    <h4>Departure Time:<br>
                                         <?php echo $row['launch_departure_time']; ?></h4>
                                        
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                    <h4>Arrival Time:<br>
                                         <?php echo $row['launch_arrival_time']; ?></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                    <h4>Available Seat:
                                         <?php echo $row['launch_available_seats']; ?></h4>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="launch-ticket-info">
                                    <dl>
                                        <h3>Price:
                                        ৳<?php echo $row['launch_ticket_price']; ?></h3>
                                    </dl>
                                </ul>
                            </td>
                            </tr>
                    </tbody>
                </table>
            </fieldset>
            <?php


}
} else {
echo "No launch ticket found";
}

?>

    </main>

    <footer>
        
        <fieldset>
            <div class="bottom">
                <center>
                    <span class="credit">Created By <a href="">AIUBians</a> | </span>
                    <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
                </center>
            </div>
        </fieldset>

    </footer>
</body>

</html>
