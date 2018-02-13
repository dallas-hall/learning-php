function checkCheckoutForm() {
	// Regex
	var spacesRegex = /\s+/g;
	var nameRegex = /^[A-Za-z .,'\-]+$/;
	// Taken from https://www.regular-expressions.info/email.html
	var emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
	var addressRegex = /[^A-Za-z0-9 .,'\-/\r\n]+/m;
	var phoneRegex = /^\+?614[0-9 ]{2,11}$|^\(?04\)?[0-9 ]{2,11}$/;
	var creditCardRegex = /^[0-9 ]{12,19}$/;

	// Form elements, trimming spaces.
	var name = document.getElementById("checkoutName").value.toString().trim();
	var email= document.getElementById("checkoutEmail").value.toString().trim();
	var address = document.getElementById("checkoutAddress").value.toString().trim();
	var phone = document.getElementById("checkoutPhone").value.toString().trim();
	var creditCard = document.getElementById("checkoutCreditCard").value.toString().trim();
	var creditCardExpiry = document.getElementById("checkoutCreditCardExpiry").value.toString().trim();

	// Error elements
	var nameError = document.getElementById("nameError");
	var emailError= document.getElementById("emailError");
	var addressError = document.getElementById("addressError");
	var phoneError= document.getElementById("phoneError");
	var creditCardError = document.getElementById("creditCardError");
	var creditCardExpiryError = document.getElementById("creditCardExpiryError");

	// Reset Error elements
	nameError.innerHTML = "";
	emailError.innerHTML = "";
	addressError.innerHTML = "";
	phoneError.innerHTML = "";
	creditCardError.innerHTML = "";
	creditCardExpiryError.innerHTML = "";

	console.clear();
	console.log("name match?: " + nameRegex.test(name));
	console.log("email match?: " + emailRegex.test(email));
	console.log("address match?: " + addressRegex.test(address));
	console.log("phone match?: " + phoneRegex.test(phone.replace(spacesRegex, "")));
	console.log("cc match?: " + creditCardRegex.test(creditCard.replace(spacesRegex, "")));
	console.log("ccDate match?: " + creditCardRegex.test(creditCard.replace(spacesRegex, "")));
	if (!nameRegex.test(name)) {
		nameError.innerHTML = "Name can only have [A-Za-z .,'-]";
		return false;
	} else if (!emailRegex.test(email)) {
		emailError.innerHTML = "Please enter a valid email.";
		return false;
	} else if (addressRegex.test(address)) {
		addressError.innerHTML = "Address can only have [A-Za-z .,'/\\n-]";
		return false;
	} else if (!phoneRegex.test(phone.replace(spacesRegex, ""))) {
		phoneError.innerHTML = "Phone can only start with +614, 614, 04, or (04) and must be complete.";
		return false;
	} else if (!creditCardRegex.test(creditCard.replace(spacesRegex, ""))) {
		creditCardError.innerHTML = "Credit card number can only be between 12 and 19 numbers.";
		return false;
	// NEEDS DATE HERE
	} else {
		nameError.innerHTML = "";
		emailError.innerHTML = "";
		addressError.innerHTML = "";
		phoneError.innerHTML = "";
		creditCardError.innerHTML = "";
		creditCardExpiryError.innerHTML = "";
		return true;
	}
}