<?php

// In PHP 4 objects are treated like other variables so when using them as function parameters or doing assignments they are copied. In PHP 5 they are always passed by reference.  This is only half the story though, because changing 

// =
// REFERENCES
// =

$a = new stdClass;
$b = $a;
$c = &$a;

// Do something with the object
$a->foo

/*

http://schlueters.de/blog/archives/125-Do-not-use-PHP-references.html

*/