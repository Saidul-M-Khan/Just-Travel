<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/adminhome.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-trip icon'></i>
        <div class="logo_name">Just Travel</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>

      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bxs-hotel' ></i>
         <span class="links_name">Hotel</span>
       </a>
       <span class="tooltip">Hotel</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-calendar-event' ></i>
         <span class="links_name">Event</span>
       </a>
       <span class="tooltip">Event</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-location-plus' ></i>
         <span class="links_name">Place</span>
       </a>
       <span class="tooltip">Place</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bxs-offer' ></i>
         <span class="links_name">Offers</span>
       </a>
       <span class="tooltip">Offers</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-bus' ></i>
         <span class="links_name">Bus ticket</span>
       </a>
       <span class="tooltip">Bus ticket</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bxs-plane-alt' ></i>
         <span class="links_name">Air ticket</span>
       </a>
       <span class="tooltip">Air ticket</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bxs-ship' ></i>
         <span class="links_name">lounch ticket</span>
       </a>
       <span class="tooltip">lounch ticket</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bxs-bookmark-plus' ></i>
         <span class="links_name">Booking Info</span>
       </a>
       <span class="tooltip">Booking Info</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-money' ></i>
         <span class="links_name">User Payment</span>
       </a>
       <span class="tooltip">User Payment</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-diamond' ></i>
         <span class="links_name">Merchant Payment</span>
       </a>
       <span class="tooltip">Merchant Payment</span>
     </li>


     <li class="profile">
         <div class="profile-details">
           <img src="../../assets/admin.png" alt="profileImg">-->
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['username']; ?></div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <a href="../../control/logout.php"><i class='bx bx-log-out' id="log_out" ></i></a> 
     </li>
    </ul>
  </div>
  
  <section class="home-section">
      <div class="text">Dashboard</div>

      <div class="cards">
        <div class="card-single">
          <div>
            <h3> crad 1</h3>
            <h4> details</h4>
          </div>
        </div>
      </div>

  </section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>

<?php
	}else{
		header('location: ../../control/logout.php');
	}
?>
