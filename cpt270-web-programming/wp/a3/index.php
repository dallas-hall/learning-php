<?php
/* Check if the session has already been started. */
if(!isset($_SESSION)){
	session_start();
}
require_once("functions_script.php");
$currentFilename = getFilenameWithoutExtension(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Setting page information, which I learnt in the course textbook and also at https://www.w3schools.com/tags/tag_meta.asp-->
	<!-- using modules for repeated code -->
	<?php require_once("head_script.php") ?>
</head>
<body>
<!--The page design layout was sourced from the course textbook, using concepts discussed in chapter 15, such as the
960 grid design pattern and above/below the fold. But particularly the layout of the end of chapter example in chapter
 17 was used as a starting point.-->
<div class="pageWrapper" id="indexPage">
	<?php require_once("header_script.php"); ?>
	<section class="pageBody">
		<article class="aboveTheFold">
			<main>
				<p>Welcome to...</p><!--<span id="screenReaderGreeting">Golden Tree Productions.</span>-->
				<img src="img/logos/gtp_new_logo_half_size.png" alt="The new logo of Golden Tree Productions. It has a
			golden tree sprouting out of what looks a book with the words Golden Tree Production written underneath.">
				<p>This is a place to learn about yourself and the universe. And capture it too!</p>
				<div id="servicesLinks"><a href="products.php#videoServices" class="productsLink">
						<img src="img/people/jack_with_camera.jpg" width="115px" height="100px" alt="Jack Egerton with a
					video camera.">
						<p>Video Products &amp; Services</p></a>
					<a href="products.php#psychicServices" class="productsLink">
						<img src="img/people/amanda_interview.jpg" width="130px" height="100px" alt="Amanda Hall
						being interviewed about the release of Simply Tarot.">
						<p>Psychic Products &amp; Services</p></a>
				</div>
			</main>
		</article>
		<hr>
		<section class="belowTheFold">
			<div id="column1">
				<h1>Video Services</h1>
				<ul>
					<li>Video Production</li>
					<ul>
						<li>Video Filming</li>
						<li>Video Editing</li>
						<li>Pre &amp; Post Media Production</li>
						<li>Video Stills As Photos</li>
						<li>Television Documentaries</li>
						<li>Video Show Reels</li>
						<li>Video Music Clips</li>
						<li>Corporate Training Video &amp; DVD's</li>
						<li>Resume on DVD</li>
					</ul>
					<li>Video Tape (VHS &amp; Super 8) Transfer To</li>
					<ul>
						<li>CD</li>
						<li>DVD</li>
						<li>USB</li>
						<li>SD Cards</li>
					</ul>
				</ul>
			</div>
			<div id="column2">
				<h1>Psychic Services</h1>
				<ul>
					<li>Accolades</li>
					<ul>
						<li>Psychic Hall Of Fame 2013</li>
						<li>Australian Psychic of the Year 2014/15/16</li>
					</ul>
					<li>Psychic phone &amp; email readings</li>
					<li>Astrology Charts</li>
					<li>Simply Tarot Sets</li>
					<li>Secrets of Tarot set</li>
					<li>Tarot Courses</li>
					<li>Astrology courses</li>
					<li>Soy Candles</li>
					<li>The Amanda Hall Psychic Show</li>
				</ul>
			</div>
		</section>
	</section>
	<?php require_once("footer_script.php"); ?>
</div>

<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php include_once("debug.php"); ?>
</body>
</html>