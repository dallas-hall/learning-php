// @@@ Functions @@@
function takeOne() {
	var targetElement = document.getElementById("quantityText");
	var currentValue = parseInt(targetElement.value.toString());
	console.log(currentValue + ' before REMOVE one');
	// Make sure subtraction won't go under 0
	if (currentValue > 0) {
		currentValue--;
		console.log(currentValue + ' after REMOVE on');
		targetElement.textContent = currentValue.toString();
		targetElement.setAttribute("value", currentValue.toString());
	}
	else {
		console.log("0 found in subtraction.");
	}
}

function checkUserInput() {
	var targetElement = document.getElementById("quantityText");
	console.log(targetElement.value.toString() + ' userinput before parseInt.');
	// parseInt will remove [^0-9]
	var currentValue = parseInt(targetElement.value.toString());
	console.log(currentValue + ' userinput after parseInt.');
	// Catch any input below zero or backspaces
	if (currentValue > 0 && !isNaN(currentValue)) {
		targetElement.textContent = currentValue.toString();
		targetElement.setAttribute("value", currentValue.toString());
	}
	else {
		targetElement.value = 0;
		console.log("NaN or < 0 found in subtraction.");
	}
}

function addOne() {
	var targetElement = document.getElementById("quantityText");
	var currentValue = parseInt(targetElement.value.toString());
	console.log(currentValue + ' before ADD one');
	if (!isNaN(currentValue)) {
		currentValue++;
		console.log(currentValue + ' after ADD one');
		targetElement.textContent = currentValue.toString();
		targetElement.setAttribute("value", currentValue.toString());
	}
	else {
		console.log("NaN found in addition.");
	}
}

// @@@ Variables @@@
var quantitySubtractButton = document.getElementById("quantityMinus");
var quantity = document.getElementById("quantityText");
var quantityAdditionButton = document.getElementById("quantityAdd");

// @@@ Event Listeners @@@
quantitySubtractButton.addEventListener('click', takeOne, false);
quantity.addEventListener('keyup', checkUserInput, false);
quantityAdditionButton.addEventListener('click', addOne, false);