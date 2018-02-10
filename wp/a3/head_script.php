<?php
echo "<meta charset=\"UTF-8\">\n";
echo "\t<meta name=\"author\" content=\"Dallas Hall\">\n";
echo "\t<meta name=\"keywords\" content=\"Golden Tree Productions, Amanda Hall, Jack Egerton, Simply Tarot, Secrets of " .
 "Tarot, Tarot, Astrology, Psychic, Video Production, Video, Candle, Candles\">\n";
/* Using this to set the page title and description dynamically for each page*/
switch($currentFilename) {
	case 'about_us':
		echo "\t\t<meta name=\"description\" content=\"This is the about us page for Golden Tree Productions, which sells 
		video production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.\">\n";
		echo "\t\t<title>GTP - About Us</title>\n";
		break;
	case 'blog':
		echo "\t\t<meta name=\"description\" content=\"This is the blog for Golden Tree Productions, which sells 
		video production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.\">\n";
		echo "\t\t<title>GTP - Blog</title>\n";
		break;
	case 'contact_us':
		echo "\t\t<meta name=\"description\" content=\"This is the contact us page for Golden Tree Productions, which sells 
		video production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.\">\n";
		echo "\t\t<title>GTP - Contact Us</title>\n";
		break;
	case 'index':
		echo "\t\t<meta name=\"description\" content=\"This is the home page for Golden Tree Productions, which sells 
		video production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.\">\n";
		echo "\t\t<title>Golden Tree Productions</title>\n";
		break;
	case 'privacy':
		echo "\t\t<meta name=\"description\" content=\"This is the privacy policy page for Golden Tree Productions, which sells 
		video production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.\">\n";
		echo "\t\t<title>GTP - Privacy</title>\n";
		break;
	case 'product':
		echo "\t\t<meta name=\"description\" content=\"This is the single product page for Golden Tree Productions, which sells 
		video production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.\">\n";
		echo "\t\t<title>GTP - Product</title>\n";
		break;
	case 'products':
		echo "\t\t<meta name=\"description\" content=\"This is the shopping page for Golden Tree Productions, which sells 
		video production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.\">\n";
		echo "\t\t<title>GTP - Shop</title>\n";
		break;
	case 'returns_and_refunds':
		echo "\t\t<meta name=\"description\" content=\"This is the returns and refunds page for Golden Tree Productions, which sells 
		video production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.\">\n";
		echo "\t\t<title>GTP - Returns &amp; Refunds</title>\n";
		break;
	case 'terms_and_conditions':
		echo "\t\t<meta name=\"description\" content=\"This is the terms and conditions page for Golden Tree Productions, which sells 
		video production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.\">\n";
		echo "\t\t<title>GTP - T's &amp; C's</title>\n";
		break;
}
echo "\t<link href=\"https://fonts.googleapis.com/css?family=Cardo|Josefin+Sans\" rel=\"stylesheet\">\n";
echo "\t<link href=\"css/master.css\" type=\"text/css\" rel=\"stylesheet\">\n";
?>