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
        <button style="text-align: center;" id="sign-up-banner" onclick="document.getElementById('signup-modal').style.display='block'" style="width:auto">Moodie: get recommendations and rate media based on what you feel like watching.<br/> Sign up here to get the full features!
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

      <!--NEAR ME-->
      <div class="row">
        <button class="section-btn" id="near-btn" data-toggle="tooltip" data-placement="top" title="Near Me"></button>
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

        <!--OLD CAROUSEL CODE
        <div id="near-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://i.imgur.com/lmGx6gv.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://i.imgur.com/27h2eZJ.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://i.imgur.com/P8O2FvB.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://i.imgur.com/P8O2FvB.jpg">
            </div>
          </div>
          <a class="carousel-control-prev" href="#near-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#near-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>-->
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
