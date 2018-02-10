<?php
/* The assignment related functions */
function showFormattedString($aString) {
	echo "<pre>";
	echo "$aString";
	echo "</pre>";
}

function showFormattedArray($anArray) {
	echo "<pre>";
	print_r($anArray);
	echo "</pre>";
}

function php2js($anArray, $jsArrayName) {
	echo "<script>\n";
	echo "var $jsArrayName = {\n";
	$counter = 1;
	foreach ($anArray as $aKey => $aValuePair) {
		/* put a comma and tab for the line, otherwise just a tab*/
		if ($counter > 1)
			echo "\t";
		else
			echo "\t";
		echo "$aKey : $aValuePair";
		$counter++;
	}
	echo "}\n";
	echo "</script>\n\n";
}

/* https://stackoverflow.com/a/4221345 */
function getFilenameWithoutExtension($filename) {
	return pathinfo($filename, PATHINFO_FILENAME);
}
?>
