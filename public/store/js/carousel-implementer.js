// $(document).ready(function() {
//
//   var sync1 = $("#sync1");
//   var sync2 = $("#sync2");
//
//   sync1.owlCarousel({
//     singleItem : true,
//     slideSpeed : 1000,
//     navigation: false,
//     pagination:false,
//     afterAction : syncPosition,
//     responsiveRefreshRate : 200,
//   });
//
//   sync2.owlCarousel({
//     items : 15,
//     itemsDesktop      : [1199,10],
//     itemsDesktopSmall     : [979,10],
//     itemsTablet       : [768,8],
//     itemsMobile       : [479,4],
//     pagination:false,
//     responsiveRefreshRate : 100,
//     afterInit : function(el){
//       el.find(".owl-item").eq(0).addClass("synced");
//     }
//   });
//
//   function syncPosition(el){
//     var current = this.currentItem;
//     $("#sync2")
//       .find(".owl-item")
//       .removeClass("synced")
//       .eq(current)
//       .addClass("synced")
//     if($("#sync2").data("owlCarousel") !== undefined){
//       center(current)
//     }
//   }
//
//   $("#sync2").on("click", ".owl-item", function(e){
//     e.preventDefault();
//     var number = $(this).data("owlItem");
//     sync1.trigger("owl.goTo",number);
//   });
//
//   function center(number){
//     var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
//     var num = number;
//     var found = false;
//     for(var i in sync2visible){
//       if(num === sync2visible[i]){
//         var found = true;
//       }
//     }
//
//     if(found===false){
//       if(num>sync2visible[sync2visible.length-1]){
//         sync2.trigger("owl.goTo", num - sync2visible.length+2)
//       }else{
//         if(num - 1 === -1){
//           num = 0;
//         }
//         sync2.trigger("owl.goTo", num);
//       }
//     } else if(num === sync2visible[sync2visible.length-1]){
//       sync2.trigger("owl.goTo", sync2visible[1])
//     } else if(num === sync2visible[0]){
//       sync2.trigger("owl.goTo", num-1)
//     }
//
//   }
//
//   function resetCarouselHeight() {
//     var sync1 = document.getElementById("sync1");
//     var items = sync1.getElementsByClassName("carousel-item");
//     var mostRatio = 0;
//     for (var i = items.length - 1; i >= 0; i--) {
//       var img = items[i].getElementsByClassName('carousel-img')[0];
//       if(mostRatio < img.naturalWidth/img.naturalHeight)
//       {
//         mostRatio = img.naturalWidth/img.naturalHeight;
//       }
//     }
//     var windowWidth = window.innerWidth;
//     var carouselHeight = windowWidth * (1/mostRatio);
//     for (var i = items.length - 1; i >= 0; i--) {
//       items[i].style.height = carouselHeight + "px";
//     }
//   }
//
//   resetCarouselHeight();
//
//   window.onresize = resetCarouselHeight;
//
// });
