<!DOCTYPE html>
<html>
  <head>
  <?php 
    require 'head.html';
  ?>
  <link href="../css/index-reg.css" type="text/css" rel="stylesheet">
  </head>
  
  <body>
    <!--HEADER-->
    <?php 
    ?>
    <div id="appendHeader"></div>
      <script>
        $(function(){
          $("#appendHeader").load("header.php");
        });
      </script>

    <!--BODY-->
    <div class="container-fluid" id="contain">

      <div id="appendSearch"></div>
      <script>
        $(function(){
          $("#appendSearch").load("search.html");
        });
      </script>

      <!--RECOMMENDED-->
      <div class="row">
        <button class="section-btn" id="rec-btn"></button>
      </div>

      <div id="recList"></div>

      <div class="multiple-items-big">
        <img class="slideshow" id="rec0" src="">
        <img class="slideshow" id="rec1" src="">
        <img class="slideshow" id="rec2" src="">
        <img class="slideshow" id="rec3" src="">
        <img class="slideshow" id="rec4" src="">
        <!--
        <div><img class="slideshow" src=""></div>
        <div><img class="slideshow" src=""></div>
        <div><img class="slideshow" src=""></div>
        <div><img class="slideshow" src=""></div>
        <div><img class="slideshow" src=""></div>-->
      </div>

      <div class="row">
        <!--FEATURED + NEAR ME-->
        <div class="col-sm-6">
          <button class="section-btn" id="featured-btn-reg"></button>
        </div>

        <div class="col-sm-6">
          <button class="section-btn" id="near-btn-reg"></button>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-6">
          <!--FEATURED SLIDESHOW-->
          <div class="multiple-items-small">
            <div><img class="slideshow" src="https://i.imgur.com/lmGx6gv.jpg"></div>
            <div><img class="slideshow" src="https://i.imgur.com/27h2eZJ.jpg"></div>
            <div><img class="slideshow" src="https://i.imgur.com/P8O2FvB.jpg"></div>
            <div><img class="slideshow" src="https://i.imgur.com/lmGx6gv.jpg"></div>
            <div><img class="slideshow" src="https://i.imgur.com/27h2eZJ.jpg"></div>
          </div>
        </div>

        <div class="col-sm-6">
          <!--NEAR ME SLIDESHOW-->
          <div class="multiple-items-small">
            <img class="slideshow" id="near0" src="">
            <img class="slideshow" id="near1" src="">
            <img class="slideshow" id="near2" src="">
            <img class="slideshow" id="near3" src="">
            <img class="slideshow" id="near4" src="">
            <img class="slideshow" id="near5" src="">
            <img class="slideshow" id="near6" src="">
            <img class="slideshow" id="near7" src="">
            <img class="slideshow" id="near8" src="">
            <img class="slideshow" id="near9" src="">
          </div>
        </div>

        </div>
      </div>
    </div><!--END CONTAINER FLUID-->

    <script type="text/javascript">
      $(document).ready(function(){
        $('.multiple-items-big').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1
        });
        $('.multiple-items-small').slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1
        });

        var base_url="http://localhost/COMP307/";

        //RECOMMENDED MOVIES
        /*var url = base_url+'back-end/recommendations';
        $.ajax({
          type:"GET",
          url:url,
          success:function(data){
            var recarray = data.split(';');
            var posters = [];
            var url = "https://api.themoviedb.org/3/movie/";

            //recarray = [16535, 401123, 385129, 397936, 456768];
            //alert(recarray);
            
            var url0 = url + recarray[0] + "?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US";
            var url1 = url + recarray[1] + "?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US";
            var url2 = url + recarray[2] + "?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US";
            var url3 = url + recarray[3] + "?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US";
            var url4 = url + recarray[4] + "?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US";

            var settings = {
              "async": true,
              "crossDomain": true,
              "url": url0,
              "method": "GET",
              "headers": {},
              "data": "{}"
            }
            $.ajax(settings).done(function (response) {
              posters.push("https://image.tmdb.org/t/p/w500" + response['poster_path']);
              $('#pic0').attr('src', posters[0]);
            });
                  
          }
        }); //END RECOMMENDATIONS*/


      }); //END DOCUMENT.READY
    </script>
    <script type="text/javascript" src="nearme.js"></script>

    <!--FOOTER-->
    <div id="appendFooter"></div>
      <script>
        $(function(){
          $("#appendFooter").load("footer.php");
        });
      </script>

  </body>
</html>
