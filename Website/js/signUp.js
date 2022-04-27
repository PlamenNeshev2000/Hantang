function saveInfo() {
	localStorage.setItem('Lname', document.querySelector('#Lname').value);
	localStorage.setItem('Fname', document.querySelector('#Fname').value);
	localStorage.setItem('mail', document.querySelector('#email').value);
	localStorage.setItem('psw', document.querySelector('#password').value);
	return true;
}
document.querySelector('#email').value = localStorage.getItem('mail');

const form = document.getElementsByTagName('form')[0];
const email = document.getElementById('email');

// I don't fully understand how siblings work so I can't give explenation, but the idea is clear
let error = email;
while ((error = error.nextSibling).nodeType != 1);

//Email validation format 
const emailRegExp =
	/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\](\.[a-z0-9]{2,4}){1,2})/



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


addEvent(window, "load", function() {
	// Test if the field is empty (remember, the field is not required)
	// If it is not, we check if its content is a well-formed e-mail address.
	const test = email.value.length === 0 || emailRegExp.test(email.value);

	email.className = test ? "valid" : "invalid";
});

// This defines what happens when the user types in the field
addEvent(email, "input", function() {
	const test = email.value.length === 0 || emailRegExp.test(email.value);
	if (test) {
		email.className = "valid";
		error.innerHTML = "Wrong email format! someone@example.com"; //Will fix this error message in the future
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
		error.innerHTML = "Wrong email format! someone@example.com";
		error.className = "error";
	}
});

// Password Validation:--------------------------------------------------------------------------------------------------------------------------
var myInput = document.getElementById("password").value;
var letter = document.getElementById("letter");
var number = document.getElementById("number");
var length = document.getElementById("length");
var confirmPassword = document.getElementById("confirm_password").value;



// When the user starts to type something inside the password field
myInput.onkeyup = function() {
	// Validate lowercase letters
	var lowerCaseLetters = /[a-z]/g;
	if (myInput.value.match(lowerCaseLetters)) {
		letter.classList.remove("invalid");
		letter.classList.add("valid");
	} else {
		letter.classList.remove("valid");
		letter.classList.add("invalid");
	}

	// Validate numbers
	var numbers = /[0-9]/g;
	if (myInput.value.match(numbers)) {
		number.classList.remove("invalid");
		number.classList.add("valid");
	} else {
		number.classList.remove("valid");
		number.classList.add("invalid");
	}

	// Validate length
	if (myInput.value.length >= 8) {
		length.classList.remove("invalid");
		length.classList.add("valid");
	} else {
		length.classList.remove("valid");
		length.classList.add("invalid");
	}
}

//validate both password boxes !!!  Working 2.0 { I don't know why it is not working if it is inside the privious script}
var check = function() {
	if (document.getElementById('password').value ==
		document.getElementById('confirm_password').value) {
		document.getElementById('message').style.color = 'green';
		document.getElementById('message').innerHTML = 'Password is matching';
		const button = document.getElementById('submit')
		button.disabled = false
	} else {
		document.getElementById('message').style.color = 'red';
		document.getElementById('message').innerHTML = 'Password is not matching';
		const button = document.getElementById('submit')
		button.disabled = true
	}
}