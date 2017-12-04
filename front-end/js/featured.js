$(document).ready(function(){
  function appendMovie(poster, id, name){
    var l1 = "<a href=\"/COMP307/front-end/html/movie.php?"+id+"\"><img class=\"slideshow\" src=\""+ poster + "\"></a>"
    $('.container-fluid').append(l1);
  }

  var base_url="http://localhost/COMP307/";
  var url = base_url+'back-end/featured';

  $.ajax({
    type: "GET",
    url: url,
    dataType: 'json',
    success:function(data){
      for(var i=0; i<10; i++){
        movieid = data[i][0];
        var api = "https://api.themoviedb.org/3/movie/" + movieid + "?api_key=1753a8a0eee9f02ab07f902370f8f1ea";
        
        var settings = {
          "async": false,
          "crossDomain": true,
          "url": api,
          "headers": {},
          "data": "{}"
        }

        $.ajax(settings).done(function (response) {
          var poster = "https://image.tmdb.org/t/p/w500" + response['poster_path'];
          $('#feat'+i).attr('src', poster);
        });
      }

       
    }
  });

});


var poster = "https://image.tmdb.org/t/p/w500" + response.results[i].poster_path;
var id;
var name;
if(response.results[i].media_type == "movie"){
  name = response.results[i].title;
  id = "movie=" + response.results[i].id + "&tv=0";
}
else if(response.results[i].media_type == "tv") {
  name = response.results[i].name;
  id = "tv=" + response.results[i].id + "&movie=0";
}
appendMovie(poster, id, name);