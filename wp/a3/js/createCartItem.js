/* This concept came from the unit JavaScript textbook chapter 3. */

// Create a blank object
var cartItem = new Object();

// Add properties to the object
function createCartItem(elementID, elementClass, isVideoTransfer) {
	console.log("elementID is " + elementID + "\n");
	console.log("elementClass is " + elementClass + "\n");

	// Get the values from the various elements
	cartItem.addItem = "true";
	cartItem.id = document.getElementById(elementID.toString()).getAttribute("value");
	cartItem.quantity = document.getElementById(elementClass.toString()).getAttribute("value");

	/* stop the submission of empty cart items */
	if(cartItem.quantity === '0') {
		console.log('Quanity is 0, need to submit SOMETHING.');
		return false;
	}

	/* This step is only needed for video transfer services. */
	if(isVideoTransfer === true) {
		/* Got the array stuff from https://stackoverflow.com/a/1085810 */
		var source = document.getElementById("transferSource");
		cartItem.source = source.options[source.selectedIndex].text;
		var target = document.getElementById("transferTarget");
		cartItem.target = target.options[target.selectedIndex].text;
	}

	console.log(cartItem.add.toString());
	console.log(cartItem.id.toString());
	console.log(cartItem.quantity.toString());
	if(isVideoTransfer === true) {
		console.log(cartItem.source.toString());
		console.log(cartItem.target.toString());
	}

	// Return the object
	console.log(cartItem.toString());
	return cartItem;
}
