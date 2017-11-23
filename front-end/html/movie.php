<!DOCTYPE html>
<html>

  <?php 
    require 'head.html';
  ?>
  <link href="../css/movie.css" type="text/css" rel="stylesheet">

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
          <h1 id="name">Miracle in Cell No.7</h1>
        </div>
        
      </div>

      <div id="details" class="row">
        <div id="poster" class="col-sm-4">
          <img src="https://image.tmdb.org/t/p/w500/kqjL17yufvn9OVLyXYpvtyrFfak.jpg" class="poster-img">
        </div>
        <div id="grid" class="col-sm-8">
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
