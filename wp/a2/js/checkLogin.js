
function checkLogin() {
	var emailElement = document.getElementById("loginEmail");
	var emailContent = emailElement.value.toString();
	console.log(emailContent + " : " + emailContent.length);
	var passwordElement = document.getElementById("loginPassword");
	var passwordContent = passwordElement.value.toString();
	console.log(passwordContent + " : " + passwordContent.length);

	if(!emailContent.length > 0 ) {
		console.log("false");
		return false;
	}
	else if (passwordContent.length < 8) {
		console.log("false");
		return false;
	}
	else {
		console.log("true");
		return true;
	}
}

