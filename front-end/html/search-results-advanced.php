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

      <script>
        $(document).ready(function(){
          function getParam(param){
            var pageURL = window.location.search.substring(1);
            var URLVar = pageURL.split('&');
              for (var i = 0; i < URLVar.length; i++){
                var paramName = URLVar[i].split('=');
                if (paramName[0] == param){
                  return paramName[1];
                }
              }
            }

            function appendMovie(poster, movieid, name){
              var l1 = "<div id=\"name\" class=\"row\">"+name+"</div>";
              var l2 = "<div id=\"images\" class=\"row\"><div class=\"col-sm-5\"><img class=\"poster\" id=\"poster0\" src=\" " + poster +"\"></div></div>";
              var l3 = "<button type=\"submit\" class=\"info\" value=\"" + movieid + "\">More Info</button>";
              $('.container-fluid').append(l1, l2, l3);
            }

            var country = getParam('country');
            var year = getParam('year');
            var movie = getParam('movie');
            var tv = getParam('tv');
            var happy = getParam('happy');
            var angry = getParam('angry');
            var smart = getParam('smart');
            var excited = getParam('excited');
            var relaxed = getParam('relaxed');
            var shocked = getParam('shocked');
            var scared = getParam('scared');
            var sad = getParam('sad');
            var hungry = getParam('hungry');
            var bored = getParam('bored');

            var postdata = 'country='+country + '&year='+year + '&movie='+movie + '&tv='+tv + '&happy='+happy + '&angry='+angry + '&angry='+angry + '&smart='+smart + '&excited='+excited + '&relaxed='+relaxed + '&shocked='+shocked + '&scared='+scared + '&sad='+sad + '&hungry='+hungry + '&bored='+bored;
            var url = "http://localhost/COMP307/back-end/search-advanced";
            console.log(postdata);

            $.ajax({
              type: "POST",
              url: url,
              data: postdata,
              success: function(data){
                console.log(data);

              }
            }); 

        });
      </script>

      <?php       
       $ids = array(1=>284053, 141052, 274855, 440021, 298250, 211672, 347882, 297762, 390062, 281338);
       $image = array();
       $name = array();
       $jsonStr = file_get_contents("https://api.themoviedb.org/3/movie/284053?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US");
       $jsonObj = json_decode($jsonStr);
       $image[0] = ($jsonObj->poster_path);
       $name[0] = ($jsonObj->title);


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
