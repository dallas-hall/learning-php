function checkCheckoutForm() {
	// Regex
	var spacesRegex = /\s+/g;
	var nameRegex = /^[A-Za-z .,'-]+$/;
	// Taken from https://www.regular-expressions.info/email.html
	var emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
	var addressRegex = /^[A-Za-z .,'/\n-]+$/g;
	var phoneRegex = /^\+?614[0-9 ]{2,}$|^\(?04\)?[0-9 ]{2,}$/;
	var creditCardRegex = /^[0-9 ]{12,19}$/;

	// Form elements, trimming spaces.
	var name = document.getElementById("checkoutName").value.toString().trim();
	var email= document.getElementById("checkoutEmail").value.toString().trim();
	var address = document.getElementById("checkoutAddress").value.toString().trim();
	var phone = document.getElementById("checkoutPhone").value.toString().trim();
	var creditCard = document.getElementById("checkoutCreditCard").value.toString().trim();
	var creditCardExpiry = document.getElementById("checkoutCreditCardExpiry").value.toString().trim();

	// Error elements
	var nameErrorElement = document.getElementById("nameError");
	var emailErrorElement = document.getElementById("emailError");
	var addressErrorElement = document.getElementById("addressError");
	var phoneErrorElement = document.getElementById("phoneError");
	var creditCardErrorElement = document.getElementById("creditCardError");
	var creditCardExpiryErrorElement = document.getElementById("creditCardExpiryError");

	// Reset Error elements
	nameErrorElement.innerHTML = "";
	emailErrorElement.innerHTML = "";
	addressErrorElement.innerHTML = "";
	phoneErrorElement.innerHTML = "";
	creditCardErrorElement.innerHTML = "";
	creditCardExpiryErrorElement.innerHTML = "";

	console.log("name match?: " + nameRegex.test(name));
	console.log("email match?: " + emailRegex.test(email));
	console.log("phone match?: " + phoneRegex.test(phone.replace(spacesRegex, "")));
	console.log("cc match?: " + creditCardRegex.test(creditCard.replace(spacesRegex, "")));
	console.log("ccDate match?: " + creditCardRegex.test(creditCard.replace(spacesRegex, "")));
	if (!nameRegex.test(name)) {
		nameErrorElement.innerHTML = "Name can only have [A-Za-z .,'-]";
		return false;
	} else if (!emailRegex.test(email)) {
		emailErrorElement.innerHTML = "Please enter a valid email.";
		return false;
	} else if (!phoneRegex.test(phone.replace(spacesRegex, ""))) {
		phoneErrorElement.innerHTML = "Phone can only start with +614, 614, 04, or (04) and must be complete.";
		return false;
	} else if (!creditCardRegex.test(creditCard.replace(spacesRegex, ""))) {
		creditCardErrorElement.innerHTML = "Credit card number can only be between 12 and 19 numbers.";
		return false;
	// NEEDS DATE HERE
	} else {
		nameErrorElement.innerHTML = "";
		emailErrorElement.innerHTML = "";
		addressErrorElement.innerHTML = "";
		phoneErrorElement.innerHTML = "";
		creditCardErrorElement.innerHTML = "";
		creditCardExpiryErrorElement.innerHTML = "";
		return true;
	}
}