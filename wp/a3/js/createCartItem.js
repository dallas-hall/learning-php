/* This concept came from the unit JavaScript textbook chapter 3. */

// Create a blank object
var cartItem = new Object();

// Add properties to the object
function createCartItem() {
	// Get the values from the various elements
	cartItem.id = document.getElementById("videoTransferService").getAttribute("value");
	cartItem.quantity = document.getElementById("quantityText").getAttribute("value");
	/* Got the array stuff from https://stackoverflow.com/a/1085810 */
	var source = document.getElementById("transferSource");
	cartItem.source = source.options[source.selectedIndex].text;
	var target = document.getElementById("transferTarget");
	cartItem.target = target.options[target.selectedIndex].text;

	console.log(cartItem.id.toString());
	console.log(cartItem.quantity.toString());
	console.log(cartItem.source.toString());
	console.log(cartItem.target.toString());

	// Return the object
	return cartItem;
}
