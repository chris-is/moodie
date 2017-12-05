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
        <a href="" id="arec0"><img class="slideshow" id="irec0" src=""></a>
        <a href="" id="arec1"><img class="slideshow" id="irec1" src=""></a>
        <a href="" id="arec2"><img class="slideshow" id="irec2" src=""></a>
        <a href="" id="arec3"><img class="slideshow" id="irec3" src=""></a>
        <a href="" id="arec4"><img class="slideshow" id="irec4" src=""></a>
        <a href="" id="arec5"><img class="slideshow" id="irec5" src=""></a>
        <a href="" id="arec6"><img class="slideshow" id="irec6" src=""></a>
        <a href="" id="arec7"><img class="slideshow" id="irec7" src=""></a>
        <a href="" id="arec8"><img class="slideshow" id="irec8" src=""></a>
        <a href="" id="arec9"><img class="slideshow" id="irec9" src=""></a>
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
            <a href="" id="afeat0"><img class="slideshow" id="ifeat0" src=""></a>
            <a href="" id="afeat1"><img class="slideshow" id="ifeat1" src=""></a>
            <a href="" id="afeat2"><img class="slideshow" id="ifeat2" src=""></a>
            <a href="" id="afeat3"><img class="slideshow" id="ifeat3" src=""></a>
            <a href="" id="afeat4"><img class="slideshow" id="ifeat4" src=""></a>
            <a href="" id="afeat5"><img class="slideshow" id="ifeat5" src=""></a>
            <a href="" id="afeat6"><img class="slideshow" id="ifeat6" src=""></a>
            <a href="" id="afeat7"><img class="slideshow" id="ifeat7" src=""></a>
            <a href="" id="afeat8"><img class="slideshow" id="ifeat8" src=""></a>
            <a href="" id="afeat9"><img class="slideshow" id="ifeat9" src=""></a>
          </div>
        </div>

        <div class="col-sm-6">
          <!--NEAR ME SLIDESHOW-->
          <div class="multiple-items-small">
            <a href="" id="anear0"><img class="slideshow" id="inear0" src=""></a>
            <a href="" id="anear1"><img class="slideshow" id="inear1" src=""></a>
            <a href="" id="anear2"><img class="slideshow" id="inear2" src=""></a>
            <a href="" id="anear3"><img class="slideshow" id="inear3" src=""></a>
            <a href="" id="anear4"><img class="slideshow" id="inear4" src=""></a>
            <a href="" id="anear5"><img class="slideshow" id="inear5" src=""></a>
            <a href="" id="anear6"><img class="slideshow" id="inear6" src=""></a>
            <a href="" id="anear7"><img class="slideshow" id="inear7" src=""></a>
            <a href="" id="anear8"><img class="slideshow" id="inear8" src=""></a>
            <a href="" id="anear9"><img class="slideshow" id="inear9" src=""></a>
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

    <!--FOOTER-->
    <div id="appendFooter"></div>
      <script>
        $(function(){
          $("#appendFooter").load("footer.php");
        });
      </script>

  </body>
</html>
