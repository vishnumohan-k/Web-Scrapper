<?php
echo "<div class='container'><div class='row'>";

session_start();
	if(!isset($_SESSION['username']))
		{
		echo "<a href='Login.html'><i class='glyphicon glyphicon-earphone'></i>Login</a>&nbsp|&nbsp<a href='Register.html'>Register</a>";
		}
		else
		{
		echo "<a href='Account.php'>";
		echo $_SESSION['username'];
		echo "&nbsp|&nbsp</a><a href='Wishlist.html'>Wishlist</a>&nbsp|&nbsp";
		echo "<a href='Logout.php' style='text-decoration:none'><i class='glyphicon glyphicon-off'></i>Log out</a>";
		}
	session_write_close ();

echo "</div></div>";
?>