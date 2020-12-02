<h1>Welcome to practical test!</h1>
<br>
<br>
 <form action="index.php" method="post">
  <div class="container">
    <label for="psd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
    <button type="submit">submit</button>
  </div>

</form> 
<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {	
	// pwd less than 10
	if (strlen($_POST["pwd"]) < 10) {
		header("Location: /index.html");
	}
	// pwd in 100.txt
	$pwd_100 = file("100.txt");
	foreach($pwd_100 as $pwd) {
		if ($_POST["pwd"] == $pwd) {
			header("Location: /index.html");
		}
	}
	// password meets requirements
	$_SESSION["pwd"] = $_POST["pwd"];
	header("Location: /welcome.php");
}

?>
