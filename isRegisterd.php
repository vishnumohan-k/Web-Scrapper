<?php
echo "<div class='container'><div class='row'>";

session_start();
	if(!isset($_SESSION['username']))
		{
		 "<a href='Login.html'><i class='glyphicon glyphicon-earphone'></i>Login</a>&nbsp|&nbsp<a href='Register.html'>Register</a>";
		}
		else
		{
		echo "<strong>Welcome </strong>";
		echo "<a href='Account.php'>";
		echo "<strong>".$_SESSION['username']."</strong>";
		//echo "&nbsp|&nbsp</a><a href='Wishlist.html'>Wishlist</a>&nbsp|&nbsp";
		//echo "&nbsp <a href='Logout.php' style='text-decoration:none'><i class='glyphicon glyphicon-off'></i> Log out</a>";
		}
	session_write_close ();

echo "</div></div>";
?>