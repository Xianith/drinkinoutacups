// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 500) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}

var modalLock = false;

$(window).scroll(function() {
	if (modalLock == false) {collapseNavbar();}
});
$(document).ready(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
  if ($(this).attr('class') != 'dropdown-toggle active' && $(this).attr('class') != 'dropdown-toggle') {
    $('.navbar-toggle:visible').click();
  }
});

$(document).ready(function(){

	if(window.location.href.indexOf('#changeLog') != -1) {
	  $('#changeLog').show();
	  modalLock = true;
	  $("body").css('overflow','hidden');
	  $(".navbar-fixed-top").removeClass("top-nav-collapse");
	}

	if(window.location.href.indexOf('#voteBox') != -1) {
	  $('#voteBox').show();
	  modalLock = true;
	  $("body").css('overflow','hidden');
	  $(".navbar-fixed-top").removeClass("top-nav-collapse");
	}

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

		} else {
			$(this).next('li').css('display','none');
		}
	});


	$(".modalOpener").click(function() {
		var modal = $(this).data('modal');
			$("#" + modal).show();
			modalLock = true;
			$("body").css('overflow','hidden');
			$(".navbar-fixed-top").removeClass("top-nav-collapse");
	});


	$(".close,.closer").click(function() {
			$(this).parent().hide();
			modalLock = false;
			$("body").css('overflow','visible');
			$(".navbar-fixed-top").addClass("top-nav-collapse");
			$(".navbar-fixed-top").show();
	});

});