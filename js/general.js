// always use a radix w/ parseInt

// when trying to access a property on an object that may be undefined you can replace the standard series of checks with
return a && a.property
// which is more concise and supposedly faster

// TOPIC: data type checking
typeof 		// for basic data types
instanceof 	// for specific inheritance

// TOPIC: static method
// add the method to the object rather than the prototype