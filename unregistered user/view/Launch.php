<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/banner.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/body.css">
        <!-- <link rel="stylesheet" href="./css/launch.css"> -->
       
    
    <title>Launch</title>
    <header>
    
<?php
            include './header.php';
            ?>
</header>
</head>

<body>
    <main >
        
            <h1><Strong>Main Section</Strong></h1>
            <h4>
            
                <fieldset>
                    <legend><h3>Launch Travel Information</h3></legend>
              
                    <h4>Destination</h4>
                    <label>From:</label>

                    <select name="start_location" id="start_location">
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

                    <select  name="end_location" id="end_location">
                        <option value=""></option>
                        <option value="sadarghat">Sadarghat</option>
                        <option value="cox's bazar">Cox's Bazar</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="kuakata">Kuakata</option>
                        <option value="chandpur">Chandpur</option>
                        <option value="khulna">Khulna</option>
                        </select>
                        
                          <!-- <label>Cabin Type:</label>
                        <select>
                            <option value=""></option>
                            <option value="vip">VIP</option>
                            <option value="upper deck">Upper Deck</option>
                            <option value="lower deck">Lower Deck</option>
                            <option value="standard cabin">Standard Cabin</option>
                            </select> -->
                            
                    

                    <label for="date">Travel Date:</label>
                     <input type="date" name="journey_date" id="journey_date"> 
                     
              
                     
                    <!-- <input type="submit"  name="search launches" id="search" value="Search launches"><br><br> -->
                    <button id="search" class="search-btn button" onclick="toggle()"> <label for="show">Search</label> </button>
                    <div>
                        <input type="checkbox" id="show">
                        <div class="output-container">
                            <label for="show" class="close-btn fas fa-times" style="color:black;" title="close"></label>
                            <div class="table-wrapper">
                                <table class="fl-table">
                                    <thead>
                                        <tr>

                                            <th>Operator Name</th>
          <th>Deck Type</th>
          <th>Ticket Price</th>
          <th>Ticket Available</th>
          <th>Seat Available</th>
          <th>Destination</th>
          <th>Start Location</th>
          <th>End Location</th>
          <th>Journey Date</th>
          <th>Arrival Time</th>
          <th>Departure Time</th>
          <th>Image</th>
                                            <!-- <th>Buy</th> -->
                                        </tr>
                                    </thead>
                                    <tbody id="output">

                                    <tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                  
                  </fieldset>
               
            </h4> 
        </main>

       

<script type="text/javascript">
  $(document).ready(function(){
    $("#search").click(function(){
      $.ajax({
        type:'POST',
        url:'./Search/launch_search.php',
        data:{
         
          start_location:$("#start_location").val(),
          end_location:$("#end_location").val(),
          journey_date:$("#journey_date").val(),
        },
        
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });
</script>

    <footer>
        
    <?php
            include './footer.php';
            ?> 
    </footer>

    <script src="./js/header.js"></script>
</body>

</html>
<?php
	}else{
		header('location:home.php');
	}
?>