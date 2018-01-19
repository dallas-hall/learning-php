function checkSignUp() {
	var messageElement = document.getElementById("signUpMessage");
	var firstPasswordElement = document.getElementById("password1");
	var firstPasswordContent = firstPasswordElement.value.toString();
	console.log(firstPasswordContent);
	var secondPasswordElement = document.getElementById("password2");
	var secondPasswordContent = secondPasswordElement.value.toString();
	console.log(secondPasswordContent);
	/* Concept taken from https://www.w3schools.com/js/js_errors.asp */
	if (firstPasswordContent.length < 8 || secondPasswordContent.length < 8){
		messageElement.innerText = "Password must be >= 8 characters.";
		return false;
	}
	else if (firstPasswordContent.match(secondPasswordContent) && firstPasswordContent.length >= 8 && secondPasswordContent.length >= 8) {
		messageElement.innerHTML = "";
		return true;
	}
	else {
		messageElement.innerHTML = "Passwords do not match, try again.";
		return false;
	}
}