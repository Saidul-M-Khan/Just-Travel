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

      <!-- <style>

        /* Style the navigation bar */
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}
   
   </style> -->


    
    <title>Bus</title>


    <header>
    
    <?php
                include './header.php';
                ?>
    </header>
</head>

<body>


<br><br><br>



    <div class="jumbotron text-center">
  <h1>Bus Ticket Search</h1>
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
          <th>Operator Name</th>
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
        url:'./Search/bus_search.php',
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
