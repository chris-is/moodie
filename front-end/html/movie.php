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

      <div id="name" class="row">
        <h1 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">Miracle in Cell No.7</h1>
      </div>

      <div id="images" class="row">
        <div id="poster" class="col-sm-5">
          <img src="https://image.tmdb.org/t/p/w500/kqjL17yufvn9OVLyXYpvtyrFfak.jpg" width=70% height=auto>
        </div>
        <div id="grid" class="col-sm-7">
          <img src="../img/mood-grid.jpg" width=70% height=auto>
        </div>
      </div>
      <div class="row">
        <button style="text-align: center;" id="details" onclick="document.getElementById('details-modal').style.display='block'" style="width:auto">More info</button>
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