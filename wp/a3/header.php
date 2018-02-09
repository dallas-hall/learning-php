<?php
echo "<header>\n";
echo "\t\t<a class=\"navigation_image\" href=\"index.php\"><img src=\"img/logos/gtp_new_logo_tree_only.png\" width=\"50px\"\n";
echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t  height=\"50px\"\n";
echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t  alt=\"The new logo of Golden Tree Productions. It has a golden tree sprouting out of what looks a book.\">\n";
echo "\t\t\t<h1>Golden Tree Productions</h1></a>\n";
echo "\t\t<!--The navigation menus were designed using the course textbook chapter 18.-->\n";
echo "\t\t<nav id=\"topNavigation\">\n";
echo "\t\t\t<ul>\n";
echo "\t\t\t\t<li><a href=\"index.php\" class=\"current\">Home</a></li>\n";
echo "\t\t\t\t<li><a href=\"products.php\" class=\"\">Shop</a></li>\n";
echo "\t\t\t\t<li><a href=\"blog.php\" class=\"\">Blog</a></li>\n";
echo "\t\t\t\t<li><a href=\"contact_us.php\" class=\"\">Contact Us</a></li>\n";
echo "\t\t\t\t<li><a href=\"#bottomNavigation\" class=\"\">Bottom</a></li>\n";
echo "\t\t\t</ul>\n";
echo "\t\t</nav>\n";
echo "\t\t<!--The idea of using a fieldset was sourced from course textbook, chapter 7.-->\n";
echo "\t\t<fieldset id=\"membersArea\">\n";
echo "\t\t\t<legend>Members Area</legend>\n";
echo "\t\t\t<form action=\"login.php\" class=\"memberButtons\">\n";
echo "\t\t\t\t<input id=\"buttonLogin\" type=\"submit\" name=\"login\" value=\"Login\">\n";
echo "\t\t\t</form>\n";
echo "\t\t\t<form action=\"signup.php\" class=\"memberButtons\">\n";
echo "\t\t\t\t<input id=\"buttonSignUp\" type=\"submit\" name=\"signUp\" value=\"Sign Up\">\n";
echo "\t\t\t</form>\n";
echo "\t\t</fieldset>\n";
echo "\t\t<span class=\"breadcrumbs\">Home</span>\n";
echo "\t</header>\n";
?>