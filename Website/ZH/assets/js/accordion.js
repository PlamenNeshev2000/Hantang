let accordionItem = document.getElementsByClassName('accordionItem');
let accordionHeader = document.getElementsByClassName('accordionItemHeader');

for (i = 0; i < accordionHeader.length; i++) {
	accordionHeader[i].addEventListener('click', toggleItem, false);
}

function toggleItem() {
	let itemClass = this.parentNode.className;
	for (i = 0; i < accordionItem.length; i++) {
		accordionItem[i].className = 'accordionItem close';
	}
	if (itemClass == 'accordionItem close') {
		this.parentNode.className = 'accordionItem open';
	}
}