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
echo "\t\t<fieldset id=\"shoppingArea\">\n";
echo "\t\t\t<legend>Cart & Checkout</legend>\n";
echo "\t\t\t<form action=\"cart.php\" class=\"shoppingButton\">\n";
echo "\t\t\t\t<input id=\"buttonCart\" type=\"submit\" value=\"Shopping Cart\">\n";
echo "\t\t\t</form>\n";
echo "\t\t</fieldset>\n";
/* Using this to set the breadcrumbs dynamically for each page*/
switch($currentFilename) {
	case 'about_us':
		echo "\t\t<span class=\"breadcrumbs\"><a href=\"index.php\">Home</a></span><span class=\"breadcrumbs\"> About Us</span>\n";
	break;
	case 'blog':
		echo "\t\t<span class=\"breadcrumbs\"><a href=\"index.php\">Home</a></span><span class=\"breadcrumbs\"> Blog</span>\n";
		break;
	case 'contact_us':
		echo "\t\t<span class=\"breadcrumbs\"><a href=\"index.php\">Home</a></span><span class=\"breadcrumbs\"> Contact Us</span>\n";
		break;
	case 'index':
		echo "\t\t<span class=\"breadcrumbs\">Home</span>\n";
		break;
	case 'privacy':
		echo "\t\t<span class=\"breadcrumbs\"><a href=\"index.php\">Home</a></span><span class=\"breadcrumbs\"> Privacy</span>\n";
		break;
	case 'product':
		echo "\t\t<span class=\"breadcrumbs\"><a href=\"index.php\">Home</a></span><span class=\"breadcrumbs\"><a href=\"products.php\">Shop</a></span><span class=\"breadcrumbs\"> Product</span>\n";
		break;
	case 'products':
		echo "\t\t<span class=\"breadcrumbs\"><a href=\"index.php\">Home</a></span><span class=\"breadcrumbs\"> Shop</span>\n";
		break;
	case 'returns_and_refunds':
		echo "\t\t<span class=\"breadcrumbs\"><a href=\"index.php\">Home</a></span><span class=\"breadcrumbs\"> Shop</span>\n";
		break;
	case 'terms_and_conditions':
		echo "\t\t<span class=\"breadcrumbs\"><a href=\"index.php\">Home</a></span><span class=\"breadcrumbs\"> Terms &amp; Conditions</span>\n";
		break;
}
echo "\t\t<hr>";
echo "\t</header>\n";
?>