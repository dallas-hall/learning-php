<!DOCTYPE html>
<html lang="en">
<head>
	<!--Setting page information, which I learnt in the course textbook and also at https://www.w3schools.com/tags/tag_meta.asp-->
	<!-- using modules for repeated code -->
	<?php require("head.php")?>
	<meta name="description" content="This is the contact us page for Golden Tree Productions, which sells video
	production services and tarot products and services, such as Simply Tarot and Secrets of Tarot.">
	<title>GTP - Contact Us</title>
</head>
<body>
<div class="pageWrapper" id="contactUsPage">
	<?php require("header.php"); ?>
	<section class="pageBodyDualPage">
		<main>
			<article class="column1">
				<h2>Send Us A Message</h2>
				<script type="text/javascript" src="js/checkContactForm.js"></script>
				<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post"
					  onsubmit="return checkContactDetails()">
					<fieldset class="messageFieldSet">
						<legend>Message Details</legend>
						<!--Splitting across multiple lines to stop white space nodes being introduced-->
						<p><label>Name:<input type="text" name="customerName" required
											  placeholder="Enter your name."
								></label><br>
							<label>Email:<input id="contactEmail" type="email" name="email" placeholder=
								"Enter your email"></label><br>
							<label>Phone:<input id="contactPhone" type="text" name="phone"
												placeholder="Enter your phone number"></label><br>
							<label id="messageType">Message Type:
								<select id="messageTypeBox" name="messageType">
									<option value="general" selected>General</option>
									<option value="sale">Sales</option>
									<option value="sale">Quote</option>
								</select></label><br>
							<label>Message Title:<input type="text" name="messageTitle"
														placeholder="Enter your message's title"
								></label><br>
							<label><span id="textAreaLabel">Message:</span
								><textarea id="customerMessage" placeholder="Enter your message"
										   required name="messageText"></textarea></label></p>
						<span id="contactMessage"></span><br>
						<input id="contactSubmit" type="submit" value="Send Message">
					</fieldset>
				</form>
			</article>
			<aside class="column2">
				<h2>Contact Us</h2>
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
			</aside>
		</main>
	</section>
	<?php require("footer.php"); ?>
</div>
<?php require("debug.php"); ?>
</body>
</html>