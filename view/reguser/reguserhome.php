<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registerd user</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] ."</h1>"; ?>
    <a href="../../control/logout.php">Logout</a>
</body>
</html>


<?php
	}
    else{
		header('location: ../../control/logout.php');
	}
?>