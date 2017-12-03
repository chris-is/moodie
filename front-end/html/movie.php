<!DOCTYPE html>
<html>

  <?php 
    require 'head.html';
  ?>
  <link href="../css/movie.css" type="text/css" rel="stylesheet">

  <?php
    $movieid = $_SERVER['QUERY_STRING'];
    $jsonurl = "https://api.themoviedb.org/3/movie/" . $movieid;
    $jsonurl .= "?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US";
    $jsonStr = file_get_contents($jsonurl);
    $jsonObj = json_decode($jsonStr);
    $image = ($jsonObj->poster_path);
    $name = ($jsonObj->title);
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
    <div class="container-fluid">
      <!--SEARCH-->
      <div id="appendSearch"></div>
        <script>
          $(function(){
            $("#appendSearch").load("search.html");
          });
        </script>

      <div class="row">
        <div class="col-sm-5">
          <div class="row">
            <h1 id="name"><?php echo $name?></h1>
            <div id="movieid" style="display: none;"><?php echo $movieid ?></div>
          </div>
          
          <div id="details" class="row">
            <div id="poster">
              <img src="https://image.tmdb.org/t/p/w500<?php echo $image?>" class="poster-img">
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
