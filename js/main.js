var sub_header = document.getElementById('sub_header');
var main_header = document.getElementById('main_header');

sub_header.style.display = "none";

function sub_header_show() {
	main_header.style.display = "none";
	sub_header.style.display = "block";
}

function sub_header_hide() {
	main_header.style.display = "block";
	sub_header.style.display = "none";
}
