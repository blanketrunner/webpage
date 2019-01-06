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
		<hr>
		<h2 class="cart">SHOPPING CART</h2>
		<hr>
		<ul class="message">
				<li class="message checkout">CHECKOUT:</li>
		</ul>
		<hr>

		<div class="left-nav-short"></div>		
		<div class="main-middle-short">
		<div id="main-signup">
		
		<form action="" method="post" name="order" id="order">
		<!--<h2 class="cart sub">Please enter details:</h2>-->

		<p>
<?php $total = $_SESSION['total'] ?>

			<label class="form" for="name">First Name:</label><br />
			<input name="name" id="name" type="text" /><br />
						 
			<label class="form" for="sname">Second Name:</label><br />
			<input name="sname" id="sname" type="text" /><br />
			
			<label class="form" for="address">Address 1</label><br />
			<input name="address" id="address" type="text" /><br />
			
			<label class="form" for="address2">Address 2</label><br />
			<input name="address2" id="address2" type="text" /><br /><br />
			
			<label class="form" for="price">Total $AUD</label><br />
			<input name="price" id="price" type="text" value = <?php echo "$total"; ?> /><br />

			<label class="form" for="card">Credit card type</label><br />
			<input name="card" id="card" type="text" /><br />
		
		    <label class="form" for="cnum">Credit card number</label><br />
			<input name="cnum" id="cnum" type="text" /><br />
			

				
			<input type="submit" value="Submit" name = "submit" class="sub1" />
			<input type="reset" value="Reset" name = "reset" class="sub1" />
			
					
		</p>
		</form>	
<?php
include('db_conn.php'); //db connection
if(isset($_POST['submit']))
	{
	  $name = $_POST["name"];
	  $sname = $_POST["sname"];
	  $address = $_POST["address"];
	  $address2 = $_POST["address2"];
	  $cnum = $_POST["cnum"];
	  
	    //setting the error message
    $error="";

    //name validation
    if($name==""){
		$error.="* Please type your name"."<br/>";
    }

    //address validation
    if($address==""){
    	$error.="* Please enter delivery name"."<br/>";
    }

	//card number verification
	if(strlen($cnum)<4 || strlen($cnum)>4){
    	//if the password is under 6 and over 8 characters
    	$error.="* The credit card number must be 4 numbers"."<br/>";
    }
    elseif(preg_match("#[a-z]+#", $cnum)){
    	//if the number includes characters
    	$error.="* The credit card number must be 4 numbers"."<br/>";
	}

	if($error==""){
		$cust_id = $_SESSION['id'];
		$paid = 'y';
		
		$insertquery="INSERT INTO `Trolley`(`cust_id`, `paid`) VALUES ('$cust_id','$paid')";
		$mysqli->query($insertquery);
		
		header('location: ./confirm-paid.php');
	}	
	
}
	
	if (isset($error)) {
		echo $error; 
	} 
	else echo "* These fields must be filled <br/>";

?>
		</div>	
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
