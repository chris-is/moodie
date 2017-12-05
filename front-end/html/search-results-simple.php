<html>
  
  <?php 
    require 'head.html';
  ?>
  <link href="../css/search-results.css" type="text/css" rel="stylesheet">

  <body>
    <!--HEADER-->
    <div id="appendHeader"></div>
      <script>
        $(function(){
          $("#appendHeader").load("header.php");
        });
      </script>

    <!--BODY-->
    <div class="container-fluid">

      <!--SEARCH-->
      <div id="appendSearch"></div>
      <script>
        $(function(){
          $("#appendSearch").load("search.html");
        });
      </script>

      <div class="row">
        <div id="result-msg">
          Your search returned the following results: 
        </div>
      </div>

      <script>
      $(document).ready(function(){
        $(document).on('mouseenter','#poster', function (event) {
            
        }).on('mouseleave','.poster',  function(){
            
        });
        //Dynamically append new movie name+poster
        function appendMovie(poster, id, name){
          var l1 = "<div id=\"name\" class=\"row\">"+name+"</div>";
          var l2 = "<div id=\"images\" class=\"row\"><div class=\"col-sm-5\"><a href=\"/COMP307/front-end/html/movie.php?"+id+"\"><img class=\"poster\" src=\"" + poster +"\"></a></div></div>";
          $('.container-fluid').append(l1, l2);
        }

        //Find GET query in url
        var query = window.location.search.substring(1);
        var url = "https://api.themoviedb.org/3/search/multi?api_key=1753a8a0eee9f02ab07f902370f8f1ea&query=" + query + "&page=1&include_adult=false";

        //Send API request to TMDB database to get poster
        var settings = {
          "async": true,
          "crossDomain": true,
          "url": url,
          "method": "GET",
          "headers": {},
          "data": "{}"
        }
        $.ajax(settings).done(function (response) {
          for(var i=0; i<10; i++){
            var poster = "https://image.tmdb.org/t/p/w500" + response.results[i].poster_path;
            var id;
            var name;
            if(response.results[i].media_type == "movie"){
              name = response.results[i].title;
              id = "movie=" + response.results[i].id + "&tv=0";
            }
            else if(response.results[i].media_type == "tv") {
              name = response.results[i].name;
              id = "movie=0" + "&tv=" + response.results[i].id;
            }
            appendMovie(poster, id, name);
          }
        });

      });
      </script>


    </div>

    <!--FOOTER-->
    <div id="appendFooter"></div>
      <script>
        $(function(){
          $("#appendFooter").load("footer.php");
        });
      </script>

  </body>
</html>
