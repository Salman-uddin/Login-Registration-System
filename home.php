<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h2><strong>Hi!, </strong><span><?php echo $_SESSION['name']; ?></span></h2>
     <!-- <a href="logout.php">Logout</a> -->
     <a href="logout.php" class="btn">logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>