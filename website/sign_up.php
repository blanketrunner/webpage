<!DOCTYPE html>
<html>
<head>
<title>Assignment 2 Homepage</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>


<script src="http://code.jquery.com/jquery-latest.js"></script>
   <script type="text/javascript">
      function setup_country_change(){
         //check whether country section is changed.
         $('#country').change(update_states);
      }
      
      function update_states(){
         //assigns the selected country to country variable.
         var country = $('#country').val();
         
         //get_cities.php performs when the country is selected.
         //call the function(show_cities) when the data is returned from get_cities.php.
         $.get('get_state.php?country='+country,show_states);
      }
      
      function show_states(states){
        //returned data from get_cities.php is assigned to cities
	     //change the field(drop down list)
         $('#state').html(states);
      }

      //When the page is loaded, function (setup_country_change())is called.
      $(document).ready(setup_country_change);
	  
	  
</script>




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
				
		<div class="left-nav"></div>
				
		<div class="main-middle">
		<div id="main-signup">	
		
		<form action="" method="post" name="order" id="order">
		<p>
	
			<label class="form" for="username">Username:</label>
			<input name="username" id="username" type="text" /><br />
			
			<label class="form" for="pword">Password:</label>
			<input name="password" id="password" type="text" /><br />
			
			<label class="form" for="repeat">Repeat password:</label>
			<input name="repeat" id="repeat" type="text" /><br />
						 
			<label class="form" for="firstname">First name:</label>
			<input name="firstname" id="firstname" type="text" /><br />			 
						 
			<label class="form" for="surname">Surname:</label>
			<input name="surname" id="surname" type="text" /><br />


		<label class="form" for="inputdob">DOB</label><input type="date" name="dob" id="dob"><br />


			
		    <label class="form" for="email">Email address:</label>
			<input name="email" id="email" type="text" /><br />
			
			  <label class="form" for="gender">Gender:</label><br />
			  <input type="radio" name="gender" value="Female" checked> female<br>
			  <input type="radio" name="gender" value="Male"> male<br>
			  <input type="radio" name="gender" value="Other"> other<br>
			  

  <table>
         <tr>
            <th>Country: </th>
            <td>
               <select name="country" id="country">
                  <option value="" selected="selected">Please Select Country</option>
                  <option value="au">Australia</option>
                  <option value="cn">China</option>
                  <option value="uk">United Kingdom</option>                  
                  <option value="us">United States</option>
               </select>
            </td>
         </tr>

		 <tr>
           <td name ="state" id="state" ></td>
		 </tr>

      </table>
	  
	  <p>City: <input type="text" id="city" name= "city" value="..."></p>

			<input type="submit" value="Submit" name = "submit" class="sub1" />
			<input type="reset" value="Reset" name = "reset" class="sub1" />
			
		</p>
			</form>
		
		<script>
		$(document).ready(function(){
   		$("#state").click(function(){	
   		   	var value=$('#state').val();
   		   	
   		   	$("#city").val(value);
		});
		});
		</script>

		
<?php
include('db_conn.php'); //db connection

if(isset($_POST['submit']))
{
	  $username = $_POST["username"];
	  $firstname = $_POST["firstname"];
	  $surname = $_POST["surname"];
	  $email = $_POST["email"];
	  $password = $_POST["password"];
	  $retype = $_POST["repeat"];
	  $access = '2';
	  $dob = $_POST["dob"];
	  

	    //setting the error message
    $error="";
       
    //name validation
    if($username==""){
    	$error.="* Please type your username"."<br/>";
    }
	if($firstname=="" || $surname==""){
    	$error.="* Please type your name"."<br/>";
    }
    //password validation
    if($password==""){
    	$error.="* Please type the password"."<br/>";
    }
	if ($password != $retype) {
		$error.="* Passwords do not match"."<br/>";
	}
   
   elseif(strlen($password)<6 && strlen($password)>8){
    	//if the password is under 6 and over 8 characters
    	$error.="* The password must be 6-8 characters"."<br/>";
    }
    elseif(!preg_match("#[0-9]+#", $password)){
    	//if the password does not include any number
    	$error.="* Password must include at least one number!<br/>";
	}
 	elseif(!preg_match("#[a-z]+#", $password)){
 		//if the password does not include any letter
		$error.="* Password must include at least one lowercase letter!<br/>";
	}
 	elseif(!preg_match("#[A-Z]+#", $password)){
 		//if the password does not include any uppercase letter
		$error.="* Password must include at least one uppercase letter!<br/>";
	}
	
	//email validation
	if($email==""){
        $error.="* Please type your email address"."<br/>";
	}elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE){
		//if the email is not proper in format
		$error.="* Please type the correct format of email address"."<br/>";
    }
	
	
		
	$query = "SELECT `Email` FROM `Customers` WHERE `email` = '$email'";
	$result = $mysqli->query($query);
	if ($result->num_rows > 0) { 
		$error.="Account with that email address already exists"."<br/>";
	}

	if($error==""){
    	//encrypt password
    	$encrypt_password=MD5($password);
		//$encrypt_password=$password;
    	$insertquery="INSERT INTO `Customers`(`Username`, `Password`, `Name`, `DOB`, `Email`, `Access`) VALUES ('$username','$encrypt_password','firstname','$dob','$email','$access')";

		if ($mysqli->query($insertquery) === TRUE) {
			  echo "You have successfully registered your account";
			  echo "<br>";
			  echo '<a href="index.php">back to main page</a>';
		    }
		    else {
			  echo "error " . $query . "<br>" . $mysqli->error;
		    }

	session_unset(); 
 
	   
	  // header('location: ./confirm-new.php');

	}

}	
	echo "<hr>";
	if (isset($error)) {
		echo $error; 
	} 
	else echo "* These fields must be filled <BR/>
	Password must be 6-8 characters, include at least one number,
	<BR/> one lowercase letter, and at least one uppercase letter";	
	
?>
		
		</div>	
		</div>
		<div class="right-nav"></div>
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
