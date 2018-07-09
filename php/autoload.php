<?php

/** part of PHP 5 
 * This eliminates the need to provide include() or require() statements for each of the classes used
 * The example was taken from my Beatles site
 */
spl_autoload_register(function($class) {

	// searches for file in the directories specified within the array ie. dataAccess, model, ...
	$directoriesToSearch = array(
		realpath("./lib").DIRECTORY_SEPARATOR."dataAccess".DIRECTORY_SEPARATOR,
		realpath(".").DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR
	);

	$fileFound = false;
	foreach ($directoriesToSearch as $dir) {
		$file = "$dir$class.php";
 
		if (file_exists($file)) {
			include $file;
			$fileFound = true;
			break;
		}
	}

	if (! $fileFound) {
		throw new Exception("Class not found: $class.php");
	}
});