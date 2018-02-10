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
	<?php require("head_script.php") ?>
</head>
<body>
<div class="pageWrapper" id="aboutUsPage">
	<?php require("header_script.php"); ?>
	<section class="pageBody">
		<article class="singlePage">
			<main>
				<h1>Who is Golden Tree Productions?</h1>
				<p>Golden Tree Productions journey began in 2004 on the Gold Coast. We evolved from Golden Tree
					Wholistic Health which commenced in 2000 with a dream to share their knowledge, educate the
					public and introduce them to the wonderful world of the Psychic Modalities and the Complimentary
					Therapies. We commenced this journey of discovery with our very own style of expo's the "Sun
					Moon &amp; Star Lifestyle Expo's" which became an institution in South East Queensland with the
					amazing contribution, support and encouragement of our sponsors:</p>
				<ul>
					<li>Channel Seven Network</li>
					<li>Prime Television</li>
					<li>APN Newspapers</li>
					<li>The Super Radio Network</li>
				</ul>
				<p>With our experienced team of experts in most areas of the "New Age Revolution" we opened our
					clinic in Currumbin on the Gold Coast. Our talented team commenced classes, workshops &amp;
					lectures in a variety of subjects. </p>
				<h2>We are all on the highway of life, what will the next turn bring?</h2>
				<p>Then is 2004 we changed direction and went back to our roots of Television/ Video Film Production
					and became a Video Production House with a difference. Also changing direction was the Award
					winning Television Video Producer/Director Jack Egerton joined our team and we evolved into
					Golden Tree Productions.</p>
				<p>We then commenced with an international/national project for publisher/distributor. </p>
				<ul>
					<li>"Hinkler Books Australia"</li>
					<li>"Simply Tarot Box Set"</li>
					<li>Award Winning- Best Seller</li>
				</ul>
				<p>The recreation of the oldest Tarot Deck in the world (Rider-Waite). The Simply Tarot Box Set
					Includes:</p>
				<ul>
					<li>Simply Tarot Cards (78)</li>
					<li>Book - 64 colour pages</li>
					<li>46 min video/DVD Tarot teach yourself</li>
					<li>Author: Amanda Hall</li>
					<li>Video/DVD Production: Director/Producer: Jack Egerton - Golden Tree Productions</li>
					<li>Publisher/Distributor: Hinkler Books Australia Pty Ltd</li>
				</ul>
				<h1>The Journey continues!</h1>
				<p>Changes in technology have made the world our stage. Amanda Hall has clients from all over the
					world seeking her services in readings and courses. This can be delivered seamlessly now with
					all modern forms of technology. The Amanda Hall Psychic show is broadcast worldwide weekly
					through various forms of social media including YouTube – Facebook.+ have been featured on
					powerful broadcast stations in New York city, Toronto and more. We’ve syndicated to real AM
					&amp; FM broadcast stations, not just places like our four spots on iTubes Radio, Nokia, Tunein,
					Reciva Roku. This show is produced by Golden Tree Productions for A1R Psychic Radio on
					Moonstruck TV/Radio Station in Washington, District of Columbia.</p>
				<h1>Our Team</h1>
				<h2>Jack Egerton - Formerly Channel 7 TV</h2>
				<ul>
					<li>TV Director/producer/cameraman with over 30 years broadcast experience.</li>
				</ul>
				<p>It was by accident Jack (John) Egerton was lead into a career in TV his passion was working with
					cattle and farming. He was serving petrol at his family garage when he met someone from Channel
					7 who offered him some work experience and he said yes. That led him into the career of TV. All
					areas of production from filming, setting up studio for sets and filming live TV including
					telethons and regular network shows. Location shoots including major events, sporting events,
					filming news stories and documentaries to name a few. Then the versatile skills of the
					cameraman/director/editor always came in handy even when setting up brand new studio when the
					industry changed formats.</p>
				<p>Award Winning Director Producer Cameraman – Many awards for his TV work and news stories for
					various TV Networks through his career. When Jack joined Golden Tree Productions in 2004 it was
					a very exciting new step in his career to be able to work on projects he was passionate about
					and allow his natural creative flair to soar to new heights. His very first project was to
					write/create/ film/and produce a dvd for Hinkler Books on the Simply Tarot Project. This
					required him actually learning about the Tarot Cards worked and so he actually studies and
					attended a Tarot course with Amanda before this project commenced. This enabled him to have a
					great understanding of how the tarot cards worked and bring to life in the dvd a nd the rest is
					history as they say as it went on to win awards also. Wrote Filmed & Directed The Award Winning
					“Simply Tarot DVD “with Amanda Hall Simply Tarot for Hinkler Books Australia.</p>
				<h2>Amanda Hall Psychic</h2>
				<p>I commenced my journey into Psychic work when I was very young. Now with a career spanning over
					40 years Tarot has always been my passion but I also love working with Astrology I have been
					fortunate to receive many industry awards for my Psychic work. Including Psychic Hall Of Fame
					2013 then Psychic Of The Year 2014-15-16</p>
				<p>I just love working with the Tarot Cards as they are picture cards and share with us their story
					of your life is changing and for ever evolving as we move through life. I took up Astrology very
					early in my career as it had always fascinated me and was drawn to the heavens. Astrology is a
					researched science and this appealed to me as it was not guess work or open to vague
					interpretation. There was definite time factors and guide lines to follow and this gave precise
					information and guidance. Working with candles were always used when I was working with the
					Tarot Card, reading teaching or just writing another course. I always feel they clear the energy
					and make it pure and protected ready for work. As candles were always burning during my work it
					was not unrealistic to gravitate into designing a candle range for my own personal use and then
					I made them available for my customers to bring changes into their busy lives.</p>
				<p>Then in the early 1980’s I commenced teaching Tarot in the Australian College System. This
					enabled me to write the Award Winning Best Selling – Simply Tarot for Hinkler Books Australia.
					Book, DVD & Tarot Cards. Recently Hinkler Books expanded our Tarot Stable to include the brand
					new Secrets Of Tarot Kit.</p>
				<p>Now I have my very own weekly show The Amanda Hall Psychic Show on A1R Psychic Radio 0n
					Moonstruck TV – YouTube – Facebook and many various other platforms.</p>
			</main>
		</article>
	</section>
	<?php require("footer_script.php"); ?>
</div>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
<?php include_once("debug.php"); ?>
</body>
</html>