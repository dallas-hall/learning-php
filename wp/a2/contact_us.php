<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Golden Tree Productions</title>
	<link href="https://fonts.googleapis.com/css?family=Cardo|Josefin+Sans" rel="stylesheet">
	<link href="css/master.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="pageWrapper" id="contactUsPage">
	<header>
		<a class="navigation_image" href="index.php"><img src="img/logos/gtp_new_logo_tree_only.png" width="50px"
														  height="50px"
														  alt="The new logo of Golden Tree Productions. It has a golden tree sprouting out of what looks a book.">
			<h1>Golden Tree Productions</h1></a>
		<nav id="topNavigation">
			<ul>
				<li><a href="index.php" class="current">Home</a></li>
				<li><a href="products.php" class="">Shop</a></li>
				<li><a href="blog.php" class="">Blog</a></li>
				<li><a href="contact_us.php" class="">Contact Us</a></li>
				<li><a href="#bottomNavigation" class="">Bottom</a></li>
			</ul>
		</nav>
		<fieldset id="membersArea">
			<legend>Members Area</legend>
			<form action="login.php" class="memberButtons">
				<input id="buttonLogin" type="submit" name="login" value="Login">
			</form>
			<form action="signup.php" class="memberButtons">
				<input id="buttonSignUp" type="submit" name="signUp" value="Sign Up">
			</form>
		</fieldset>
		<span class="breadcrumbs"><a href="index.php">Home</a></span><span class="breadcrumbs"> Contact Us</span>
	</header>
	<section class="pageBody">
		<main>
			<article class="column1">
				<h2>Send Us A Message</h2>
				<form action="" method="post">
					<fieldset class="messageFieldSet">
						<legend>Message Details</legend>
						<!--Splitting across multiple lines to stop white space nodes being introduced-->
						<p><label>Name:<input type="text" name="customerName" required
											  placeholder="Enter your name."
								></label><br>
							<label>Email:<input type="email" name="customerEmail" placeholder="Enter your email"
								></label><br>
							<label>Phone:<input type="text" name="customerPhone"
												placeholder="Enter your phone number"
								></label><br>
							<label id="messageType">Message Type:
								<select name="messageType">
									<option value="general">General Inquiry</option>
									<option value="sale">Sales Inquiry</option>
								</select></label><br>
							<label>Message Title:<input type="text" name="messageTitle"
														placeholder="Enter your message's title"
								></label><br>
							<label><span id="textAreaLabel">Message:</span
								><textarea id="customerMessage" placeholder="Enter your message"
										   required></textarea></label></p>
					</fieldset>
				</form>
			</article>
			<aside class="column2">
				<h2>Contact Us</h2>
				<article>
					<h3>Jack</h3>
					<table>
						<thead></thead>
						<tbody>
						<tr>
							<th scope="row">Phone:</th>
							<td>
								<address>0423-574-669</address>
							</td>
						</tr>
						<tr>
							<th scope="row">Email:</th>
							<td>
								<address>
									<a class="email"
									   href="mailto:jack@goldentree.com.au?Subject=Golden%20Tree%20Video%20Question">jack@goldentree.com.au
									</a>
								</address>
							</td>
						</tr>
						</tbody>
						<tfoot></tfoot>
					</table>
					<h3>Amanda</h3>
					<table>
						<thead></thead>
						<tbody>
						<tr>
							<th scope="row">Phone:</th>
							<td>
								<address>0412-435-558</address>
							</td>
						</tr>
						<tr>
							<th scope="row">Email:</th>
							<td>
								<address>
									<a class="email"
									   href="mailto:amanda@goldentree.com.au?Subject=Golden%20Tree%20Tarot%20Question"
									>amanda@goldentree.com.au
									</a>
								</address>
							</td>
						</tr>
						</tbody>
						<tfoot></tfoot>
					</table>
					<h3>Operating Hours</h3>
					<table>
						<thead></thead>
						<tbody>
						<tr>
							<th scope="row">Mon-Fri</th>
							<td>9am-5pm</td>
						</tr>
						<tr>
							<th scope="row">Sat</th>
							<td>10am-4pm</td>
						</tr>
						<tr>
							<th scope="row">Sun</th>
							<td>Closed</td>
						</tr>
						</tbody>
						<tfoot></tfoot>
					</table>
					<h3>Business Location</h3>
					<p>Elanora, Queensland, Australia.</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28146.056913179313!2d153.43400975368306!3d-28.138660037360847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b91026870e4b43f%3A0x502a35af3dea2a0!2sElanora+QLD+4221!5e0!3m2!1sen!2sau!4v1515917209715"
							width="320" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
				</article>
			</aside>
		</main>
	</section>
	<footer>
		<h2>Additional Links</h2>
		<a class="navigation_image" href="index.php"><img src="img/logos/gtp_new_logo_tree_only.png" width="50px"
														  height="50px"
														  alt="The new logo of Golden Tree Productions. It has a golden tree sprouting out of what looks a book."
			></a>
		<nav id="bottomNavigation">
			<ul>
				<li><a href="about_us.php" class="">About</a></li>
				<li><a href="contact_us.php" class="">Contact Us</a></li>
				<li><a href="privacy.php" class="">Privacy Policy</a></li>
				<li><a href="returns_and_refunds.php" class="">Returns & Refunds</a></li>
				<li><a href="terms_and_conditions.php" class="">Terms & Conditions</a></li>
				<li><a href="#topNavigation" class="">Top</a></li>
			</ul>
		</nav>
		<div id="finalMessage">&copy; Golden Tree Productions,
			<span id="currentYear"></span>. Built by Dallas Hall - s3461243.
		</div>
		<!-- Using JavaScript to add the current year into the page dynamically -->
		<script type="text/javascript" src="js/getDate.js"></script>
	</footer>
</div>
</body>
</html>