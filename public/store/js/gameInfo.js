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

// $(document).ready(function(){
        $.getJSON("http://api.ie.ce-it.ir/F95/games/"+gameTitle+"/header.json", function(result){
        // $.getJSON("http://api.ie.ce-it.ir/F95/games/بازی The Last Guardian/header.json", function(result){
            $.each(result, function(i, field){
                $("#header-title").html(field.result.game.title);
                $("#header-img").attr("src",""+field.result.game.large_image);
                $("#header-thumb").attr("src",""+field.result.game.small_image);
                // $("#info-tab").css("border-bottom", "3px solid #0098e4");
				$('#content-info-abstract').html("" + field.result.game.abstract);
				$('#content-info-info').html("" + field.result.game.info);
            });
        });
        
    //     $.getJSON("http://api.ie.ce-it.ir/F95/games/بازی Dishonored 2/comments.json", function(result){
    //         $.each(result, function(i, field){
    //         	var comments = field.result.comments;
    //         	console.log(comments);
    //         	 for(i=0;i<comments.length;i++) {
    //         	 	$("#content-comments").append("<div></div>")
				// }
    //         });
    //     });
// });

function showInfoTab() {
	$("#content-info").css("display", "block");
	$("#content-rank").css("display", "none");
	$("#content-comments").css("display", "none");
	$("#content-similar").css("display", "none");
	$("#content-pics").css("display", "none");
	$("#info-tab").css("border-bottom", "3px solid #0098e4");
	$("#rank-tab").css("border-bottom", "3px solid #ebebeb");
	$("#comments-tab").css("border-bottom", "3px solid #ebebeb");
	$("#similar-tab").css("border-bottom", "3px solid #ebebeb");
	$("#pics-tab").css("border-bottom", "3px solid #ebebeb");
}
function showRankTab() {
	$("#content-info").css("display", "none");
	$("#content-rank").css("display", "block");
	$("#content-comments").css("display", "none");
	$("#content-similar").css("display", "none");
	$("#content-pics").css("display", "none");
	$("#info-tab").css("border-bottom", "3px solid #ebebeb");
	$("#rank-tab").css("border-bottom", "3px solid #0098e4");
	$("#comments-tab").css("border-bottom", "3px solid #ebebeb");
	$("#similar-tab").css("border-bottom", "3px solid #ebebeb");
	$("#pics-tab").css("border-bottom", "3px solid #ebebeb");
}
function showCommentsTab() {
	$("#content-info").css("display", "none");
	$("#content-rank").css("display", "none");
	$("#content-comments").css("display", "block");
	$("#content-similar").css("display", "none");
	$("#content-pics").css("display", "none");
	$("#info-tab").css("border-bottom", "3px solid #ebebeb");
	$("#rank-tab").css("border-bottom", "3px solid #ebebeb");
	$("#comments-tab").css("border-bottom", "3px solid #0098e4");
	$("#similar-tab").css("border-bottom", "3px solid #ebebeb");
	$("#pics-tab").css("border-bottom", "3px solid #ebebeb");
}
function showSimilarTab() {
	$("#content-info").css("display", "none");
	$("#content-rank").css("display", "none");
	$("#content-comments").css("display", "none");
	$("#content-similar").css("display", "block");
	$("#content-pics").css("display", "none");
	$("#info-tab").css("border-bottom", "3px solid #ebebeb");
	$("#rank-tab").css("border-bottom", "3px solid #ebebeb");
	$("#comments-tab").css("border-bottom", "3px solid #ebebeb");
	$("#similar-tab").css("border-bottom", "3px solid #0098e4");
	$("#pics-tab").css("border-bottom", "3px solid #ebebeb");
}
function showPicsTab() {
	$("#content-info").css("display", "none");
	$("#content-rank").css("display", "none");
	$("#content-comments").css("display", "none");
	$("#content-similar").css("display", "none");
	$("#content-pics").css("display", "block");
	$("#info-tab").css("border-bottom", "3px solid #ebebeb");
	$("#rank-tab").css("border-bottom", "3px solid #ebebeb");
	$("#comments-tab").css("border-bottom", "3px solid #ebebeb");
	$("#similar-tab").css("border-bottom", "3px solid #ebebeb");
	$("#pics-tab").css("border-bottom", "3px solid #0098e4");
}

showInfoTab();