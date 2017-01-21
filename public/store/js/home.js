function resetCarouselHeight() {
	var sync1 = document.getElementById("sync1");
	var items = sync1.getElementsByClassName("carousel-item");
	var mostRatio = 0;
	for (var i = items.length - 1; i >= 0; i--) {
		var img = items[i].getElementsByClassName('carousel-img')[0];
		if(mostRatio < img.naturalWidth/img.naturalHeight)
		{
			mostRatio = img.naturalWidth/img.naturalHeight;
		}
	}
	var windowWidth = window.innerWidth;
	var carouselHeight = windowWidth * (1/mostRatio);
	for (var i = items.length - 1; i >= 0; i--) {
		items[i].style.height = carouselHeight + "px";
	}
}

resetCarouselHeight();

window.onresize = resetCarouselHeight;