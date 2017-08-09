var scrollPos = 0;

window.onscroll = backToTop;

$(document).ready(function(){
	$('#backtotop').click(function(){
		
	});
});

function backToTop(){
	var btnToTop = $('#backtotop');
	if (window.scrollY > 0) {
		btnToTop.fadeIn();
	}
	if (window.scrollY == 0) {
		btnToTop.fadeOut();
	}
}