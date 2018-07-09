<?php

// =========================================================================================
// FOREACH
// =========================================================================================


foreach ($array as $key => $value) {}

/* 

Gotchas

- using & to directly modify $value leaves a dangling reference to the last value accessed after the loop finishes executing. You MUST call unset($value) to break the reference in order to avoid problems.  See http://php.net/manual/en/control-structures.foreach.php
The nitty gritty of the HOW part of foreach can be found https://stackoverflow.com/questions/10057671/how-does-php-foreach-actually-work.

*/

// Ex. Manipulating a multidimensional grouped array

Class Survey
{
	private static $id = 0;

	public function __construct($type_id)
	{
		$this->type_id = $type_id;
		$this->obj_id = Survey::$id++;
	}
}

$array = [
	45 => [
		1 => [
			new Survey(1),
			new Survey(1),
			new Survey(1)
		],
		2 => [
			new Survey(2),
			new Survey(2),
			new Survey(2)
		]
	]
];

$array2 = [];

foreach ($array as $surveys_by_room => $surveys_by_type) {
	$array2[$surveys_by_room] = $surveys_by_type;
}
$array2[45][1] = 'one';
var_dump($array2);
var_dump($array);

// Notice how there are no lingering connections between the two arrays once the loop finishes execution.  The following code directly edits the arrays but is inherently dangerous because it uses references.  This hasn't even been thoroughly tested so though it appears fine to me, it may introduce hard to detect bugs.

// foreach ($array as $surveys_by_room => &$surveys_by_type) {
// 	foreach ($surveys_by_type as &$type_surveys) {
// 		$type_surveys = reset($type_surveys);
// 	}
// 	unset($type_surveys);
// }
// unset($surveys_by_type);
// dbg_print($array);