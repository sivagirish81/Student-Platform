<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
unset($_SESSION);
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location:login.html");
exit;
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	</form>