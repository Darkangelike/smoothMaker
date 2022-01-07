function show_value2(x) {
	document.getElementById("slider_value2").innerHTML = x;
}
function add_one() {
	document.f.difficulty.value = parseInt(document.f.difficulty.value) + 1;
	show_value2(document.f.difficulty.value);
}
function subtract_one() {
	document.f.difficulty.value = parseInt(document.f.difficulty.value) - 1;
	show_value2(document.f.difficulty.value);
}
