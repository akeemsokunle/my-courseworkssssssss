<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My stories</title>
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link rel="stylesheet" href="Assets/CSS/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="Assets/CSS/tempcolor.css">
</head>
<body>
<header class="grid-container">
    <img class="grid-15"  src="Assets/image/mine.png" alt="CSDM" id="cslogo">
    <h1 class="grid-60">Welcome to my world of unique Stories</h1>

</header>
<nav class="grid-container">
    <ul>
        <li><a href="Home">Homepage</a></li>
        <li><a href="story1.html">Sport stories</a></li>
        <li><a href="story2.html">Music stories</a></li>
        <li><a href="story3.html">Jokes</a></li>
        <li><a href="story4.html">About Us</a></li>

    </ul>
</nav>
<main class="grid-container" >
    <section class="grid-100">
        <h3 style="text-align:center">My Favourite sport stories include:</h3>

        <ul>
            <li>football and my main team is Manchester united</li>
            <li>Hockey</li>
            <li>snowboard</li>
            <li>Tennis</li>
        </ul>
       </section>

</main>


</body>

<footer class="grid-container">
    <p>&copy Akeem web2023 </p>
</footer>
</body>
</html>