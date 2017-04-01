function resize() {
	//this is a really bad attempt at responsive design but i don't know jquery :(
	if (screen.width < 500) {
		document.getElementById("navbar").style.fontSize = "800%";
		document.getElementsByTagName("form").contentDocument.style.fontSize = "200%";
		document.getElementById("welcome").style.fontSize = "600%";
	}
}
