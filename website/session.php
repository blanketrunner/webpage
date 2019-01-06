  <?php
//starting session
/*
 When the user clicks the ‘edit’ or ‘delete’ button for a specific comment,
you should save the mode (edit or delete) by using $_SESSION[‘mode’] and
the id of the comment by using $_SESSION[‘id’].
*/

session_start();

// The if isset line below is to initialise ONLY once at the start.
// Tutor was saying that session_start(); gets called every time an include line is called in another file
// and so if I initialise every time the values will get overwritten

if (!isset ($_SESSION['id'])) {
	//$_SESSION['mode']="";
	$_SESSION['id']="";
	$_SESSION['name']="";
	$_SESSION['password']="";
	$_SESSION['access']="";
	$_SESSION['cart-amount']="";
	$_SESSION['item-code']="";
	$_SESSION['total']="";
	
}

//if the session for username has not been set, initialise it
/*if(!isset($_SESSION['session_user'])){
	$_SESSION['session_user']="";
 
	
}
//save username in the session 
//$session_user=$_SESSION['session_user'];
*/
?>

