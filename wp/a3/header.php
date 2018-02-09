<?php
echo "<header>";
echo "		<a class=\"navigation_image\" href=\"index.php\"><img src=\"img/logos/gtp_new_logo_tree_only.png\" width=\"50px\"";
echo "														  height=\"50px\"";
echo "														  alt=\"The new logo of Golden Tree Productions. It has a golden tree sprouting out of what looks a book.\">";
echo "			<h1>Golden Tree Productions</h1></a>";
echo "		<!--The navigation menus were designed using the course textbook chapter 18.-->";
echo "		<nav id=\"topNavigation\">";
echo "			<ul>";
echo "				<li><a href=\"index.php\" class=\"current\">Home</a></li>";
echo "				<li><a href=\"products.php\" class=\"\">Shop</a></li>";
echo "				<li><a href=\"blog.php\" class=\"\">Blog</a></li>";
echo "				<li><a href=\"contact_us.php\" class=\"\">Contact Us</a></li>";
echo "				<li><a href=\"#bottomNavigation\" class=\"\">Bottom</a></li>";
echo "			</ul>";
echo "		</nav>";
echo "		<!--The idea of using a fieldset was sourced from course textbook, chapter 7.-->";
echo "		<fieldset id=\"membersArea\">";
echo "			<legend>Members Area</legend>";
echo "			<form action=\"login.php\" class=\"memberButtons\">";
echo "				<input id=\"buttonLogin\" type=\"submit\" name=\"login\" value=\"Login\">";
echo "			</form>";
echo "			<form action=\"signup.php\" class=\"memberButtons\">";
echo "				<input id=\"buttonSignUp\" type=\"submit\" name=\"signUp\" value=\"Sign Up\">";
echo "			</form>";
echo "		</fieldset>";
echo "		<span class=\"breadcrumbs\">Home</span>";
echo "	</header>";
?>