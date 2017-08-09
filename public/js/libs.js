var scrollPos = 0;

window.onscroll = backToTop;

$(document).ready(function(){
	$(this).bind("contextmenu", function(e) {
        e.preventDefault();
    });
	
	$('#backtotop').click(function(){
		$("html, body").animate({
            scrollTop: 0
        }, 600);
	});

	var $img = $('img');
	$img.each(function(){
		var $this = $(this);
		$this.click(function(){
			var src = $this.attr('src');
			var Img = $('#imgDetail img');
			var imgDetail = $('#imgDetail');
			Img.attr('src', src);
			imgDetail.fadeIn();
		});
	});

	$('#imgDetailClose').click(function(){
		var imgDetail = $('#imgDetail');
		imgDetail.fadeOut();
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