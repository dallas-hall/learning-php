// @@@ Functions @@@
function takeOne() {
	var targetElement = document.getElementById("quantityText");
	var currentValue = parseInt(targetElement.value.toString());
	console.log(currentValue + ' before REMOVE one');
	targetElement.textContent = currentValue;
	if (currentValue > 0) {
		currentValue--;
		console.log(currentValue + ' after REMOVE on');
		targetElement.value = currentValue;
	}
}

function addOne() {
	var targetElement = document.getElementById("quantityText");
	var currentValue = parseInt(targetElement.value.toString());
	console.log(currentValue + ' before ADD one');
	currentValue++;
	console.log(currentValue + ' after ADD one');
	targetElement.value = currentValue;
}

// @@@ Variables @@@
var quantitySubtractButton = document.getElementById("quantityMinus");
var quantityAdditionButton = document.getElementById("quantityAdd");

// @@@ Event Listeners @@@
quantitySubtractButton.addEventListener('click', takeOne, false);
quantityAdditionButton.addEventListener('click', addOne, false);