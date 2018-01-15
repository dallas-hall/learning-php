// @@@ Functions @@@
function takeOne() {
	var targetElement = document.getElementById("quantityText");
	var currentValue = parseInt(targetElement.value.toString());
	console.log(currentValue + ' before REMOVE one');
	targetElement.textContent = currentValue;
	if (currentValue > 0 && !isNaN(currentValue)) {
		currentValue--;
		console.log(currentValue + ' after REMOVE on');
		targetElement.value = currentValue;
	}
	else {
		console.log("NaN or < 0 found in subtraction.");
	}
}

function checkUserInput() {
	var targetElement = document.getElementById("quantityText");
	console.log(targetElement.value.toString() + ' userinput before parseInt.');
	var currentValue = parseInt(targetElement.value.toString());
	console.log(currentValue + ' userinput after parseInt.');
	targetElement.value = currentValue;
}

function addOne() {
	var targetElement = document.getElementById("quantityText");
	var currentValue = parseInt(targetElement.value.toString());
	console.log(currentValue + ' before ADD one');
	if (!isNaN(currentValue)) {
		currentValue++;
		console.log(currentValue + ' after ADD one');
		targetElement.value = currentValue;
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