<?php
echo "<footer>";
echo "		<h2>Additional Links</h2>";
echo "		<a class=\"navigation_image\" href=\"index.php\"><img src=\"img/logos/gtp_new_logo_tree_only.png\"";
echo "			width=\"50px\" height=\"50px\" alt=\"The new logo of Golden Tree Productions. It has a ";
echo "						golden tree sprouting out of what looks a book.\"";
echo "		></a>";
echo "		<nav id=\"bottomNavigation\">";
echo "			<ul>";
echo "				<li><a href=\"about_us.php\" class=\"\">About</a></li>";
echo "				<li><a href=\"contact_us.php\" class=\"\">Contact Us</a></li>";
echo "				<li><a href=\"privacy.php\" class=\"\">Privacy Policy</a></li>";
echo "				<li><a href=\"returns_and_refunds.php\" class=\"\">Returns & Refunds</a></li>";
echo "				<li><a href=\"terms_and_conditions.php\" class=\"\">Terms & Conditions</a></li>";
echo "				<li><a href=\"#topNavigation\" class=\"\">Top</a></li>";
echo "			</ul>";
echo "		</nav>";
echo "		<div id=\"finalMessage\">&copy; Golden Tree Productions,";
echo "			<span id=\"currentYear\"></span>. Built by Dallas Hall - s3461243.";
echo "		</div>";
echo "		<!-- Using JavaScript to add the current year into the page dynamically, this idea was taken from the unit's";
echo "		week 5 (?) lecture.-->";
echo "		<script type=\"text/javascript\" src=\"js/getDate.js\"></script>";
echo "</footer>";
?>