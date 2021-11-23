<?php

session_start();
setcookie('flag', 'true', time() - 10, '/'); // Destroy the cookie
header('location: ../index.php'); // Redirect to the index page
