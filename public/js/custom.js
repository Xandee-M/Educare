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
