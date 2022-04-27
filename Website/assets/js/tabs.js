function openCity(evt, accordionName) {
	let i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	
	tablinks = document.getElementsByClassName("tablinks");
	
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	
	let accordionTab = document.getElementById(accordionName);
	
	accordionTab.style.display = "inline-block";
	evt.currentTarget.className += " active";
	
	let firstAccordionItem = accordionTab.getElementsByClassName('accordionItem')[0];
	firstAccordionItem.className = 'accordionItem open';

}

document.getElementById("defaultOpen").click();