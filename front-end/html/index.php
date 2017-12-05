<!DOCTYPE html>
<html>

  <?php 
    require 'head.html';
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

      <!--SIGN UP BANNER-->
      <div class="row">
        <button style="text-align: center;" id="sign-up-banner">Moodie: get recommendations and rate media based on what you feel like watching.<br/> Sign up here to get the full features!
        </button>

      </div>

      <!--FEATURED-->
      <div class="row">
        <button class="section-btn" id="featured-btn" data-toggle="tooltip" data-placement="top" title="Featured"></button>
      </div>

      <div class="multiple-items-big" id="featured-slideshow">
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

      <!--NEAR ME-->
      <div class="row">
        <button class="section-btn" id="near-btn" data-toggle="tooltip" data-placement="top" title="Near Me"></button>
      </div>

      <div class="multiple-items-big" id="near-slideshow">
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

      <script type="text/javascript">
        $(document).ready(function(){
          $('.multiple-items-big').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
          });
        });
      </script>

      </div> <!--END CONTAINER-->

    <!--FOOTER-->
    <div id="appendFooter"></div>
      <script>
        $(function(){
          $("#appendFooter").load("footer.php");
        });
      </script>
  </body>
</html>
