<!DOCTYPE html>
<html>
  
  <?php 
    require 'head.html';
  ?>
  <link href="../css/index-reg.css" type="text/css" rel="stylesheet">

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

          <script type="text/javascript">
            $(document).ready(function(){
              $('.multiple-items-small').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1
              });
            });
          </script>

        <div class="col-sm-6">
          <!--NEAR ME SLIDESHOW-->
          <div class="multiple-items-small">
            <div><img class="slideshow" src="https://i.imgur.com/lmGx6gv.jpg"></div>
            <div><img class="slideshow" src="https://i.imgur.com/27h2eZJ.jpg"></div>
            <div><img class="slideshow" src="https://i.imgur.com/P8O2FvB.jpg"></div>
            <div><img class="slideshow" src="https://i.imgur.com/lmGx6gv.jpg"></div>
            <div><img class="slideshow" src="https://i.imgur.com/27h2eZJ.jpg"></div>
          </div>
        </div>

          <script type="text/javascript">
            $(document).ready(function(){
              $('.multiple-items-small').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1
              });
            });
          </script>

        </div>
      </div>
    </div><!--END CONTAINER FLUID-->

    <!--FOOTER-->
    <div id="appendFooter"></div>
      <script>
        $(function(){
          $("#appendFooter").load("footer.php");
        });
      </script>

  </body>
</html>
