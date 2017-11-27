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

      <script>
        $(document).ready(function() {
          var base_url="http://localhost/COMP307/";
          var url = base_url+'back-end/recommendations';
          $.ajax({
            type:"GET",
            url:url,
            success:function(data){
              $("#recList").html("");
              $("#recList").prepend(data);
            }
          });
        });
      </script>

      <div id="recList"></div>

      <div class="multiple-items-big">
        <div><img class="slideshow" src="https://i.imgur.com/27h2eZJ.jpg"></div>
        <div><img class="slideshow" src="https://i.imgur.com/27h2eZJ.jpg"></div>
        <div><img class="slideshow" src="https://i.imgur.com/P8O2FvB.jpg"></div>
        <div><img class="slideshow" src="https://i.imgur.com/lmGx6gv.jpg"></div>
        <div><img class="slideshow" src="https://i.imgur.com/27h2eZJ.jpg"></div>
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
            for(var i=0; i<5; i++){
              alert(recarray[i]);
            }
            
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
