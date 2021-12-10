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
   
    <title>Air</title>
    <header>
    
           <?php
            include './header.php';
            ?>
</header>
</head>

<body>




    <main style="padding: 20px 70px 20px 70px; ">
        
            <h1><Strong>Air Ticket</Strong></h1>
            <h4>
            <form>
        
                <fieldset>
                    <legend><h3>Air Travel Information</h3></legend>
              
                    <h4>Destination</h4>
                    <label>From:</label>

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

                        <label>To:</label>

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
                        <label>Seat Catagory </label>
                        <select>
                        <option value="class">Class</option>
                        <option value="bussiness class">Business Class</option>
                        <option value="economy">Economy</option>
                        <option value="premium economy">Premium Economy</option>

                        </select>
                        
                        
                        <label for="date">Travel Date:</label>
                     <input type="date" name="date" id="date"> 
                     
              
                    
                    <input type="submit"  name="search"  value="Search"><br><br>
              
                   </fieldset>
            </form>   
              
        </h4>
    </main>
    <div class="jumbotron text-center">
  <h1>Air Ticket Search</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="search">
      <table class="table table-hover">
      <thead>
        <tr>
        <th>
            
        </th>
          <th>Airline Name</th>
          <th>Flight No.</th>
          <th>Ticket Type</th>
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
        </tr>
      </thead>
      <tbody id="output">
        
      </tbody>
    </table>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'./Search/air_search.php',
        data:{
          name:$("#search").val(),
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

