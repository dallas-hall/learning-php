function checkContactDetails() {
	var messageElement = document.getElementById("contactMessage");
	var phoneElement = document.getElementById("contactEmail");
	var phoneContent = phoneElement.value.toString();
	console.log(phoneContent);
	var emailElement = document.getElementById("contactPhone");
	var emailContent = emailElement.value.toString();
	console.log(emailContent);

	/* logic taken from https://stackoverflow.com/a/154068 */
	if ((phoneContent === '' && emailContent === '')
		|| (phoneContent == null && emailContent == null)
		|| (!phoneContent && !emailContent)) {
		messageElement.innerHTML = "Must enter phone or email or both.";
		return false;
	} else {
		messageElement.innerHTML = "";
		return true;
	}
}