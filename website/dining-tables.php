<!DOCTYPE html>
<html>
<head>
<title>Assignment1 Homepage</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<div class="wrapper">
	<!-- Store Logo -->
	
	<div class="top-wrapper">
	<div class="logo-wrapper">
		<h1 class="store-name">OKIA</h1>
	</div>
	
	<div class="topnav-wrapper">
		
		<!-- Top Navigation bar  -->
		<div class="top-menu">
		<ul class="top">
 			<li class="top"><a href="index.php">Home</a></li>
  			<li class="top"><a href="#news">Stores</a></li>
  			<li class="top"><a href="#contact">Contact</a></li>
  			<li class="top"><a href="sign_up.php">Sign Up</a></li>
		</ul>

		</div>		
		<!-- Shopping cart  -->
		<div class="cart-menu">  
			<ul class="cart">
				<?php 
				include("session.php");
				if ($_SESSION['id'] == "") {
					echo '<li class="cart"><a href="sign_in.php">Sign in</a></li>';
				}		
				if ( $_SESSION['access'] == "1") {
					
					echo '<li class="cart"><a href="confirm-out.php">Sign out</a></li>';
					echo '<li class="cart"><a href="admin.php">Admin</a></li>';
				}		
				if ( $_SESSION['access'] == "2") {
					echo '<li class="cart"><a href="confirm-out.php">Sign out</a></li>';
					echo '<li class="cart"><a href="cart.php">Cart</a></li>';
				}
				?>
			</ul>

		</div>			
	</div>
	
	
	<div class="search-wrapper">
		<form>
		  <input class="search" type="text" name="search" placeholder="Search..">
		</form>
	</div>		
</div>


	<div class="dropdown">
  		<button class="dropbtn">Kitchen</button>
  		<div class="dropdown-content">
    		<a href="kitchen.php">Dining Tables</a>
    		<a href="#">Kitchen-2</a>
    		<a href="#">Kitchen-3</a>
  		</div>
  	</div>
  	
  	<div class="dropdown">	
  		<button class="dropbtn">Bedroom</button>
  		<div class="dropdown-content">
    		<a href="#">Bedroom-1</a>
    		<a href="#">Bedroom-2</a>
    		<a href="#">Bedroom-3</a>
  		</div>
	</div>
	
	<div class="dropdown">	
  		<button class="dropbtn">Living Room</button>
  		<div class="dropdown-content">
    		<a href="#">Living-1</a>
    		<a href="#">Living-2</a>
    		<a href="#">Living-3</a>
  		</div>
	</div>
	
	<div class="dropdown">	
  		<button class="dropbtn">Dining Room</button>
  		<div class="dropdown-content">
    		<a href="#">Dining-1</a>
    		<a href="#">Dining-2</a>
    		<a href="#">Dining-3</a>
  		</div>
	</div>
	
	<div class="dropdown">	
  		<button class="dropbtn">Bathroom</button>
  		<div class="dropdown-content">
    		<a href="#">Bathroom-1</a>
    		<a href="#">Bathroom-2</a>
    		<a href="#">Bathroom-3</a>
  		</div>
	</div>
	
	<div class="main-body">
		<div class="spacer"></div>
				
		<div class="left-nav">
			<ul class="left">
				<li id="nav-title">Categories</li>
				<li class="left current-cat"><a href="#">Dining Tables</a></li>
  				<li class="left"><a href="#">Kitchen 2</a></li>
  				<li class="left"><a href="#">Kitchen 3</a></li>
				<li class="left"><a href="#">Kitchen 4</a></li>  				
			</ul>
			<br>
			<ul class="left">
				<li id="nav-title">Filters</li>
			</ul>
			<form class="filters">
			  <input type="radio" name="filter" value="Price" checked> Price<br>
			  <input type="radio" name="filter" value="Brand"> Brand<br>
			  <input type="radio" name="filter" value="Sale"> On Sale<br>
			</form> 
 	
		</div>		
		<div class="main-middle">
			<a href="item-table.php">
				<img src="img/tables.png" alt="image" class="tables-img"/>
			</a>
		</div>		
		<div class="spacer"></div>		
		<div class="footer">
			<ul class="footer">
				<li class="footer"><a href="#">About Us</a></li>
  				<li class="footer"><a href="#"> - My Account</a></li>
  				<li class="footer"><a href="#"> - Contact Us</a></li>
				<li class="footer"><a href="#"> - Gift Cards</a></li> 
				<li class="footer"><a href="#"> - Careers</a></li> 
				<li class="footer"><a href="#"> - Terms</a></li> 
				<li class="footer"><a href="#"> - Returns</a></li> 		
			</ul>
			<ul class="footer-name">
				<li class="footer-name">Mark Grassi</a></li>
  				<li class="footer-name"> - 972367</a></li>
  			</ul>
		</div>

		
	</div>
</div>	

</body>


</html>