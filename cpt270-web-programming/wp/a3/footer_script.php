<?php
echo "<footer>\n";
echo "\t\t<hr><h1>Additional Links</h1>\n";
echo "\t\t<a class=\"navigation_image\" href=\"index.php\"><img src=\"img/logos/gtp_new_logo_tree_only.png\"\n";
echo "\t\t\twidth=\"50px\" height=\"50px\" alt=\"The new logo of Golden Tree Productions. It has a \n";
echo "\t\t\t\t\t\tgolden tree sprouting out of what looks a book.\"\n";
echo "\t\t></a>\n";
echo "\t\t<nav id=\"bottomNavigation\">\n";
echo "\t\t\t<ul>\n";
echo "\t\t\t\t<li><a href=\"about_us.php\" class=\"\">About</a></li>\n";
echo "\t\t\t\t<li><a href=\"contact_us.php\" class=\"\">Contact Us</a></li>\n";
echo "\t\t\t\t<li><a href=\"privacy.php\" class=\"\">Privacy Policy</a></li>\n";
echo "\t\t\t\t<li><a href=\"returns_and_refunds.php\" class=\"\">Returns & Refunds</a></li>\n";
echo "\t\t\t\t<li><a href=\"terms_and_conditions.php\" class=\"\">Terms & Conditions</a></li>\n";
echo "\t\t\t\t<li><a href=\"#topNavigation\" class=\"\">Top</a></li>\n";
echo "\t\t\t</ul>\n";
echo "\t\t</nav>\n";
echo "\t\t<div id=\"finalMessage\">&copy; Golden Tree Productions,\n";
echo "\t\t\t<span id=\"currentYear\"></span>. Built by Dallas Hall - s3461243.\n";
echo "\t\t</div>\n";
echo "\t\t<!-- Using JavaScript to add the current year into the page dynamically, this idea was taken from the unit's\n";
echo "\t\tweek 5 (?) lecture.-->\n";
echo "\t\t<script type=\"text/javascript\" src=\"js/getDate.js\"></script>\n";
echo "\t</footer>\n";
require_once("download_links.php");
?>