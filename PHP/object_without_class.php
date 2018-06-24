<?php

// create an object without a class

// version < PHP 5.4

$object = new stdClass();
$object->property = 'Here we go';

// version >= PHP 5.4 

$object = (object)['property' => 'value'];