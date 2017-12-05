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
      var id = response.results[i].id;
      var movieid = "movie="+id+"&tv=0";
      var poster = "https://image.tmdb.org/t/p/w500" + response.results[i].poster_path;
      var link = "/COMP307/front-end/html/movie.php?"+movieid;
      $('#anear'+i).prop('href', link);
      $('#inear'+i).attr('src', poster);
    }
    
  });
});