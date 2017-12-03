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

      <?php 
       session_start();
       echo $_SESSION['search-results'];
      ?> 

      <div id="name" class="row">
        <h3 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;"> abc </h3>
      </div>
      <div id="images" class="row">
        <div id="poster" class="col-sm-5">
          <img id="poster0" src="" width=70% height=auto>
        </div>
      </div>
        <button type="submit" class="info" name="id" id="id" value="<?php echo $ids[2];?>" style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">More Info</button>

      


      <script>
      $(document).ready(function(){
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
          for(var i=0; i<1; i++){
            var poster = "https://image.tmdb.org/t/p/w500" + response.results[i].poster_path;
            $('#poster0').attr('src', poster);
            console.log(poster);
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
