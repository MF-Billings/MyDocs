// deep copy

JSON.parse(JSON.stringify(obj))
// with jQuery
jQuery.extend(true, {}, obj);	// not sure this is exactly it but it's a starting point

// References

// https://stackoverflow.com/questions/122102/what-is-the-most-efficient-way-to-deep-clone-an-object-in-javascript