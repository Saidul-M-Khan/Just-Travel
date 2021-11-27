
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
        
            <h1><Strong>Bus Ticket</Strong></h1>
            <h4>
            <form>
        
                <fieldset>
                    <legend><h3>Bus Travel Information</h3></legend>
              
                    <h4>Destination</h4>
                    <label>From:</label>

                    <select>
                        <option value="dhaka">Dhaka</option>
                        <option value="sylhet">Sylhet</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="khulna">Khulna</option>
                        <option value="rangpur">Rangpur</option>
                        </select>
                        <!-- <br><br> --> 

                        <label>To:</label>

                    <select>
                        <option value="dhaka">Dhaka</option>
                        <option value="sylhet">Sylhet</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="khulna">Khulna</option>
                        <option value="rangpur">Rangpur</option>
                        </select>
                        <!-- <br><br> --> 
                    
                    <label for="ac/non-ac"></label>
                    <input type="radio" name="ac" value="ac">AC
                    <input type="radio" name="non-ac" value="non-ac">Non-AC
                    <!-- <br><br> -->
                    

                    <label for="date">Travel Date:</label>
                     <input type="date" name="date" id="date"> 
                     
              
                    
                    <input type="submit"  name="search"  value="Search"><br><br>
              
                   </fieldset>
            </form>   
              
        </h4>

        <?php
            require("../model/db.php");

            $query = "SELECT * FROM bus_ticket";
            $query_run = mysqli_query($connection, $query);
            $check_bus_ticket = mysqli_num_rows($query_run) > 0;

            if ($check_bus_ticket) {
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
      
        <fieldset style="width: 70%; margin:0 auto; margin-top: 25px;">
                <table style="width:100%; margin:0 auto; margin-top: 25px;">
                    <tbody>
                        <tr>
                            
                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <img src="<?php echo $row['image']; ?>" alt="" width="80%"><br>
                                      
                                        <strong><h2><?php echo $row['bus_operators_name']; ?></h2></strong>
                                        <strong><h3><?php echo $row['bus_ticket_type']; ?></h3></strong></span>
                                        <h4>Starting Point: <?php echo $row['bus_start_location']; ?></h4></span>
                                        <h4>Ending Point: <?php echo $row['bus_end_location']; ?></h4></span>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                    <h3>Departure Time:<br>
                                         <?php echo $row['bus_departure_time']; ?></h3>
                                        
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                    <h3>Arrival Time:<br>
                                         <?php echo $row['bus_arrival_time']; ?></h3>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                    <h3>Available Seat:
                                         <?php echo $row['bus_available_seat']; ?></h3>
                                    </dl>
                                </ul>
                            </td>

                            <td>
                                <ul class="bus-ticket-info">
                                    <dl>
                                        <h3>Price:
                                        ৳<?php echo $row['bus_ticket_price']; ?></h3>
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
echo "No bus ticket found";
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
