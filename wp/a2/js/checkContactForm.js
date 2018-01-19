function checkContactDetails() {
	var messageElement = document.getElementById("contactMessage");
	var phoneElement = document.getElementById("contactEmail");
	var phoneContent = phoneElement.value.toString();
	console.log(phoneContent);
	var emailElement = document.getElementById("contactPhone");
	var emailContent = emailElement.value.toString();
	console.log(emailContent);

	if (phoneContent == null && emailContent == null) {
		messageElement.innerHTML = "Must enter phone or email or both.";
		return false;
	} else {
		messageElement.innerHTML = "";
		return true;
	}
}