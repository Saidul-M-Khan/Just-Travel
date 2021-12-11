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

    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/banner.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/body.css">

        <style type="text/css">
          .title{
  position: absolute;
  top: 60%;
  left: -0.01%;
}

.title h1{
  color: rgb(138, 43, 226);
  font-size: 40px;
  font-style: Rage Italic;
  position: absolute;
  top: -50%;
  left: 27%
  

}

.button{
  position: absolute;
  top: 44%;
  left: 50%;
  transform: translate(-50%,-50%);
}

.btn{
  border: 1px solid #fff;
  padding: 20px 40px;
  color: #fff;
  text-decoration: none;
  transition: 0.6s ease;
}

.btn:hover{
  background-color: #fff;
  color: #000;
}

      .signup-op a{
        text-decoration: none;
        border: 2px solid #000;
        background-color: #aa80ff;;
        padding: 10px 50px;
        color: black;
        transition: 0.8s ease;
        position: relative absolute;
        top: 60%;
        left: 5%; 
      }
      .signup-op a:hover{
        background-color: white;
      }
    </style>
        
       
       
    <title>Home</title>
    <header>
       
    <?php
            include './header.php';
            ?>
    </header>
    
</head>

<body>
    
    
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../images/image1.jpg" style="width:100%; height:460px">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../images/image2.jpg" style="width:100%;height:460px">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../images/image3.jpg" style="width:100%;height:460px">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<div class="title">
      <h1>Welcome TO JUST Travel!!!</h1>
      <div style="margin: 20px 35%;" class="signup-op">
        <a href="registration.php">SignUp</a>
        <a href="login.php">SignIn</a>
      </div>


    <footer>
       
    <?php
            include './footer.php';
            ?>
    </footer>
</body>

<script src="./js/header.js"></script>
<script src="./js/home.js"></script>


</html>

<?php
	}else{
		header('location:login.php');
	}
?>