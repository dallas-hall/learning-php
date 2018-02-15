// @@@ Functions @@@
function checkCreditCart() {
	// Get the credit card value as a string and then remove all spaces.
	var spacesRegex = /\s*/g;
	var visaRegex = /^4[0-9]{12,15}$/;
	var visaLogoElement =  document.getElementById("visaLogo");
	var creditCardNoSpace = document.getElementById("checkoutCreditCard").value.toString().trim().replace(spacesRegex, "");

	console.log("element found " + visaLogoElement);
	console.log("card number " + creditCardNoSpace);
	console.log("regex " + spacesRegex);
	console.log("regex " + visaRegex);

	if(visaRegex.test(creditCardNoSpace)) {
		visaLogoElement.removeAttribute("hidden");
		console.log("show");
	} else {
		visaLogoElement.setAttribute("hidden", "hidden");
		console.log("hide");
	}
}


