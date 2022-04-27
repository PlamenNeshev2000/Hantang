let factStudents = document.getElementById("fact-students");
let factTeachers = document.getElementById("fact-teachers");
let factActivities = document.getElementById("fact-activities");
let factCourses = document.getElementById("fact-courses");

function count(element, limit) {
	let counter = 0;
	let i = setInterval(function() {
		element.innerText = counter;
		counter++;

		if (counter === limit + 1) {
			clearInterval(i);
		}
	}, 20);
};

count(factStudents, Number(factStudents.getAttribute("data-number")));
count(factTeachers, Number(factTeachers.getAttribute("data-number")));
count(factActivities, Number(factActivities.getAttribute("data-number")));
count(factCourses, Number(factCourses.getAttribute("data-number")));