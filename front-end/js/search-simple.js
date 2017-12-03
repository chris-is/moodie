$(document).ready(function(){
  $('#searchbar').keypress(function(e){
    if(e.which == 13) {

      var query = $('#searchbar').val();
      query = query.replace(/ /g,"%20");
      var url = "https://api.themoviedb.org/3/search/movie?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US&query=" + query + "&page=1&include_adult=false";

      var settings = {
        "async": true,
        "crossDomain": true,
        "url": url,
        "method": "GET",
        "headers": {},
        "data": "{}"
      }

      $.ajax(settings).done(function (response) {
        window.location.href = '/COMP307/front-end/html/search-results-simple.php';
        for(var i=0; i<1; i++){
          var poster = "https://image.tmdb.org/t/p/w500" + response.results[i].poster_path;
          $('#poster0').attr('src', poster);
          console.log(poster);
        }
      });


    }  
  });

});