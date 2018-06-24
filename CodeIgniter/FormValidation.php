<?php
//------------------------------------------------------------------------------------
//VALIDATION
//------------------------------------------------------------------------------------

// if no rules have been set then
$this->form_validation->run() == false

// $this->form_validation->run() returns NULL when it validates against empty strings without throwing an error

//------------------------------------------------------------------------------------
// CUSTOM VALIDATION FUNCTION
//------------------------------------------------------------------------------------

// Return true if the validation should succeed else false. If neither true or false are returned then the value being validated will be lost