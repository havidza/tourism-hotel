var Index = 0;
function gotoSlide(n){
	Index = n-1;
}
function playSlide(n) {
	var i;
	var slides = document.getElementsByClassName("slide");
	var current = document.getElementsByClassName("circle");
	for (i = 0; i < slides.length; i++){
		slides[i].style.display = "none";
		current[i].style.background = "#f1f1f1";
	}

	Index++;
	if (Index > slides.length) {
		Index = 1;
	}
	if (Index < 1) {
		Index = 1;
	}
	slides[Index-1].style.display = "block";
	current[Index-1].style.background="#2f8c13";
	setTimeout(playSlide,3500);
}
playSlide(Index);

