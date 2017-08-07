$(document).ready(function(){
	var maxChars = 110;
	var ele = $('.short-des');
	ele.each(function(){
		var $this = $(this);
		var text = $this.text();
		if (text.length > maxChars) {
			$this.text($this.text().substr(0, maxChars)+' ...');
		}
	});
});