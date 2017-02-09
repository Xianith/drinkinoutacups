$(document).ready(function(){

	$(".infoShwBtn").click(function() {
		console.log($(this).next('li').attr('style'));

		if ($(this).next('li').attr('style') == 'display: none;') {
			$(this).next('li').css('display','');
			console.log('1');

		} else {
			$(this).next('li').css('display','none');
			console.log('2');
		}
	});


	$(".modalOpener").click(function() {
		var modal = $(this).parent().parent().attr('class');
			$("#" + modal).show();
	});


	$(".close").click(function() {
			$(this).parent().hide();
	});

});