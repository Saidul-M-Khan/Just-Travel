

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
        
            <h1><Strong>Hotels</Strong></h1>



            <h4>
            <form>
        
                <fieldset>
                    <legend><h3>Hotel Information</h3></legend>
              
                    
                    <label>Destination:</label>

                    <select>
                        <option value="dhaka">Dhaka</option>
                        <option value="sylhet">Sylhet</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="khulna">Khulna</option>
                        <option value="cox's bazar">Cox's Bazar</option>
                        </select>
                        <!-- <br><br> --> 

                        <label for="date">Booking Date:</label>
                     <input type="date" name="date" id="date"> 
                     
              
                    
                    <input type="submit"  name="search"  value="Search"><br><br>
              
                   </fieldset>
            </form>   
              
        </h4>

        <?php
            require("../model/db.php");

            $query = "SELECT * FROM hotel";
            $query_run = mysqli_query($connection, $query);
            $check_hotel = mysqli_num_rows($query_run) > 0;

            if ($check_hotel) {
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
      
        
      <div>
      <h1>
                                <?php echo $row['hotel_name']; ?>
                            </h1>

                            <p style="margin-top: 20px;" </i><strong>&nbsp;&nbsp;&nbsp;Location:
                                </strong>
                                <?php echo $row['hotel_location']; ?>
                            </p>
                            <p style="margin-top: 15px;"<strong>&nbsp;&nbsp;&nbsp;Regular Booking:
                                </strong>
                                <del><span style="color:red">৳<?php echo $row['regular_booking_price']; ?></span></del>
                            </p>
                            <br>


                            <div>
                            <p style="margin-top: 15px;"<strong>&nbsp;&nbsp;&nbsp;Discount Booking:
                                </strong>
                            <span class="price text" >৳<?php echo $row['discounted_booking_price']; ?></span>

                </p>  
                        </div>

                            <div>
                            <img src="<?php echo $row['hotel_image']; ?>" alt=""style="width:50%">
                             
                            <div>
                            <p style="margin-top: 15px;"<strong>&nbsp;&nbsp;&nbsp;Description:
                                </strong>
                            <span class="price text" ><?php echo $row['hotel_services']; ?></span>

                </p>  
                        </div>

                        </div>

                    </div>

                    <?php


                }
            } else {
                echo "No hotel found";
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
    
    