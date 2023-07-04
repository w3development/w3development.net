function initSlickDocumentReady() {
	if (typeof initSlick === "function") {
		initSlick();
	}
	
}

$(document).ready(function () {
	initSlickDocumentReady();
});