$(document).ready(function(){

	var scoreboard = $.getJSON( "../rust/challenge_data.json", function(data) {
	  var items = [];
	  var x = 0;

	  var topStats = [];

	    $.each( data.Titles, function(name, data) {
    	if (data.DisplayName != null && data.Count != 0) {

    		if (data.Count >= 1000 && data.Count <= 999999) {
    			data.Count = ((data.Count / 1000) | 0) + "k";
    		}

    		if (data.Count >= 1000000) {
    			data.Count = (data.Count / 1000000).toFixed(1) + "m";
    		}

    		// if (top)

    		// if($.inArray(data.DisplayName, topStats))
    		// {
    		// } else {
    		// 	topStats.push(data.DisplayName);
    		// }


    		// console.log(topStats);

			if (x == 0 || x ==6 || x == 13) { items.push("<div class='col-sm-4'><ul class='list-group'>") }
			items.push("<div class='list-group-item "+data.DisplayName+"'><div class='stats-name Top"+name+"'>"+data.DisplayName+"</div>");
			items.push("<div class='stats-box'><div class='stats-img "+name+"' title='"+name+"'></div><div>"+data.Count+"</div></div></div>");
			if (x == 5 || x ==12 || x >= 20) { items.push("</div></ul>") }
	    x++
		}
	    });
	   
	    $( "<ul/>", {
	      "class": "my-new-list",
	      html: items.join( "" )
	    }).appendTo( ".scoreboard" );
	})

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