function checkPasswords() {
	var messageElement = document.getElementById("signUpMessage");
	var firstPasswordElement = document.getElementById("password1");
	var firstPasswordContent = firstPasswordElement.value.toString();
	console.log(firstPasswordContent);
	var secondPasswordElement = document.getElementById("password2");
	var secondPasswordContent = secondPasswordElement.value.toString();
	console.log(secondPasswordContent);
	/* Concept taken from https://www.w3schools.com/js/js_errors.asp */
	if (firstPasswordContent.match(secondPasswordContent)) {
		messageElement.innerHTML = "";
		return true;
	}
	else {
		messageElement.innerHTML = "Passwords do not match, try again.";
		return false;
	}
}