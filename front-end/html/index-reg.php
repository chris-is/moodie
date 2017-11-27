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
        <img class="slideshow" id="pic0" src="">
        <img class="slideshow" id="pic1" src="">
        <img class="slideshow" id="pic2" src="">
        <img class="slideshow" id="pic3" src="">
        <img class="slideshow" id="pic4" src="">
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
          <div><img class="slideshow" src="https://mediafiles.cineplex.com/Central/Film/Posters/23036_768_1024.jpg"></div>
          <div><img class="slideshow" src="https://mediafiles.cineplex.com/Central/Film/Posters/21755_768_1024.jpg"></div>
          <div><img class="slideshow" src="https://mediafiles.cineplex.com/Central/Film/Posters/27066_768_1024.jpg"></div>
          <div><img class="slideshow" src="https://mediafiles.cineplex.com/Central/Film/Posters/26425_768_1024.jpg"></div>
          <div><img class="slideshow" src="https://mediafiles.cineplex.com/Central/Film/Posters/27470_768_1024.jpg"></div></div>
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
        var url = base_url+'back-end/recommendations';
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

            var settings = {
              "async": true,
              "crossDomain": true,
              "url": url1,
              "method": "GET",
              "headers": {},
              "data": "{}"
            }
            $.ajax(settings).done(function (response) {
              posters.push("https://image.tmdb.org/t/p/w500" + response['poster_path']);
              $('#pic1').attr('src', posters[1]);
            });

            var settings = {
              "async": true,
              "crossDomain": true,
              "url": url2,
              "method": "GET",
              "headers": {},
              "data": "{}"
            }
            $.ajax(settings).done(function (response) {
              posters.push("https://image.tmdb.org/t/p/w500" + response['poster_path']);
              $('#pic2').attr('src', posters[2]);
            });

            var settings = {
              "async": true,
              "crossDomain": true,
              "url": url3,
              "method": "GET",
              "headers": {},
              "data": "{}"
            }
            $.ajax(settings).done(function (response) {
              posters.push("https://image.tmdb.org/t/p/w500" + response['poster_path']);
              $('#pic3').attr('src', posters[3]);
            });

            var settings = {
              "async": true,
              "crossDomain": true,
              "url": url4,
              "method": "GET",
              "headers": {},
              "data": "{}"
            }
            $.ajax(settings).done(function (response) {
              posters.push("https://image.tmdb.org/t/p/w500" + response['poster_path']);
              $('#pic4').attr('src', posters[4]);
            });
                  
          }
        });
      });
    </script>

    <!--FOOTER-->
    <div id="appendFooter"></div>
      <script>
        $(function(){
          $("#appendFooter").load("footer.php");
        });
      </script>

  </body>
</html>
