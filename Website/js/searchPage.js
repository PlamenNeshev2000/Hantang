function findString(str) {

	const pages = ["about", "courses", "admission", "contact", "home"];

	if (pages.includes(str)) {
		location.replace(`${str}.html`);
	}

	if (window.find) {
		strFound = self.find(str)
		if (!strFound) {
			strFound = self.find(str, 0, 1)
			while (self.find(str, 0, 1)) continue
		}
	}
	if (!strFound) alert("String '" + str + "' not found!")
	return;
};

document.getElementById('pageSearchForm').onsubmit = function() {
	findString(this.pageSearchInput.value.toLowerCase());
	return false;
};