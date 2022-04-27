// Open a big image as a modal when click on it
// Get the modals
const modalImages = document.getElementsByClassName("has-modal");

for (const modalImage of modalImages) {
	let img = modalImage.querySelector(".img");
	let modalImg = modalImage.querySelector(".modal-img");
	let captionText = modalImage.querySelector(".caption");
	let modal = modalImage.querySelector(".modal")
	img.onclick = function() {
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
	}
	// When the user clicks outside the modal, close it!
	modal.onclick = function() {
		modal.style.display = "none";
	}
}