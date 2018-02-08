function checkLogin() {
	var messageElement = document.getElementById("loginMessage");
	var emailElement = document.getElementById("loginEmail");
	var emailContent = emailElement.value.toString();
	console.log(emailContent + " : " + emailContent.length);
	var passwordElement = document.getElementById("loginPassword");
	var passwordContent = passwordElement.value.toString();
	console.log(passwordContent + " : " + passwordContent.length);

	if(!emailContent.length > 0 ) {
		messageElement.innerText = "Email is invalid.";
		console.log("false");
		return false;
	}
	else if (passwordContent.length < 8) {
		messageElement.innerText = "Password must be >= 8 characters.";
		console.log("false");
		return false;
	}
	else {
		messageElement.innerText = "";
		console.log("true");
		return true;
	}
}

