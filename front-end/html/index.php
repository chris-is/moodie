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

      <div class="multiple-items-big">
          <div><img class="slideshow" src="https://i.imgur.com/lmGx6gv.jpg"></div>
          <div><img class="slideshow" src="https://i.imgur.com/27h2eZJ.jpg"></div>
          <div><img class="slideshow" src="https://i.imgur.com/P8O2FvB.jpg"></div>
          <div><img class="slideshow" src="https://i.imgur.com/lmGx6gv.jpg"></div>
          <div><img class="slideshow" src="https://i.imgur.com/27h2eZJ.jpg"></div>
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
        <script type="text/javascript" src="nearme.js"></script>

      <!--NEAR ME-->
      <div class="row">
        <button class="section-btn" id="near-btn" data-toggle="tooltip" data-placement="top" title="Near Me"></button>
      </div>

      <div class="multiple-items-big">
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
