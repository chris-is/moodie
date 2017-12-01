<!DOCTYPE html>
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
          Your search query returned the following results:
        </div>
      </div>

      <?php
       $ids = array(1=>284053, 141052, 274855, 440021, 298250, 211672, 347882, 297762, 390062, 281338);
       $image = array();
       $name = array();
       $jsonStr = file_get_contents("https://api.themoviedb.org/3/movie/284053?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US");
       $jsonObj = json_decode($jsonStr);
       $image[0] = ($jsonObj->poster_path);
       $name[0] = ($jsonObj->title);

       $jsonStr = file_get_contents("https://api.themoviedb.org/3/movie/141052?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US");
       $jsonObj = json_decode($jsonStr);
       $image[1] = ($jsonObj->poster_path);
       $name[1] = ($jsonObj->title);

       $jsonStr = file_get_contents("https://api.themoviedb.org/3/movie/274855?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US");
       $jsonObj = json_decode($jsonStr);
       $image[2] = ($jsonObj->poster_path);
       $name[2] = ($jsonObj->title);

       $jsonStr = file_get_contents("https://api.themoviedb.org/3/movie/440021?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US");
       $jsonObj = json_decode($jsonStr);
       $image[3] = ($jsonObj->poster_path);
       $name[3] = ($jsonObj->title);

       $jsonStr = file_get_contents("https://api.themoviedb.org/3/movie/298250?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US");
       $jsonObj = json_decode($jsonStr);
       $image[4] = ($jsonObj->poster_path);
       $name[4] = ($jsonObj->title);

       $jsonStr = file_get_contents("https://api.themoviedb.org/3/movie/211672?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US");
       $jsonObj = json_decode($jsonStr);
       $image[5] = ($jsonObj->poster_path);
       $name[5] = ($jsonObj->title);

       $jsonStr = file_get_contents("https://api.themoviedb.org/3/movie/347882?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US");
       $jsonObj = json_decode($jsonStr);
       $image[6] = ($jsonObj->poster_path);
       $name[6] = ($jsonObj->title);

       $jsonStr = file_get_contents("https://api.themoviedb.org/3/movie/297762?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US");
       $jsonObj = json_decode($jsonStr);
       $image[7] = ($jsonObj->poster_path);
       $name[7] = ($jsonObj->title);

       $jsonStr = file_get_contents("https://api.themoviedb.org/3/movie/390062?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US");
       $jsonObj = json_decode($jsonStr);
       $image[8] = ($jsonObj->poster_path);
       $name[8] = ($jsonObj->title);

       $jsonStr = file_get_contents("https://api.themoviedb.org/3/movie/281338?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US");
       $jsonObj = json_decode($jsonStr);
       $image[9] = ($jsonObj->poster_path);
       $name[9] = ($jsonObj->title);

      ?>

      <form action ="movie.php" method="POST">
      <div id="name" class="row">
        <h3 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;"> <?php echo $name[0];?> </h3>
      </div>
      <div id="images" class="row">
        <div id="poster" class="col-sm-5">
          <img src="https://image.tmdb.org/t/p/w500<?php echo $image[0];?>" width=70% height=auto>
        </div>
      </div>
        <button type="submit" class="info" name="id" id="id" value="<?php echo $ids[1];?>" style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">More Info</button>
      </form>

      <form action ="movie.php" method="POST">
      <div id="name" class="row">
        <h3 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;"> <?php echo $name[1];?> </h3>
      </div>
      <div id="images" class="row">
        <div id="poster" class="col-sm-5">
          <img src="https://image.tmdb.org/t/p/w500<?php echo $image[1];?>" width=70% height=auto>
        </div>
      </div>
        <button type="submit" class="info" name="id" id="id" value="<?php echo $ids[2];?>" style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">More Info</button>
      </form>

      <form action ="movie.php" method="POST">
      <div id="name" class="row">
        <h3 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;"> <?php echo $name[2];?> </h3>
      </div>
      <div id="images" class="row">
        <div id="poster" class="col-sm-5">
          <img src="https://image.tmdb.org/t/p/w500<?php echo $image[2];?>" width=70% height=auto>
        </div>
      </div>
        <button type="submit" class="info" name="id" id="id" value="<?php echo $ids[3];?>" style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">More Info</button>
      </form>

      <form action ="movie.php" method="POST">
      <div id="name" class="row">
        <h3 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;"> <?php echo $name[3];?> </h3>
      </div>
      <div id="images" class="row">
        <div id="poster" class="col-sm-5">
          <img src="https://image.tmdb.org/t/p/w500<?php echo $image[3];?>" width=70% height=auto>
        </div>
      </div>
        <button type="submit" class="info" name="id" id="id" value="<?php echo $ids[4];?>" style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">More Info</button>
      </form>

      <form action ="movie.php" method="POST">
      <div id="name" class="row">
        <h3 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;"> <?php echo $name[4];?> </h3>
      </div>
      <div id="images" class="row">
        <div id="poster" class="col-sm-5">
          <img src="https://image.tmdb.org/t/p/w500<?php echo $image[4];?>" width=70% height=auto>
        </div>
      </div>
        <button type="submit" class="info" name="id" id="id" value="<?php echo $ids[5];?>" style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">More Info</button>
      </form>

      <form action ="movie.php" method="POST">
      <div id="name" class="row">
        <h3 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;"> <?php echo $name[5];?> </h3>
      </div>
      <div id="images" class="row">
        <div id="poster" class="col-sm-5">
          <img src="https://image.tmdb.org/t/p/w500<?php echo $image[5];?>" width=70% height=auto>
        </div>
      </div>
        <button type="submit" class="info" name="id" id="id" value="<?php echo $ids[6];?>" style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">More Info</button>
      </form>

      <form action ="movie.php" method="POST">
      <div id="name" class="row">
        <h3 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;"> <?php echo $name[6];?> </h3>
      </div>
      <div id="images" class="row">
        <div id="poster" class="col-sm-5">
          <img src="https://image.tmdb.org/t/p/w500<?php echo $image[6];?>" width=70% height=auto>
        </div>
      </div>
        <button type="submit" class="info" name="id" id="id" value="<?php echo $ids[7];?>" style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">More Info</button>
      </form>

      <form action ="movie.php" method="POST">
      <div id="name" class="row">
        <h3 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;"> <?php echo $name[7];?> </h3>
      </div>
      <div id="images" class="row">
        <div id="poster" class="col-sm-5">
          <img src="https://image.tmdb.org/t/p/w500<?php echo $image[7];?>" width=70% height=auto>
        </div>
      </div>
        <button type="submit" class="info" name="id" id="id" value="<?php echo $ids[8];?>" style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">More Info</button>
      </form>

      <form action ="movie.php" method="POST">
      <div id="name" class="row">
        <h3 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;"> <?php echo $name[8];?> </h3>
      </div>
      <div id="images" class="row">
        <div id="poster" class="col-sm-5">
          <img src="https://image.tmdb.org/t/p/w500<?php echo $image[8];?>" width=70% height=auto>
        </div>
      </div>
        <button type="submit" class="info" name="id" id="id" value="<?php echo $ids[9];?>" style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">More Info</button>
      </form>

      <form action ="movie.php" method="POST">
      <div id="name" class="row">
        <h3 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;"> <?php echo $name[9];?> </h3>
      </div>
      <div id="images" class="row">
        <div id="poster" class="col-sm-5">
          <img src="https://image.tmdb.org/t/p/w500<?php echo $image[9];?>" width=70% height=auto>
        </div>
      </div>
        <button type="submit" class="info" name="id" id="id" value="<?php echo $ids[10];?>" style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">More Info</button>
      </form>



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
