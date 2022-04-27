var movieDb;
(function() {
	let xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			movieDb = JSON.parse(this.responseText);
			for (let i = 0; i < movieDb.length; i++) {
				let terms = movieDb[i].Title.split(' ').concat(movieDb[i].Genre).concat(movieDb[i].Developer).concat(movieDb[i].Publisher).concat(movieDb[i].Release);
				movieDb[i].terms = terms;
				for (let j = 0; j < terms.length; j++) {
					terms[j] = (terms[j] + '').toLowerCase();
				}
			};
			console.log(movieDb)
		}
	};
	xhr.open("GET", "http://i397736.hera.fhict.nl/SwitchDataBase.json", true);
	xhr.send();
})()

function doSearchKey(e) {
	if (e.key == 'Enter') {
		doSearch();
	}
}

function movieMaches(movie, terms) {
	let score = 0;
	for (let i = 0; i < terms.length; i++) {
		let termScore = 0;
		for (let j = 0; j < movie.terms.length; j++) {
			if (movie.terms[j] == terms[i]) {
				termScore = 10 * terms[i].length;
			} else
			if (movie.terms[j].indexOf(terms[i]) >= 0) {
				termScore = terms[i].length;
			};
		};
		if (!termScore) {
			return 0;
		}
		score += termScore;
	};
	return score;
}

var pastSearches = {};

function doSearch() {
	let phrase = document.getElementById('searchBox').value;

	if (!pastSearches[phrase]) {
		let lst = document.getElementById("searchDb");
		let o = document.createElement("option");
		o.value = phrase;
		lst.appendChild(o);
	};
	pastSearches[phrase] = (pastSearches[phrase] || 0) + 1;


	let terms = phrase.split(' ');
	for (let i = 0; i < terms.length; i++) {
		terms[i] = terms[i].toLowerCase();
	}

	let hits = [];
	console.clear();
	console.log(terms);
	for (let i = 0;
		(i < movieDb.length) && (hits.length < 50); i++) {
		if (movieDb[i].score = movieMaches(movieDb[i], terms)) {
			hits.push(movieDb[i]);
		};
	}
	hits.sort((a, b) => b.score - a.score);
	document.getElementById('results').innerHTML = ' <button onclick="clearBox()">clear</button>';
	if (hits.length == 0) {
		let hit = document.createElement('div');
		hit.innerHTML = 'No results found.'
	}
	for (let i = 0; i < hits.length; i++) {
		console.log(hits[i], hits[i].score);
		let hit = document.createElement('div');
		hit.innerHTML = '<div class="grid-container"><div class="BoxArt"> <img src="' + hits[i].BoxArt + '" style="height: 200px"></div>' +
			'<div class="Title-info"><h2>' + hits[i].Title + '</h2>' +
			'<h3> Console: ' + hits[i].Console + '</h3>' +
			'<i> Genre: ' + hits[i].Genre + '</i>' +
			'<p> Developer: ' + hits[i].Developer + '</p>' +
			'<p> Publisher: ' + hits[i].Publisher + '</p>' +
			'<p> Release (EU): ' + hits[i].Release + '</p></div></div>'

		;
		document.getElementById('results').appendChild(hit);
	}
}

function clearBox() {
	document.getElementById('results').innerHTML = " ";
}
