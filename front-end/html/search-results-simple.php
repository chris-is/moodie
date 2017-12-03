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
        function appendMovie(poster, movieid, name){
          var l1 = "<div id=\"name\" class=\"row\">"+name+"</div>";
          var l2 = "<div id=\"images\" class=\"row\"><div class=\"col-sm-5\"><img class=\"poster\" id=\"poster0\" src=\" " + poster +"\"></div></div>";
          var l3 = "<button type=\"submit\" class=\"info\" value=\"" + movieid + "\">More Info</button>";
          $('.container-fluid').append(l1, l2, l3);
        }

        var query = window.location.search.substring(1);
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
          for(var i=0; i<10; i++){
            var poster = "https://image.tmdb.org/t/p/w500" + response.results[i].poster_path;
            var movieid = response.results[i].id;;
            var name = response.results[i].original_title;
            appendMovie(poster, movieid, name);
          }
        });

        $('.container-fluid').on('click', '.info', function(){
          var query = $(this).val();
          url = "/COMP307/front-end/html/movie.php?" + query;
          window.location.href = url;
            
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
