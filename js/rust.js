$(document).ready(function(){

	var scoreboard = $.getJSON( "../rust/challenge_data.json", function(data) {
	  var items = [];
	  var x = 0;

	  var topStats = [];

	    $.each( data.Titles, function(name, data) {
    	if (data.DisplayName != null && data.Count != 0) {

    		if (data.Count >= 1000) {
    			data.Count = ((data.Count / 1000) | 0) + "k";
    		}

    		topStats[x] = data.DisplayName;


    		console.log($.inArray(data.DisplayName, topStats));

    		console.log(topStats[x]);

    		if ($.inArray(data.DisplayName, topStats) != x) {
    			console.log('got here');
    			$.find('.Top' + data.DisplayName).push("<div class='stats-box'><div class='stats-img "+name+"' title='"+name+"'></div><div>"+data.Count+"</div></div></div>");
    			// topStats[x] = null;
    		} else {
				if (x == 0 || x ==6 || x == 13) { items.push("<div class='col-sm-4'><ul class='list-group'>") }
				items.push("<div class='list-group-item Top"+name+"'><div class='stats-name'>"+data.DisplayName+"</div>");
				items.push("<div class='stats-box'><div class='stats-img "+name+"' title='"+name+"'></div><div>"+data.Count+"</div></div></div>");
				if (x == 5|| x ==12 || x >= 20) { items.push("</div></ul>") }
    		}



			// switch (name) {
			// 	case 'AnimalKills':
			// 		items.push("<div class='stats-name'>"+data.DisplayName+"</div>");
			// 		items.push("<div class='stats-box'><div class='stats-img "+name+"' name='"+name+"'></div><div>"+data.Count+"</p></div>");
			// 		break;
			// 	default: 
			// 		items.push("<b class='stats-count'>"+name+"</b>");
			// 		items.push("<p class='stats-count'>"+data.Count+"</p>");
			// 		items.push("<p class='stats-name'>"+data.DisplayName+"</p>");
			// 	    return;
			// }
	    }
	    x++
	    });
	   
	    $( "<ul/>", {
	      "class": "my-new-list",
	      html: items.join( "" )
	    }).appendTo( ".scoreboard" );
	})

	// $('#main').jPut({
	//     jsonData:scoreboard,   //your json data
	//     name:'template'  //jPut template name
	// });

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