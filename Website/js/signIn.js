// Retrieve info from the create form

document.querySelector('#email').value = localStorage.getItem('mail');

function login() {
	let userValid = (localStorage.getItem('mail') == document.querySelector('#email').value);
	let passValid = (localStorage.getItem('psw') == document.querySelector('#pass').value);
	if (userValid && passValid) {
		alert('Welcome to Hantang school');
		return true;
	} else {
		alert('Wrong email or passwords');

	}
	return false;
}



// Validation

// There are fewer ways to pick a DOM node with legacy browsers
const form = document.getElementsByTagName('form')[0];
const email = document.getElementById('email');

// I don't fully understand how siblings work so I can't give explenation, but the idea is clear
let error = email;
while ((error = error.nextSibling).nodeType != 1);

//Email validation format 
const emailRegExp =
	/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/

function addEvent(element, event, callback) {
	let previousEventCallBack = element["on" + event];
	element["on" + event] = function(e) {
		const output = callback(e);

		// A callback that returns `false` stops the callback chain
		// and interrupts the execution of the event callback.
		if (output === false) return false;

		if (typeof previousEventCallBack === 'function') {
			output = previousEventCallBack(e);
			if (output === false) return false;
		}
	}
};


// Because there is no CSS pseudo-class, we have to 
// explicitly set the valid/invalid class on our email field
addEvent(window, "load", function() {
	// Here, we test if the field is empty (remember, the field is not required)
	// If it is not, we check if its content is a well-formed e-mail address.
	const test = email.value.length === 0 || emailRegExp.test(email.value);

	email.className = test ? "valid" : "invalid";
});

// This defines what happens when the user types in the field
addEvent(email, "input", function() {
	const test = email.value.length === 0 || emailRegExp.test(email.value);
	if (test) {
		email.className = "valid";
		error.innerHTML = "";
		error.className = "error";
	} else {
		email.className = "invalid";
	}
});

// This defines what happens when the user tries to submit the data
addEvent(form, "submit", function() {
	const test = email.value.length === 0 || emailRegExp.test(email.value);

	if (!test) {
		email.className = "invalid";
		error.innerHTML = "Wrong email format! someone@example.com"; //Will fix this error message in the future
		error.className = "error active";

		// Some legacy browsers do not support the event.preventDefault() method
		return false;
	} else {
		email.className = "valid";
		error.innerHTML = "";
		error.className = "error";
	}
});