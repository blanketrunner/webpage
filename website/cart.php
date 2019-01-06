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

<?php
include('db_conn.php');
	$_SESSION["total"] = $_POST["total"]; 
	$total = $_SESSION["total"];
	$quantity = $_POST["quantity"];
	$desc = $_SESSION['item-desc'];
	$price = $_SESSION['item-price'];
	$item_code = '1';
/*
	$query = "SELECT `description`,`price` FROM `Stock` WHERE (`number` = '$item_code')";
	$result = $mysqli->query($query);
	
	if ($result->num_rows > 0) { 
		$row = $result->fetch_assoc()
		$desc= $row["description"];
		$price = $row["price"];
	}

*/
?>	
	
	<div class="main-body">
		<div class="spacer"></div>
		<hr>
		<h2 class="cart">SHOPPING CART</h2>
		<hr>
		<ul class="message">
				<li class="message">ITEM</li>
  				<li class="message">DESCRIPTION</li>
  				<li class="message">QUANTITY</li>
				<li class="message">PRICE</li>
			</ul>
		<hr>
		
		<div class="cart-row">
			<div class="cart-col">
				<img src="img/table.png" alt="image" class="cart-img" />
			</div>
			<div class="cart-col">
				<ul class="cart-large">
						<li class="cart-large"><?php echo "$desc"; ?></li>
					</ul>
			</div>	
			
			<div class="cart-col">
				<ul class="cart-large">
						<li class="cart-large">Quantity:  <?php echo "$quantity"; ?></li>

					</ul>
			</div>	
			<div class="cart-col">
				<ul class="cart-large">
						<li class="cart-large">Price:  <?php echo "$price"; ?></li>

					</ul>
			</div>	
			
		</div>
		
		<hr>
		
		<div class="cart-row">
			<div class="cart-col-total">
				<ul class="cart-large">
						<li class="cart-large">Total cost: <?php echo "$total"; ?></li>

					</ul>
			</div>	
		</div>
		<hr>	
		<div class="cart-submit">
			<a href="payment.php" class="pay-btn">CHECK OUT NOW</a>
		</div>
		
		<div class="spacer"></div>
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