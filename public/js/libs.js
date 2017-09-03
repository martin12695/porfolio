var scrollPos = 0;

window.onscroll = backToTop;

$(window).resize(function(){
	$('.prj-recommended .prj-rcm-thumb').each(function(){
		var $this = $(this);
		var width = $this.width();
		var height = width;
		$this.css('height', height);
	});
});

$(document).ready(function(){
	// $(this).bind("contextmenu", function(e) {
 //        e.preventDefault();
 //    });
	
	$('#backtotop').click(function(){
		$("html, body").animate({
            scrollTop: 0
        }, 600);
	});

	var $img = $('img');
	$img.each(function(){
		var windowHeight = $(window).height();
		var $this = $(this);
		$this.click(function(){
			var src = $this.attr('src');
			var Img = $('#imgDetail img');
			var imgDetail = $('#imgDetail');
			Img.attr('src', src);
			
			imgDetail.fadeIn();
			var imgHeight = Img.height();
			var marginTop = (windowHeight-imgHeight)/2;
			Img.css('margin-top', marginTop+'px');
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