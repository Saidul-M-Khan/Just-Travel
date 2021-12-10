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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

    <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/banner.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/body.css">
        

        
       
    <title>Places</title>

    <header>
    
<?php
            include './header.php';
            ?>
</header>

</head>

<body>



        
            <h1><Strong>Tourist Places</Strong></h1>
            <h4>
            

            <label>Destination:</label>         
            <form action=""> 
                       <select name="places" onchange="showPlaces(this.value)">
                       <option value=""></option>
                        <option value="Kuakata Sea Beach">Kuakata</option>
                        <option value="Sundarban">Sundarban</option>
                        <option value="saint martin">Saint Martin</option>
                        <option value="srimangal">Srimangal</option>
                        <option value="bandarban">Bandarban</option>
                        <option value="cox's bazar">Cox's Bazar</option>
                          </select>
                  
        
                <!-- <fieldset>
                    <legend><h3>Find Tourist Spot</h3></legend>
              
                    
                    <label>Destination:</label>

                    <input type="text" id="search" placeholder="Search" />
                    <div id="display"></div>
                    <input type="submit"  name="search"  value="Search"><br><br> -->
              
                   <!-- </fieldset> -->
            </form> 
            <br><br>
            <br>
<div id="txtHint">...</div>  
              
        </h4>
        <script>
    function showPlaces(str) {
    if (str == "") {
      document.getElementById("txtHint").innerHTML = "";
      return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
    xhttp.open("GET", "./view/places_search.php?q="+str);
    xhttp.send();
  } 
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
