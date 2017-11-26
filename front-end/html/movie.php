<!DOCTYPE html>
<html>

  <?php 
    require 'head.html';
  ?>
  <link href="../css/movie.css" type="text/css" rel="stylesheet">

  <?php
    $jsonurl = "http://api.themoviedb.org/3/discover/movie?%20%20%20%20%20%20%20%20%20%20sort_by=popularity.desc?&api_key=1753a8a0eee9f02ab07f902370f8f1ea";
    $jsonStr = file_get_contents($jsonurl);
    $jsonObj = json_decode($jsonStr);
    $result = $jsonObj->results;
    $ids = array();
    if(is_array($result)){
      foreach($result as $movie) {//$movie is an object and id is a property of it
        $ids[] = ($movie->id);
      }
    }

    foreach($result as $movie) {//$movie is an object and id is a property of it
      if ($ids[19] == ($movie->id)){
        $name = ($movie->title);
        $image_res = ($movie->poster_path);
      }
    }
    ?>


  <body>
    <!--HEADER-->
    <div id="appendHeader"></div>
      <script>
        $(function(){
          $("#appendHeader").load("header.php");
        });
      </script>

    <!--BODY-->
    <div id="bodypart"></div>
      <script>
        $(function(){
          $("#bodypart").load("details.html");
        });
      </script>

    <div class="container-fluid">
      <!--SEARCH-->

    <div id="appendSearch"></div>
      <script>
        $(function(){
          $("#appendSearch").load("search.html");
        });
      </script>

      <div class="row">
        <div class="col-sm-4">
          <div class="row">
            <h1 id="name"><?php echo $name?></h1>
            <div id="movieid" style="display: none;">1234</div>
          </div>
          
          <div id="details" class="row">
            <div id="poster" class="col-sm-5">
              <img src="https://image.tmdb.org/t/p/w500<?php echo $image_res?>" class="poster-img">
            </div>
          </div>
        </div>

        <div id="grid" class="col-sm-7">
          <div id="appendGrid"></div>
          <script>
            $(function(){
              $("#appendGrid").load("grid.php");
            });
          </script>
        </div>

      </div>
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
