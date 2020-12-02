<?php session_start(); ?>


<h1> Welcome to practical test!</h1>
<br>
<p>Your Password is:<?php echo $_SESSION["pwd"];?></p>
<br>
<form method="GET" action="index.php">
	<button type="submit">Back</button>
</form>
