$(document).ready(function(){
  var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://api.themoviedb.org/3/movie/now_playing?page=1&api_key=1753a8a0eee9f02ab07f902370f8f1ea&page=1",
    "method": "GET",
    "headers": {},
    "data": "{}"
  }

  $.ajax(settings).done(function (response) {
    for(var i=0; i<10; i++){
      var url = "https://image.tmdb.org/t/p/w500" + response.results[i].poster_path;
      $('#poster'+i).attr('src', url);
    }
    
  });
});