$(document).ready(function() {
	$('.fancybox').fancybox({
		width : 570,
		scrolling : 'no'
		});
		$("#fancyboxIframe").click(function() {
		$.fancybox.open({
			type : 'iframe',
			padding : 5
		});
	});
});