$(document).ready(function(){
	$('body').on('click', '.search-button', function(e){
		e.preventDefault();
		$('.search-bar').css({'max-width':'100%', 'opacity': '1'});
		$('.search-bar input').focus();
	});
	$('body').on('click', '.search-back', function(e){
		e.preventDefault();
		$('.search-bar').css({'max-width':'0px', 'opacity': '0'});
	});
});

$(function() {
	$('.material-card > .mc-btn-action').click(function () {
		var card = $(this).parent('.material-card');
		var icon = $(this).children('i');
		icon.addClass('fa-spin-fast');

		if (card.hasClass('mc-active')) {
			card.removeClass('mc-active');

			window.setTimeout(function() {
				icon
					.removeClass('fa-arrow-left ripple')
					.addClass('fa-bars');

			}, 0);
		} else {
			card.addClass('mc-active');

			window.setTimeout(function() {
				icon
					.removeClass('fa-bars')
					.addClass('fa-arrow-left ripple');

			}, 0);
		}
	});
});

$('#click_advance').click(function(){
	icon = $(this).find("svg");
	icon.toggleClass("fa-sort-down fa-sort-up")
	style.toggleClass("margin-bottom: 2px; margin-top: 2px;")
});