function toggleMenu() {

	document.getElementById("primaryNav").classList.toggle("closed");
} // end function

var x = document.getElementById("menuButton");
x.onclick = toggleMenu;