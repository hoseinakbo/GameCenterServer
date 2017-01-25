function getParameterByName(name, url) {
	if (!url) {
		url = window.location.href;
	}
	name = name.replace(/[\[\]]/g, "\\$&");
	var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
		results = regex.exec(url);
	if (!results) return null;
	if (!results[2]) return '';
	return decodeURIComponent(results[2].replace(/\+/g, " "));
}

var gameTitle = getParameterByName('game');

$.getJSON("http://api.ie.ce-it.ir/F95/home.json", function(result){
	        $.each(result, function(i, field){
	        	var new_games = field.result.homepage.new_games;
				for(i=0;i<new_games.length;i++) {
	        	 	var small_image = new_games[i].small_image;
					var title = new_games[i].title;
					var categories = new_games[i].categories;
					var rate = new_games[i].rate;
					catString = '';
					for(j=0;j<categories.length;j++)
						catString += categories[j] + ", "

					var temp = "<div class=\"game-card col-md-3\"> <img src="+small_image+"> <div class=\"game-card-title text-right\">"+title+"</div> <div class=\"game-card-category text-right\">"+catString+"</div> <div class=\"game-card-stars text-right\"> <i class=\"fa fa-star\" aria-hidden=\"true\"></i> <i class=\"fa fa-star\" aria-hidden=\"true\"></i> <i class=\"fa fa-star\" aria-hidden=\"true\"></i> <i class=\"fa fa-star\" aria-hidden=\"true\"></i> <i class=\"fa fa-star\" aria-hidden=\"true\"></i>  </div> </div>"
					$("#games-div").append(temp);
				}
				var comments = field.result.homepage.comments;
				for(i=0;i<comments.length;i++) {
					var text = comments[i].text;
					var date = comments[i].date;
					var player = comments[i].player.name;
					temp = "<div class=\"row row-item\"> <div class=\"col-md-10\"> <div><p class=\"inlined\">"+date+"</p></div> <div><h4 class=\"inlined comment-text\">"+player+": "+text+"</h4></div> </div> <div class=\"col-md-2 text-left\"> <img src=\"\" class=\"item-pic\"> </div> </div>"
					$("#comments-div").append(temp);
				}
				var slider = field.result.homepage.slider;
				for(i=0;i<slider.length;i++) {
					var large_image = slider[i].large_image;
					temp = "<div class=\"carousel-item\"> <img src="+large_image+" class=\"carousel-img\"> <h1>"+(i+4)+"</h1> </div>";
					$("#sync1").append(temp);
					$("#sync2").append(temp);
				}
				$(document).ready(function() {

					var sync1 = $("#sync1");
					var sync2 = $("#sync2");

					sync1.owlCarousel({
						singleItem : true,
						slideSpeed : 1000,
						navigation: false,
						pagination:false,
						afterAction : syncPosition,
						responsiveRefreshRate : 200,
					});

					sync2.owlCarousel({
						items : 15,
						itemsDesktop      : [1199,10],
						itemsDesktopSmall     : [979,10],
						itemsTablet       : [768,8],
						itemsMobile       : [479,4],
						pagination:false,
						responsiveRefreshRate : 100,
						afterInit : function(el){
							el.find(".owl-item").eq(0).addClass("synced");
						}
					});

					function syncPosition(el){
						var current = this.currentItem;
						$("#sync2")
							.find(".owl-item")
							.removeClass("synced")
							.eq(current)
							.addClass("synced")
						if($("#sync2").data("owlCarousel") !== undefined){
							center(current)
						}
					}

					$("#sync2").on("click", ".owl-item", function(e){
						e.preventDefault();
						var number = $(this).data("owlItem");
						sync1.trigger("owl.goTo",number);
					});

					function center(number){
						var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
						var num = number;
						var found = false;
						for(var i in sync2visible){
							if(num === sync2visible[i]){
								var found = true;
							}
						}

						if(found===false){
							if(num>sync2visible[sync2visible.length-1]){
								sync2.trigger("owl.goTo", num - sync2visible.length+2)
							}else{
								if(num - 1 === -1){
									num = 0;
								}
								sync2.trigger("owl.goTo", num);
							}
						} else if(num === sync2visible[sync2visible.length-1]){
							sync2.trigger("owl.goTo", sync2visible[1])
						} else if(num === sync2visible[0]){
							sync2.trigger("owl.goTo", num-1)
						}

					}

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

				});

			});
});