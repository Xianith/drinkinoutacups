// var h = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=" + "World%20of%20Warcraft";
// var i = new XMLHttpRequest();

// i.open("GET", h, true);
// i.send();

// console.log(i);

// var games = {};

// var game_list = [];

console.log(game_list);

function unique(list) {
  var result = [];
  $.each(list, function(i, e) {
    if ($.inArray(e, result) == -1) result.push(e);
  });
  return result;
}

$(document).ready(function () {
	$.get('java/games.txt', function(games) {
   console.log(games);
}, 'text');
});

var top_games = unique(game_list)

console.log(top_games);