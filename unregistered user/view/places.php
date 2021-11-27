
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
        
            <h1><Strong>Tourist Places</Strong></h1>
            <h4>
            <form>
        
                <fieldset>
                    <legend><h3>Find Tourist Spot</h3></legend>
              
                    
                    <label>Destination:</label>

                    <select>
                        <option value=""></option>
                        <option value="kuakata">Kuakata</option>
                        <option value="sundarban">Sundarban</option>
                        <option value="saint martin">Saint Martin</option>
                        <option value="srimangal">Srimangal</option>
                        <option value="bandarban">Bandarban</option>
                        <option value="cox's bazar">Cox's Bazar</option>
                        </select>
                       
                    <input type="submit"  name="search"  value="Search"><br><br>
              
                   </fieldset>
            </form>   
              
        </h4>
      
        
        <?php
                require("../model/db.php");

                $query = "SELECT * FROM places";
                $query_run = mysqli_query($connection, $query);
                $check_place = mysqli_num_rows($query_run) > 0;

                if ($check_place) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>

                        <div class="card">
                            <img src="<?php echo $row['place_image']; ?>" alt="" style="width:50%">
                            <div class="card-container">
                                <h1><?php echo $row['place_name']; ?></h1>

                                <div>
                                    <p><?php echo $row['place_description']; ?></p>
                                </div>
                            </div>
                        </div>
                <?php


                    }
                } else {
                    echo "No places found";
                }

                ?>
            </div>

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
